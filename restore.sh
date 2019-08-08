#!/bin/bash
echo -e "Bash version ${BASH_VERSION}... \n" # flag -e to set newline

# Load up .env
set -o allexport
[[ -f .env ]] && source .env
set +o allexport

BACKUP_PATH=$FILE_RESTORE_PATH
FILTER_FILE_SQL_ONLY="$BACKUP_PATH/*.sql" #used only .sql files
FILE_RESTORE=$FILE_RESTORE
NOW=$(date "+%Y-%m-%d-%H:%M:%S")


# Fixed parameter
#BACKUP_PATH="mysql_job_backup/backup/15min"
#FILTER_FILE_SQL_ONLY="$BACKUP_PATH/*.sql" #used only .sql files
#FILE_RESTORE="backup-15min-wpdb-2019-08-04-18:15:00.sql"
#NOW=$(date "+%Y-%m-%d-%H:%M:%S")



for f in $FILTER_FILE_SQL_ONLY
do
    if [ "$f" == "$BACKUP_PATH/$FILE_RESTORE" ]  # compare string used ""
    then 
        echo -e "file restore corrected $f \n"

        # start restored
        echo -e 'Start restored Database in 5 sec! \n'

        # sleep
        sleep 5 # sec

        # exec to restored
        cat mysql_job_backup/backup/15min/backup-15min-wpdb-2019-08-04-18:15:00.sql | docker exec -i mysql /usr/bin/mysql -u $MYSQL_USER --password=$MYSQL_PASSWORD $MYSQL_DATABASE
        echo "Restored Database '"$MYSQL_DATABASE"'  successfuly in $NOW"
    else
        echo "file to restore not match $f != $FILE_RESTORE"
    fi
done
