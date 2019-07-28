FROM nginx:latest
COPY   nginx/nginx.conf /etc/nginx/conf.d/default.conf

ENV TZ Asia/Bangkok
RUN cp /usr/share/zoneinfo/Asia/Bangkok /etc/localtime \
    && echo "Asia/Bangkok" >  /etc/timezone 

VOLUME /var/log/nginx/log/
EXPOSE 80