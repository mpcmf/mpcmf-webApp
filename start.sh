#!/bin/bash

while [ 1 == 1 ]; do
	echo "[start.sh] Checking..."
	if [ `ps ax | grep "$*" | grep -v grep | wc -l` -ne 1 ]; then
		echo "[start.sh] Starting app"
		$*
	fi
done
