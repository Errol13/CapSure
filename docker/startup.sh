#!/bin/sh

# Start the Cloud SQL Proxy
/usr/local/bin/cloud_sql_proxy -instances=team-tem:asia-southeast1:capsuredb=tcp:3306 &

# Wait for the Cloud SQL Proxy to start
sleep 5

echo executing sed
sed -i "s,LISTEN_PORT,$PORT,g" /etc/nginx/nginx.conf

echo executing php-fpm
php-fpm -D

echo executing nginx
nginx
