#!/usr/bin/env bash

find / \( -perm -4000 -o -perm -2000 -o perm -6000 \) -type f -exec ls -la {} \;


find -mtime -1 /

find -ctime -1 /

fin / -links +1
