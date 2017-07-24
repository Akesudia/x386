#!/usr/bin/env python
# -*- coding:utf8 -*-


"""
coded by ForrestX386

各种进制的IP表示及其它们的组合

Refer：http://www.luteam.com/?p=211

"""

import socket
import struct
import itertools



def ip_split_by_comma_oct(ip):
    """

    :param ip:
    :return:
    """

    parsed_result = set()
    ip_split = str(ip).split('.')

    ip_split_oct = [oct(int(_)) for _ in ip_split]

    parsed_result.add('.'.join(ip_split_oct))

    return parsed_result


def ip_split_by_comma_hex(ip):
    """

    :param ip:
    :return:
    """
    parsed_result = set()
    ip_split = str(ip).split('.')

    ip_split_hex = [hex(int(_)) for _ in ip_split]
    parsed_result.add('.'.join(ip_split_hex))
    return parsed_result


def combination_oct_int_ip(ip):
    """

    :param ip:
    :return:
    """

    result = set()
    parsed_result = set()
    ip_split = str(ip).split('.')
    oct_2 = list(itertools.combinations([0, 1, 2, 3], 2))
    oct_3 = list(itertools.combinations([0, 1, 2, 3], 3))


    for n, _ in enumerate(ip_split):
        _tmp = oct(int(_))
        _delete = ip_split[:n] + ip_split[n+1:]
        _delete.insert(n, _tmp)
        result.add(tuple(_delete))


    for _ in oct_2:
        _tmp_ip = ip_split[:]
        _tmp1 = oct(int(ip_split[_[0]]))
        _tmp2 = oct(int(ip_split[_[1]]))
        del _tmp_ip[_[0]]
        del _tmp_ip[_[1] - 1]
        _tmp_ip.insert(_[0], _tmp1)
        _tmp_ip.insert(_[1], _tmp2)
        result.add(tuple(_tmp_ip))


    for _ in oct_3:
        _tmp_ip = ip_split[:]
        _tmp1 = oct(int(ip_split[_[0]]))
        _tmp2 = oct(int(ip_split[_[1]]))
        _tmp3 = oct(int(ip_split[_[2]]))
        del _tmp_ip[_[0]]
        del _tmp_ip[_[1] - 1]
        del _tmp_ip[_[2] - 2]

        _tmp_ip.insert(_[0], _tmp1)
        _tmp_ip.insert(_[1], _tmp2)
        _tmp_ip.insert(_[2], _tmp3)
        result.add(tuple(_tmp_ip))

    for _ in result:
        parsed_result.add('.'.join(_))

    return parsed_result


def combination_hex_int_ip(ip):
    """

    :param ip:
    :return:
    """

    result = set()
    parsed_result = set()
    ip_split = str(ip).split('.')
    hex_2 = list(itertools.combinations([0, 1, 2, 3], 2))
    hex_3 = list(itertools.combinations([0, 1, 2, 3], 3))


    for n, _ in enumerate(ip_split):
        _tmp = hex(int(_))
        _delete = ip_split[:n] + ip_split[n+1:]
        _delete.insert(n, _tmp)
        result.add(tuple(_delete))


    for _ in hex_2:
        _tmp_ip = ip_split[:]
        _tmp1 = hex(int(ip_split[_[0]]))
        _tmp2 = hex(int(ip_split[_[1]]))
        del _tmp_ip[_[0]]
        del _tmp_ip[_[1] - 1]
        _tmp_ip.insert(_[0], _tmp1)
        _tmp_ip.insert(_[1], _tmp2)
        result.add(tuple(_tmp_ip))


    for _ in hex_3:
        _tmp_ip = ip_split[:]
        _tmp1 = hex(int(ip_split[_[0]]))
        _tmp2 = hex(int(ip_split[_[1]]))
        _tmp3 = hex(int(ip_split[_[2]]))
        del _tmp_ip[_[0]]
        del _tmp_ip[_[1] - 1]
        del _tmp_ip[_[2] - 2]

        _tmp_ip.insert(_[0], _tmp1)
        _tmp_ip.insert(_[1], _tmp2)
        _tmp_ip.insert(_[2], _tmp3)
        result.add(tuple(_tmp_ip))

    for _ in result:
        parsed_result.add('.'.join(_))


    return parsed_result


def combination_hex_int_oct_ip(ip):
    """

    :param ip:
    :return:
    """

    result = set()
    parsed_result = set()
    ip_split = str(ip).split('.')
    hex_3 = list(itertools.combinations([0, 1, 2, 3], 3))

    for n1, n2, n3 in hex_3:
        _tmp_ip = ip_split[:]
        _tmp_2 = oct(int(_tmp_ip[n2]))
        _tmp_3 = hex(int(_tmp_ip[n3]))
        del _tmp_ip[n2]
        del _tmp_ip[n3 - 1]

        _tmp_ip.insert(n2, _tmp_2)
        _tmp_ip.insert(n3, _tmp_3)

        result.add(tuple(_tmp_ip))

    for _ in result:
        parsed_result.add('.'.join(_))

    return parsed_result

if __name__ == '__main__':
    ip = '10.1.100.1'
    ip_int = struct.unpack('!L', socket.inet_aton(ip))[0]
    ip_oct_no_comma = oct(ip_int)
    ip_hex_no_comma = hex(ip_int)

    ip_oct_by_comma = ip_split_by_comma_oct(ip)
    ip_hex_by_comma = ip_split_by_comma_hex(ip)

    all_result = ip_oct_by_comma | ip_hex_by_comma | combination_oct_int_ip(ip) | combination_hex_int_ip(ip) | combination_hex_int_oct_ip(ip)

    print ip

    print ip_int

    print ip_oct_no_comma

    print ip_hex_no_comma

    for _ip in all_result:
        print _ip


