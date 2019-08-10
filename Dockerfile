FROM nginx:latest
#COPY   nginx/vhost.d/wordpress.thinnycode.conf /etc/nginx/conf.d


ENV TZ Asia/Bangkok

VOLUME /var/log/nginx/log/
EXPOSE 80
