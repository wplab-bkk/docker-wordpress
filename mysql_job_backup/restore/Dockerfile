FROM mariadb:10.2.16
COPY restore.sh /
RUN chmod +x /restore.sh
CMD [ "sh", "/restore.sh" ]
#ENTRYPOINT ["/restore.sh"]