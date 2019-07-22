# Docker Wordpress

## Features

- Wordpress! 5.2.2
- Mysql 8
- Adminer:lest

## Quick start

### Clone following repo:

`git clone https://github.com/wplab-bkk/docker-wordpress.git [PROJECT_NAME]`

## Run Docker Compose

### build & run images 

```sh
$ docker-compose -f docker-compose.yml build --force-rm
$ docker-compose -f docker-compose.yml up
```

or `./start.sh`

### remove all image

or `./clean-local.sh`
