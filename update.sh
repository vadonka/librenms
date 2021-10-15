#!/bin/bash

docker-compose --compatibility pull
docker-compose --compatibility up -d --always-recreate-deps

