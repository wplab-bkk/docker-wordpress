FROM alpine:latest

ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_CONTAINER_NAME=mysql
ENV TZ Asia/Bangkok

COPY ./scripts/15min/* /etc/periodic/15min
COPY ./scripts/hourly/* /etc/periodic/hourly
COPY ./scripts/daily/* /etc/periodic/daily
COPY ./scripts/weekly/* /etc/periodic/weekly
COPY ./scripts/monthly/* /etc/periodic/monthly


RUN apk update && \
    apk upgrade && \
    apk add tzdata && \
    apk add --no-cache mariadb-client && \
    chmod a+x /etc/periodic/*
