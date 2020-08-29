FROM debian:buster

RUN apt-get update && apt-get install -y nginx expect unzip
RUN mkdir /etc/nginx/ssl/
COPY ./srcs/nginx.crt ./srcs/nginx.key /etc/nginx/ssl/

RUN apt-get install -y mariadb-server mariadb-client

RUN apt-get install -y php-fpm php-mysql php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip php-json
COPY ./srcs/wp_phpmyadmin_nginx.conf /etc/nginx/sites-enabled/
RUN chmod 755 /etc/nginx/sites-enabled/wp_phpmyadmin_nginx.conf
RUN unlink /etc/nginx/sites-enabled/default

#wordpress
ADD https://wordpress.org/latest.tar.gz /var/www/
RUN tar -C /var/www/ -xzvf /var/www/latest.tar.gz
RUN rm -rf /var/www/latest.tar.gz
COPY ./srcs/wp-config-sample.php /var/www/wordpress/wp-config.php

#phpmyadmin
ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.zip /var/www/phpmyadmin/
RUN unzip /var/www/phpmyadmin/phpMyAdmin-5.0.2-all-languages.zip -d /var/www/phpmyadmin/
RUN mv /var/www/phpmyadmin/phpMyAdmin-5.0.2-all-languages/* /var/www/phpmyadmin/ && rm -rf /var/www/phpmyadmin/phpMyAdmin-5.0.2-all-languages.zip /var/www/phpmyadmin/phpMyAdmin-5.0.2-all-languages/
COPY ./srcs/config.inc.php /var/www/phpmyadmin/config.inc.php

RUN mkdir /files/
COPY ./srcs/mysql.sh ./srcs/server.sh ./srcs/mysqldatabase.sql ./srcs/enable.sh ./srcs/disable.sh ./srcs/check.sh /files/
RUN chmod 755 /files/server.sh && chmod 755 /files/mysql.sh && chmod 755 /files/mysqldatabase.sql && chmod 755 /files/enable.sh && chmod 755 /files/disable.sh && chmod 755 /files/check.sh

RUN apt-get update

CMD /files/server.sh

EXPOSE 80 443
