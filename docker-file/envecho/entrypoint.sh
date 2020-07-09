#!/bin/sh

if [[ -z "${NAME1}" ]]; then
  echo "Not Define NAME1 environment variable"
  exit 1
else
  NAME1=${NAME1}
fi

if [[ -z "${NAME2}" ]]; then
  echo "Not Define NAME2 environment variable"
  exit 1
else
  NAME2=${NAME2}
fi

echo "$NAME1 say Hello World to $NAME2"