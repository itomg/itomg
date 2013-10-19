#!/usr/bin/python
##
# A stand sit notification script
##

import sys
import time
import pynotify

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

def run(inc = 900):
	while True:
		if inc == 900:
			stand()
			inc = 600
		else:
			sit()
			inc = 900
		time.sleep(inc)

if __name__ == '__main__':
	if not pynotify.init('icon-summary-body'):
		sys.exit(1)

	run()