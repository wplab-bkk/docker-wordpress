FROM alpine:latest

ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_CONTAINER_NAME=mysql

COPY ./scripts/15min/* /etc/periodic/15min
COPY ./scripts/daily/* /etc/periodic/daily

RUN apk update && \
    apk upgrade && \
    apk add --no-cache mariadb-client && \
    chmod a+x /etc/periodic/*
