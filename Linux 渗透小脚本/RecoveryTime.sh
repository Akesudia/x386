#!/usr/bin/env bash
# 清除入侵痕迹之清除文件访问和修改时间
# 注意文件状态改变时间擦除不了

fileName="1.htm"

if [ -z $1 ]
then
 echo "Usage    : $0 <options>"
 echo "Options  :"
 echo "save        - save fille stat"
 echo "recover     - recover file stat"
 echo
 exit
fi

case $1 in
	"save")
		accessTime=`stat $fileName |grep -i Access | grep -v '(' | awk -FAccess: '{print $2}'`

                modifyTime=`stat $fileName |grep -i Modify | grep -v '(' | awk -FModify: '{print $2}'`

                changeTime=`stat $fileName |grep -i Change | grep -v '(' | awk -FChange: '{print $2}'`
		
		echo $accessTime > temp.txt
		
		echo $modifyTime >> temp.txt
		
		echo $changeTime >> temp.txt
		;;

       "recover")

	       touch -a  -d  "`sed -n '1p' temp.txt`"  $fileName
	       
	       touch -m  -d  "`sed -n '2p' temp.txt`"  $fileName
	       
	       
	       ;;


       *)
              echo "Error! unknown option"
	      ;;
esac

