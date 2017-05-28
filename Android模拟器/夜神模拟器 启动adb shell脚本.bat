@echo off
adb connect 127.0.0.1:62001
adb forward tcp:31415 tcp:31415
adb shell