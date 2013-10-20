#!/usr/bin/python
##
# A stand sit notification script
##

import sys
import time
import pynotify

stand_time = 900
sit_time = 600

def notify(title, msg):
	n = pynotify.Notification(
		title,
		msg,
		'notification-message-im')
	n.show()

def stand():
	title = 'Stand Up Time'
	msg = "It's time to stand up work now, don't sit too long for your health!!!"
	notify(title, msg)

def sit():
	title = 'Sit Down Time'
	msg = "It's time to sit down work now, don't stand too long for your health!!!"
	notify(title, msg)

def run(inc = sit_time):
	while True:
		if inc == sit_time:
			stand()
			inc = stand_time
		else:
			sit()
			inc = sit_time
		print time.strftime("%Y-%m-%d %H:%M:%S", time.localtime())
		time.sleep(inc)

if __name__ == '__main__':
	if not pynotify.init('icon-summary-body'):
		sys.exit(1)

	run()