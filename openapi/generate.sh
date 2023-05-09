#!/bin/bash
DEST_DIR="../lib/RtgConnectBundle";
SPEC_FILE="openapi.json"
CONFIG_FILE="config.json"

rm -rf $DEST_DIR;
openapi-generator-cli generate -g php -i $SPEC_FILE -o $DEST_DIR -c $CONFIG_FILE

