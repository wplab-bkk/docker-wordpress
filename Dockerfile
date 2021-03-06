FROM nginx:latest
COPY   nginx/nginx.conf /etc/nginx/conf.d/default.conf

ENV TZ Asia/Bangkok

VOLUME /var/log/nginx/log/
EXPOSE 80
