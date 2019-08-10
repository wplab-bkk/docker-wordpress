#!/bin/bash
echo "sleeping"
sleep 20000

echo 'Start restored Database!'
mysql -h mysql -u root --password=password wpdb < /opt/mysql/backup/15min/backup-15min-wpdb-2019-07-29-16:15:00.sql.gz
echo 'Restored Database successfuly!'