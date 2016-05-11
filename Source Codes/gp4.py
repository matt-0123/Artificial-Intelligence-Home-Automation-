import os
import subprocess

p = subprocess.Popen('cat /sys/class/gpio/gpio51/value', shell=True, stdout=subprocess.PIPE, stderr=subprocess.STDOUT)

if (p.stdout.readline(1) == '0'): 
	os.system("echo 1 > /sys/class/gpio/gpio51/value")
else:
	os.system("echo 0 > /sys/class/gpio/gpio51/value")

 
