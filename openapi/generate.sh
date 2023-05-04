#!/bin/bash
openapi-generator-cli generate -g php -i openapi.json -o ../lib -c config.json

