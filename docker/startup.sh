#!/bin/sh

echo executing sed
sed -i "s,LISTEN_PORT,$PORT,g" /etc/nginx/nginx.conf

echo executing php-fpm
php-fpm -D

echo executing nginx
nginx
