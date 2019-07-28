FROM alpine:latest

ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_CONTAINER_NAME=mysql
ENV TZ Asia/Bangkok



COPY ./scripts/* /etc/periodic

RUN apk update && \
    apk upgrade && \
    apk add tzdata && \
    apk add --no-cache mariadb-client && \
    chmod a+x /etc/periodic/*
