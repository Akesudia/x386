#!/bin/bash
for ip in $(seq 1 254)
do
ping -c 1 192.168.3.$ip &>/dev/null
if [ $? -eq 0 ];then
echo 192.168.3.$ip >>up.txt
fi
done