#!/bin/bash
function sport ()
{
for ip in $(cat ips.txt) #一行一个ip
do
for port in `cat ports.txt` #一行一个端口
do
t=`echo -e ‘\n’|telnet $ip $port|grep -i “Connected”|awk ‘NR==1{print}’|awk -F ” ” ‘{print $1}’`
if [ "$t"x ="Connected"x ];then
echo $ip $port >>open.txt
fi
done
done
}