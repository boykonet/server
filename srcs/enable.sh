find /etc/nginx/sites-enabled/ -type f -name \*.conf -exec sed -i -r 's/autoindex off/autoindex on/g' {} \;
/etc/init.d/nginx restart
