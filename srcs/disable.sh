find /etc/nginx/sites-enabled/ -type f -name \*.conf -exec sed -i -r 's/autoindex on/autoindex off/g' {} \;
/etc/init.d/nginx restart
