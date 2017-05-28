@echo off

rem windows2003 开启3389
rem 前提是Windows Management Instrumentation（Winmgmt）服务已正常启动

wmic path win32_terminalservicesetting where (__CLASS != "") call setallowtsconnections 1