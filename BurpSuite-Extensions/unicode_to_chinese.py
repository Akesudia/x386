#!/usr/bin/env python
# -*- coding:utf8 -*-

"""

将unicode编码内容解码为汉字

"""

import re
from burp import IResponseInfo
from burp import IBurpExtender
from burp import IHttpListener
from burp import IHttpRequestResponse
from burp import IExtensionStateListener

print 'ForrestX386.github.io'

class BurpExtender(IBurpExtender, IHttpListener, IExtensionStateListener):
    def registerExtenderCallbacks(self, callbacks):
        """
        :param callbacks: An IBurpExtenderCallbacks object ，burpsuite加载插件后会实例化一个IBurpExtenderCallbacks对象传递至此
        :return:
        """
        self._callbacks = callbacks
        self._helpers = callbacks.getHelpers()  # 获取IExtensionHelpers 对象
        self._callbacks.setExtensionName("unicode_to_chinese")
        callbacks.registerHttpListener(self)
        callbacks.registerExtensionStateListener(self)
        self.pattern_header = re.compile(r'(?:iso-8859-1|gbk.*)')
        self.pattern_body = re.compile(r'(?:\\u[\d\w]{4})+')

    def processHttpMessage(self, toolFlag, messageIsRequest, messageInfo):
        """"
        :param toolFlag:  数值类型，判断是burp 的哪个 Tab，比如是proxy还是repeater，详见补充
        :param messageIsRequest: 布尔类型，判断是Http请求还是响应的
        :param messageInfo: IHttpRequestResponse 的对象，包含了HTTP请求和响应的详细内容，提供的相关set可以修改请求或者响应内容
        :return:
        """
        # IBurpExtenderCallbacks 对象中定义了一些常量，TOOL_PROXY = 4， TOOL_REPEATER = 64，TOOL_INTRUDER = 32
        # 如果 toolFlag = 4 就表示处理repeater 相关的HTTP 请求和响应
        if toolFlag == 64 or toolFlag == 4 or toolFlag == 32:
            have_replaced = set()
            if not messageIsRequest:  # 这里仅仅处理响应报文，因为中文的unicode内容在响应报文中嘛
                response = messageInfo.getResponse()  # 获取响应报文内容
                analyzedResponse = self._helpers.analyzeResponse(response)  # 返回 IResponseInfo对象
                headers = analyzedResponse.getHeaders()  # 获取http 响应报文的头部信息
                new_headers = []
                for header in headers:
                    if header.startswith("Content-Type:"):
                        result = self.pattern_header.search(header)
                        if result:
                            new_headers.append(header.replace(self.pattern_header.search(header).group(), 'utf-8'))
                    else:
                        new_headers.append(header)
                body = response[analyzedResponse.getBodyOffset():]  # 获取body的内容
                body_string = body.tostring()
                u_char_escape = self.pattern_body.finditer(body_string)

                for u in u_char_escape:
                    if u.group() in have_replaced:
                        continue
                    u_char = u.group().decode('unicode_escape').encode('utf8')
                    body_string = body_string.replace(u.group(),  u_char)
                    have_replaced.add(u.group())

                new_body = self._helpers.bytesToString(body_string)
                messageInfo.setResponse(self._helpers.buildHttpMessage(new_headers, new_body))

    def extensionUnloaded(self):
        """

        :return:
        """

        print u"Do not unload me Please"
