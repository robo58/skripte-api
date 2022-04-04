#!/bin/sh

cd /var/www || exit

php artisan migrate:fresh --seed
php artisan cache:clear
php artisan route:cache
