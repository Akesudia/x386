#!/bin/bash
for ip in `cat iplist.txt` #一个ip一行
do
ping -c 1 $ip &>/dev/null
if [ "$?" = 0 ];then
echo $ip >>up.txt
fi
done