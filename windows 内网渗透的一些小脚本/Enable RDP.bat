
rem 将用户加入远程桌面组

net localgroup Administrators USER /add
net localgroup "Remote Desktop Users" USER /add


netsh advfirewall firewall add rule name="allowRemoteDesktop" protocol=TCP dir=in localport=3389 action=allow

netsh advfirewall firewall set rule group="Remote Desktop" new enable=yes


rem 开启相关服务
sc config rasman start= auto
sc config remoteaccess start= auto
net start rasman
net start remoteaccess




rem 关闭IPsec 策略代理
net stop policyagent 

rem 关闭ICS
net stop sharedaccess


rem 查看RDP 端口

reg query "HKLM\SYSTEM\CurrentControlSet\Control\Terminal Server\WinStations\RDP-Tcp" /v PortNumber


rem 取消TCP/IP筛选过滤

regedit add "HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Services\Tcpip" /v EnableSecurityFilters /t REG_DWORD /d 00000000 /f
 
regedit add "HKEY_LOCAL_MACHINE\SYSTEM\ControlSet002\Services\Tcpip" /v EnableSecurityFilters /t REG_DWORD /d 00000000 /f
 
regedit add "HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Services\Tcpip" /v EnableSecurityFilters /t REG_DWORD /d 00000000 /f
 

rem 修改远程端口为8080
reg add "HKLM\SYSTEM\CurrentControlSet\Control\Terminal Server\Wds\rdpwd\Tds\tcp" /v PortNumber /t REG_DWORD /d 0x1F90 /f

reg add  "HKLM\SYSTEM\CurrentControlSet\Control\Terminal Server\WinStations\RDP-Tcp" /v PortNumber /t REG_DWORD /d 0x1F90 /f
 
 
rem 开启 rdp
reg add "HKLM\SYSTEM\CurrentControlSet\Control\Terminal Server" /v fDenyTSConnections /t REG_DWORD /d 00000000 /f
reg add "HKLM\SYSTEM\CurrentControlSet\Control\Terminal Server" /v AllowTSConnections /t reg_dword /d 00000001 /f 


rem 取消xp&2003系统防火墙对终端服务的限制及IP连接的限制
reg add "HKLM\SYSTEM\CurrentControlSet\Services\SharedAccess\Parameters\FirewallPolicy\StandardProfile\GloballyOpenPorts\List" /v 3389:TCP /t REG_SZ /d 3389:TCP:*:Enabled :@  xpsp2res.dll,-22009 /f
