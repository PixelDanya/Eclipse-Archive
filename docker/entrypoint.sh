#!/bin/bash

# Ожидание запуска mysql
sleep 10

# Копирование env
if [ ! -f .env ]; then
    cp /var/www/.env.example /var/www/.env
    php artisan key:generate
    echo ".env file created from .env.example"
fi

composer install --no-interaction --prefer-dist --optimize-autoloader

# npm зависимости и билд
npm install
npm run build

# Миграции
php artisan migrate --seed

php-fpm &
nginx -g "daemon off;"