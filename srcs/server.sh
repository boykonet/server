#!/bin/bash

export USER="www-data"

/etc/init.d/nginx start
chown -R $USER:$USER /var/www/wordpress/ && chown -R $USER:$USER /var/www/phpmyadmin/
/etc/init.d/mysql stop && /etc/init.d/mysql start
/etc/init.d/php7.3-fpm start
bash /files/mysql.sh
mariadb --user="root" --password="gkarina42" < /files/mysqldatabase.sql
/etc/init.d/nginx restart
bash /files/check.sh
tail -f /dev/null
