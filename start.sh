#!/bin/sh

echo '# build images && run docker-compose'
docker-compose -f docker-compose.yml build --force-rm
docker-compose -f docker-compose.yml up
