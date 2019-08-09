#!/bin/sh

docker-compose down --remove-orphans --rmi 'all'
sleep 5

echo '# Delete Folders'
rm -rf mysql logs certs

echo '# docker-compose down'
docker-compose -f docker-compose.yml down

echo '# remove images'
docker image prune -f
docker rmi -f $(docker images -q) || docker rmi -f $(docker images -q)
