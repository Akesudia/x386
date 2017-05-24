#!/usr/bin/env python
# -*- coding:utf8 -*-

import sys
import codecs
import hashlib


def hash_calc():
    with codecs.open(sys.argv[1], 'rb', encoding='utf8') as fd:
        print "MD5:", "\t", hashlib.md5(fd.read()).hexdigest()
        print "SHA1:", "\t", hashlib.sha1(fd.read()).hexdigest()
        print "SHA256:", "\t", hashlib.sha256(fd.read()).hexdigest()
        print "SHA512:", "\t", hashlib.sha512(fd.read()).hexdigest()


if __name__ == '__main__':
    hash_calc()
