#!/bin/bash

# Ожидание запуска mysql
sleep 10

# Копирование env
if [ ! -f .env ]; then
    cp /var/www/.env.example /var/www/.env
    echo ".env file created from .env.example"
fi

composer install --no-interaction --prefer-dist

# npm зависимости и билд
npm install
npm run build

# Миграции
php artisan key:generate
php artisan migrate --seed
php artisan session:table
php artisan migrate

php-fpm &
nginx -g "daemon off;"