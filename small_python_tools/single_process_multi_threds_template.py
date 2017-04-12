#!/usr/bin/env python
# -*- coding:utf8 -*-

"""
线程共享的内容包括：

进程代码段
进程的公有数据(利用这些共享的数据，线程很容易的实现相互之间的通讯)
进程打开的文件描述符、
信号的处理器、
进程的当前目录和
进程用户ID与进程组ID

线程独有的内容包括：
线程ID
寄存器组的值
线程的堆栈
错误返回码
线程的信号屏蔽码
"""

import sys
import ujson
import Queue
import time
import codecs
import string
import requests
import traceback
import MySQLdb
import itertools
import threading

try:
    import xml.etree.cElementTree as ET
except ImportError:
    import xml.etree.ElementTree as ET


class Resume(object):
    def __init__(self, threads=10):
        self.url = 'http://xxxx/webservice/xxx/getMyResumeInfo?userID={0}'
        self.stop = False
        self.threads = threads
        self.headers = {'Connection': 'close'}
        self.queque = Queue.Queue()
        self.lock = threading.RLock()
        self.conn = MySQLdb.connect(user='root', db='xxxx', passwd='123456', host='localhost', charset='utf8')
        self.sql = """insert into resume(user_name, resume_mobile, resume_sexy, resume_age, resume_permanent_address, resume_stay_address, resume_expected_position, resume_is_married) values(%s, %s, %s, %s, %s, %s, %s, %s)"""
        self.cursor = self.conn.cursor()
        self.long_result = []
        for _ in xrange(1, 798403):
            self.queque.put(_)

    def parse(self, content):
        """

        :return:
        """
        result = []
        try:
            root = ET.fromstring(content)
            _ = ujson.loads(root.text.strip())['Value']['Data']
            if _:
                result.append(_[0]['user_name'])
                result.append(_[0]['resume_mobile'])
                result.append(_[0]['resume_sexy'])
                result.append(_[0]['resume_age'])
                result.append(_[0]['resume_permanent_address'])
                result.append(_[0]['resume_stay_address'])
                result.append(_[0]['resume_expected_position'])
                result.append(_[0]['resume_is_married'])
        except:
            self.lock.acquire()
            traceback.print_exc()
            self.lock.release()
            return "failed"

        self.lock.acquire()
        if len(self.long_result) < 100:
            self.long_result.append(tuple(result))
        else:
            try:
                self.cursor.executemany(self.sql, self.long_result)
                self.conn.commit()
                self.long_result = []
            except:
                traceback.print_exc()
                print self.long_result
            else:
                print "insert 100.."
        self.lock.release()

    def process(self):
        while self.queque.qsize() > 0 and not self.stop:
            userid = self.queque.get()
            for _ in range(3):
                try:
                    req = requests.get(self.url.format(userid), headers=self.headers, timeout=120, verify=False)
                except:
                    continue
                else:
                    if req.status_code == 200:
                        self.parse(req.content)
                        break

    def start(self):
        """

        :return:
        """

        for _ in range(self.threads):
            t = threading.Thread(target=self.process, name=_)
            t.setDaemon(True)
            t.start()

        try:
            while threading.active_count() > 1:
                time.sleep(1)
        except KeyboardInterrupt:
            self.lock.acquire()
            self.stop = True
            print 'wait all sub threads exists......'
            self.lock.release()
        finally:
            while threading.active_count() > 1:
                time.sleep(1)
            else:
                self.cursor.close()
                self.conn.close()


if __name__ == '__main__':
    reload(sys)
    sys.setdefaultencoding('utf8')
    R = Resume(12)
    R.start()
