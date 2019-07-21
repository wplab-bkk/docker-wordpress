FROM nginx:latest
COPY   nginx/nginx.conf /etc/nginx/conf.d/default.conf
VOLUME /var/log/nginx/log/
EXPOSE 80