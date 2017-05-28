
rem 首先需要安装好java、python、androidStudio


::将python加入PATH中
@echo off
echo python加入PATH中
wmic ENVIRONMENT where "name='path' and username='<system>'" set VariableValue="%path%;C:\Python27;C:\Python27\Scripts"



rem 添加环境变量JAVA_HOME
echo 添加环境变量JAVA_HOME
set regpath=HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Control\Session Manager\Environment
set evname=JAVA_HOME
set javapath=C:\Program Files\Java\jdk1.8.0_121
reg add "%regpath%" /v %evname% /t reg_sz /d "%javapath%" /f

echo java加入PATH中
wmic ENVIRONMENT where "name='path' and username='<system>'" set VariableValue="%path%;%JAVA_HOME%\bin;%JAVA_HOME\jre\bin%"

rem 添加环境变量CLASS_PATH
set evname=CLASS_PATH
set value=".;%JAVA_HOME%\lib\tools.jar;%JAVA_HOME%\lib\dt.jar; "
reg add "%regpath%" /v %evname% /t reg_expand_sz /d %value% /f



rem 添加环境变量ANDROID_SDK_HOME

set regpath=HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Control\Session Manager\Environment
set evname=ANDROID_SDK_HOME
set value=D:\sdk
reg add "%regpath%" /v %evname% /t reg_sz /d "%value%" /f

echo ANDROID_SDK_HOME可执行文件加入PATH中
wmic ENVIRONMENT where "name='path' and username='<system>'" set VariableValue="%path%;%ANDROID_SDK_HOME%\tools;%ANDROID_SDK_HOME\platform-tools;%"



rem 自动安装缺失py module
echo 自动安装缺失py module
pip install -U pip
pip install ujson
pip install requests
pip install bs4
pip install django
pip install jinja
pip install flask
pip install xlwt
pip install lxml 
pip install ipaddress
pip install ipaddr
pip install prettytable
pip install setuptools
pip install wheel
pip install netiaces
pip install pyreadline
pip install sh
pip install selenium
pip install urllib3
pip install ipdb
pip install scrapy
pip install redis
pip install paramiko
pip install pymongo
pip install virtualenv
pip install gevent
pip install sphinx
pip install pymongo
pip install colorama
pip install termcolor
pip install netaddr
pip install pydns
pip install libnamp 
pip install impacket
pip install colorlog
pip install pypcap
pip install PySocks
pip install tornado
pip install redis
pause