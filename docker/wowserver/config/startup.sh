#!/bin/bash

# Execute the following command from your host
# docker-compose run trinitycore ./startup.sh

BIN_DIR=/usr/local/bin/

# sed -i "s/##REPLACE##/##CHANGE##/g" /home/wow/server/etc/*.conf;

rm $BIN_DIR/world.input;
touch $BIN_DIR/world.input;
$BIN_DIR/worldserver < $BIN_DIR/world.input &
while ! nc -q 1 localhost 8085 </dev/null; do sleep 1; done
# $BIN_DIR/authserver &
$BIN_DIR/bnetserver &
bash;