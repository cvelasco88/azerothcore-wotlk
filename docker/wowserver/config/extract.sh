#!/bin/bash

# Execute the following command from your host
# docker-compose run trinitycore ./extract.sh

BIN_DIR=/usr/local/bin/
DATA_DIR=/wowdata
GAME_DIR=/wowclient

rm -rf $DATA_DIR/Cameras/*:
rm -rf $DATA_DIR/dbc/*:
rm -rf $DATA_DIR/maps/*:
rm -rf $DATA_DIR/mmaps/*:
rm -rf $DATA_DIR/vmaps/*:

cp $BIN_DIR/mapextractor $GAME_DIR;
cp $BIN_DIR/vmap4extractor $GAME_DIR;
cp $BIN_DIR/vmap4assembler $GAME_DIR;

cd $GAME_DIR;
./mapextractor;
./vmap4extractor;
mkdir vmaps;
./vmap4assembler Buildings vmaps;
rm -rf Buildings;
cp -r Cameras/* $DATA_DIR/Cameras/;
cp -r dbc/* $DATA_DIR/dbc/;
cp -r maps/* $DATA_DIR/maps/;
cp -r vmaps/* $DATA_DIR/vmaps/;

# Remove files from wowclient folder
# rm -rf dbc;
# rm -rf maps;
# rm -rf vmaps;

rm mapextractor;
rm vmap4extractor;
rm vmap4assembler;

cd $BIN_DIR;
./mmaps_generator;

cd $DATA_DIR;
cp $BIN_DIR/mmaps_generator $DATA_DIR;
./mmaps_generator;
rm ./mmaps_generator;
