#!/bin/bash
DEST_DIR="../lib/RtgConnectBundle";
SPEC_FILE="openapi.json"
CONFIG_FILE="config.json"
SPEC_ONLINE="https://rtg-portal.picard.de/api/shop/v2/openapi.json"
DATE=$(date +%F_%X);

curl $SPEC_ONLINE -o openapi.$DATE.json;
rm openapi.json
ln -s openapi.$DATE.json openapi.json

rm -rf $DEST_DIR;
openapi-generator-cli generate -g php -i $SPEC_FILE -o $DEST_DIR -c $CONFIG_FILE

