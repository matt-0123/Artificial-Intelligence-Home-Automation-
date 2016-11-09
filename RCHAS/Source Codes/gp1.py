import os
import subprocess

#Read gpio values
p = subprocess.Popen('cat /sys/class/gpio/gpio60/value', shell=True, stdout=subprocess.PIPE, stderr=subprocess.STDOUT)

#Check gpio status
if (p.stdout.readline(1) == '0'): 
	os.system("echo 1 > /sys/class/gpio/gpio60/value")
else:
	os.system("echo 0 > /sys/class/gpio/gpio60/value")

