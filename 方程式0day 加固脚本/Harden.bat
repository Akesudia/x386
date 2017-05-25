
@echo off
rem 关闭智能卡服务        
net stop SCardSvr        
net stop SCPolicySvc        
sc config SCardSvr start= disabled        
sc config SCPolicySvc start= disabled    

rem 关闭内网共享服务
net stop server

rem 禁用内网共享服务
sc config LanmanServer start= disabled
    
rem 内部共享开启密码认证， 即使设置访问权限everyone
reg add "HKEY_LOCAL_MACHINE\SYSTEM\ControlSet001\Control\Lsa" /v "LimitBlankPasswordUse" /t REG_DWORD /d "00000001" /f

reg add "HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Control\Lsa" /v "LimitBlankPasswordUse" /t REG_DWORD /d "00000001" /f

	
rem 开启防火墙服务        
net start MpsSvc        
rem 开机启动防火墙       
sc config MpsSvc start= auto        
rem 启用防火墙        
netsh advfirewall set allprofiles state on     



rem 禁用SMB1
reg add "HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\services\LanmanServer\Parameters" /v "SMB1" /t REG_DWORD /d "00000000" /f

   
rem 屏蔽端口

netsh advfirewall firewall add rule name="deny udp 137" dir=in protocol=udp localport=137 action=block
netsh advfirewall firewall add rule name="deny tcp 137" dir=in protocol=tcp localport=137 action=block 
       
netsh advfirewall firewall add rule name="deny udp 138" dir=in protocol=udp localport=138 action=block        
netsh advfirewall firewall add rule name="deny tcp 138" dir=in protocol=tcp localport=138 action=block   
     
netsh advfirewall firewall add rule name="deny udp 139" dir=in protocol=udp localport=139 action=block
netsh advfirewall firewall add rule name="deny tcp 139" dir=in protocol=tcp localport=139 action=block

netsh advfirewall firewall add rule name="deny udp 445" dir=in protocol=udp localport=445 action=block        
netsh advfirewall firewall add rule name="deny tcp 445" dir=in protocol=tcp localport=445 action=block        

netsh advfirewall firewall add rule name="deny tcp 3389" dir=in protocol=tcp localport=3389 action=block       

pause