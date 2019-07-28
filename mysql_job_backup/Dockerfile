FROM alpine:latest

ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_CONTAINER_NAME=mysql



COPY ./scripts/* /etc/periodic


RUN apk update && \
    apk upgrade && \
    apk add --no-cache mariadb-client && \
    chmod a+x /etc/periodic/*
