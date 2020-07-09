#!/bin/sh
if [[ -z "${ECHO_NAME}" ]]; then
  MY_SCRIPT_VARIABLE=$@
else
  MY_SCRIPT_VARIABLE=${ECHO_NAME}
fi

while true; do sleep 2; echo $MY_SCRIPT_VARIABLE; done