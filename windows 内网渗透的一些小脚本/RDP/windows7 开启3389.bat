@echo off

rem windows7 开启3389.bat
rem 前提是Windows Management Instrumentation（Winmgmt）服务已正常启动

wmic /namespace:\\root\cimv2\terminalservices path win32_terminalservicesetting where (__CLASS != "") call setallowtsconnections 1

wmic /namespace:\\root\cimv2\terminalservices path win32_tsgeneralsetting where (TerminalName ='RDP-Tcp') call setuserauthenticationrequired 1