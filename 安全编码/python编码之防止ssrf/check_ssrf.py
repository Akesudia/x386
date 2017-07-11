#!/usr/bin/env python
# -*- coding:utf8 -*-

"""

Coded by P牛

Readed And commented by ForrestX386

"""


import re
import socket
import requests
import urlparse
from socket import inet_aton
from struct import unpack
from requests.utils import requote_uri


def check_ssrf(url):
    """
     检测url是否为ssf探测
     1）url是否合法 （http | https）
     2）获取hostname对应的IP
     3）检测ip是否内内部IP

    :param url:
    :return:
    """
    hostname = urlparse.urlparse(url).hostname

    def ip2long(ip_addr):
        return unpack("!L", inet_aton(ip_addr))[0]   # ! 表示网络 big-endian 字节序

    def is_inner_ipaddress(ip):
        ip = ip2long(ip)


        # 错误地判断是否为内网IP的正则
        # if re.match(r"^192\.168(\.([2][0-4]\d|[2][5][0-5]|[01]?\d?\d)){2}$", ip_address) or \
        #         re.match(r"^172\.([1][6-9]|[2]\d|3[01])(\.([2][0-4]\d|[2][5][0-5]|[01]?\d?\d)){2}$", ip_address) or \
        #         re.match(r"^10(\.([2][0-4]\d|[2][5][0-5]|[01]?\d\?\d)){3}$", ip_address):
        #     raise Exception('inner ip address attack')
        #

        # 绕过上述正则的方法
        # 1.
        # 利用八进制IP地址绕过
        #
        # 2.
        # 利用十六进制IP地址绕过
        #
        # 3.
        # 利用十进制的IP地址绕过
        #
        # 4.
        # 利用IP地址的省略写法绕过

        # ping 012.0.0.1
        #
        # ping 0xa.0.0.1
        #
        # struct.unpack('!L', socket.inet_aton('10.0.0.1'))[0]
        #
        # ping 167772161
        #
        # ping 10.1
        #
        # ping 0xA000001
        # 这些都可以绕过上述正则


        # 也可以采用被注释掉的写法
        # return ip2long('127.0.0.0') <= ip <= ip2long('127.255.255.255') or \
        #         ip2long('10.0.0.0') <= ip <= ip2long('10.255.255.255') or \
        #         ip2long('172.16.0.0') <= ip <= ip2long('172.31.0.0') or \
        #         ip2long('192.168.0.0') <= ip <= ip2long('192.168.255.255')

        return ip2long('127.0.0.0') >> 24 == ip >> 24 or \
               ip2long('10.0.0.0') >> 24 == ip >> 24 or \
               ip2long('172.16.0.0') >> 20 == ip >> 20 or \
               ip2long('192.168.0.0') >> 16 == ip >> 16

    try:
        if not re.match(r"^(http|https)?://.*(/)?.*$", url):
            print "url format error"
            return False, "url format error"
        ip_address = socket.getaddrinfo(hostname, 'http')[0][4][0]
        if is_inner_ipaddress(ip_address):
            print "inner ip address attack"
            return False, "inner ip address attack"
        return True, "success"

    except:
        print 'unknow error'
        return False, 'unknow error'


def safe_request_get(url, **kwargs):
    """
    通过响应报文hooks函数，循环遍历每一个30x响应location是否为ssrf探测
    :param url:
    :param kwargs:
    :return:
    """
    def _request_check_location(r, *args, **kwargs):
        """
        hook的回调函数
        :param r:
        :param args:
        :param kwargs:
        :return:
        """
        if not r.is_redirect:
            return

        url = r.headers['location']

        # The scheme should be lower case...
        parsed = urlparse.urlparse(url)
        url = parsed.geturl()
        # Facilitate relative 'location' headers, as allowed by RFC 7231.
        # (e.g. '/path/to/resource' instead of 'http://domain.tld/path/to/resource')
        # Compliant with RFC3986, we percent encode the url.
        if not parsed.netloc:
            url = urlparse.urljoin(r.url, requote_uri(url))
        else:
            url = requote_uri(url)
        succ, errstr = check_ssrf(url)
        if not succ:
            print "SSRF Attack: %s" % (errstr)
            raise requests.exceptions.InvalidURL("SSRF Attack: %s" % (errstr,))

    success, errstr = check_ssrf(url)
    if not success:
        print "SSRF Attack: %s" % (errstr)
        raise requests.exceptions.InvalidURL("SSRF Attack: %s" % (errstr,))

    # 被注释掉的写法有点low
    # r = requests.get(url, allow_redirects=False)
    # while r.is_redirect:
    #     url = r.headers['location']
    #     succ, errstr = check_ssrf(url)
    #     if not succ:
    #         raise Exception('SSRF Attack.')
    #     r = requests.get(url, allow_redirects=False)

    # 获取原有的hooks
    all_hooks = kwargs.get('hooks', dict())

    if 'response' in all_hooks:
        if hasattr(all_hooks['response'], '__call__'):  # 如果可以调用，说明就是一个hook函数，否则是一个list
            r_hooks = [all_hooks['response']]
        else:
            r_hooks = all_hooks['response']

        r_hooks.append(_request_check_location)

    else:
        r_hooks = [_request_check_location]

    # 针对响应报文的hooks
    all_hooks['response'] = r_hooks
    kwargs['hooks'] = all_hooks
    return requests.get(url, **kwargs)