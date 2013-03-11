#!/bin/bash
# Method to clear the csv file
# 1, \t\t\t... remove too much \t
# 2, 86-0755-123456... remove 86
# 3, 86-755-123456... add 0 before 755
# @Author Jimmy Zhao
# @Cretion time: 2013-01-21
if [ ! $1 ]; then
	echo 'Nothing to process!';
	exit;
fi
if [ ! -f $1 ]; then
	echo $1 'not exists!';
	exit;
fi
cat $1 | while read line;
do
	echo $line;
done
