#!/usr/bin/env bash


#将此脚本移动到/root/目录
#然后将jdk的压缩文件、drozer的linux 安装文件， 博客内容文件拷贝到此脚本所在目录


###################################auto config network
echo "auto eth0" > /etc/network/interfaces
echo "iface eth0 inet static" >> /etc/network/interfaces
echo "address 10.1.100.3"     >> /etc/network/interfaces
echo "netmask 255.255.255.0"  >> /etc/network/interfaces
echo "gateway 10.1.100.1"     >> /etc/network/interfaces


###################################auto apt source and update softwares

cd /etc/apt/sources.list.d

rm -rf *

file_name=$(date +%Y%m%d)
touch "add${file_name}.list"

echo 'deb http://http.kali.org/kali kali-rolling main contrib non-free' >> add${file_name}.list
echo 'deb http://mirrors.neusoft.edu.cn/kali kali-rolling main contrib non-free' >> add${file_name}.list

apt-get update 

apt-get -y install gcc libssl-dev libffi-dev python-dev libpcap-dev
apt-get -y install essential
apt-get -y install python-pip
apt-get -y install dos2unix 
apt-get -y install vim
apt-get -y install nginx
apt-get -y install apache2
apt-get -y install mysql-server
apt-get -y install mysql-client
apt-get -y install php
apt-get -y install openssh-server
apt-get -y install git
apt-get -y install redis-server
apt-get -y install shutter 
apt-get -y install maven
apt-get -y install ruby
apt-get -y install ruby-dev
apt-get -y install redis-server 


###################################auto config ssh server 

echo "PermitRootLogin yes" > /etc/sshd/sshd_config

###################################auto install pip module

#wget https://sec.ly.com/mirror/get-pip.py --no-check-certificate
#python get-pip.py
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
pip  install pymongo
pip install colorama
pip install termcolor
pip install netaddr
pip install pydns
pip install libnamp 
pip install impacket
pip install colorlog
pip install pypcap
pip install PySocks



###################################auto config nodejs
echo 'auto config node.....'

wget https://nodejs.org/dist/v6.10.3/node-v6.10.3.tar.gz

tar zxvf node*.tar.gz
rm -rf  node*.tar.gz
cd  node-*
./configure
make
make install 
cd ../
rm -rf node-*
mv /root/blog ~ 
cd ~
npm install -g hexo
cd blog
npm install hexo-deployer-git --save

###################################do not use risk command

echo "alias rm='rm -i'" >>~/.bashrc


######################################## auto install drozer 
echo 'auto install drozer ......'

cd drozer
python setup.py install 
python setup.py install
cd ../
rm -rf drozer

########################################auto config jdk

tar zxvf jdk*.tar.gz
rm -rf jdk*.tar.gz
mv jdk1.8* /usr/local/jdk1.8
cd /usr/local/jdk1.8/bin
chmod +x *
cd ../jre/bin
chmod +x *

echo 'export JAVA_HOME=/usr/local/jdk1.8' >> ~/.bashrc
echo 'export CLASS_PATH=.:$JAVA_HOME/lib/tools.jar:$JAVA_HOME/lib/dt.jar' >> ~/.bashrc
echo 'export PATH=$JAVA_HOME/bin:$JAVA_HOME/jre/bin:$PATH' >>~/.bashrc




