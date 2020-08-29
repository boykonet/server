#!/bin/bash

if [[ "$AUTOINDEX" == "on" ]]; then
	bash /files/enable.sh
	echo "enable"
fi

if [[ "$AUTOINDEX" == "off" ]]; then
	bash /files/disable.sh
	echo "disable"
fi
