#!/usr/bin/env python
# -*- coding:utf8 -*-


import re
import sys
import codecs
import argparse


def parse_oui(oui_path):
    """
    """
    oui_dict = dict()
    with codecs.open(oui_path, 'r', encoding='utf8') as fd:
        for line in fd:
            if '(hex)' in line:
                _line = line.split('(hex)')
                flag = _line[0].strip()
                manufacturers = _line[1].strip()
                oui_dict[flag] = manufacturers

    return oui_dict


def parse_arp_tab(arp_tab_path, oui_path):
    """
    """

    parse_result = []

    oui_dict = parse_oui(oui_path)
    mac_pattern = re.compile(
        '([0-9a-fA-F]{1,2}[-]){5}([0-9a-fA-F]{1,2})|([0-9a-fA-F]{1,2}[:]){5}([0-9a-fA-F]{1,2})|([0-9a-fA-F]{1,2}[.]){5}([0-9a-fA-F]{1,2})',
        re.VERBOSE | re.IGNORECASE)

    result_lines = []

    with codecs.open(arp_tab_path, 'r', encoding='utf8') as fd:
        for line in fd:
            _line = None
            if u'类型' in line:
                _line = line.strip() + '\t\t' + u'厂商'
            elif 'Type' in line or 'Iface' in line:
                _line = line.strip() + '\t\t' + 'manufacturers'
            else:
                try:
                    if u'态' in line or 'dynamic' in line or 'static' in line or 'ether' in line:
                        # _line = line.strip() + '\t\t' + oui_dict[mac_pattern.search(line).group().rsplit('-', 3)[0].upper()]
                        manu = re.split('[-:.]', mac_pattern.search(line).group(), 3)
                        manu_flag = manu[0] + '-' + manu[1] + '-' + manu[2]
                        _line = line.strip() + '\t\t' + oui_dict[manu_flag.upper()]
                except KeyError:
                    _line = line.strip() + '\t\t' + u'unknown'
                except:
                    # print line.strip()
                    pass
            if _line:
                result_lines.append(_line + '\n')
            else:
                # print line
                pass


    with codecs.open('result.txt', 'w', encoding='utf8') as fd:
        fd.writelines(result_lines)


if __name__ == '__main__':
    reload(sys)

    sys.setdefaultencoding('utf8')

    parse = argparse.ArgumentParser()
    parse.add_argument('--oui-file', dest='oui', type=str, default='./oui.txt', help='oui file path')
    parse.add_argument('--arp-tab-file', dest='arp', type=str, required=True, help='arp tab file path')

    argument = parse.parse_args()

    parse_arp_tab(argument.arp, argument.oui)
