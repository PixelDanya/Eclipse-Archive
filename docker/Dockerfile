FROM php:8.3-fpm

# Установим зависимости
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    npm \
    nodejs \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Установка nginx
RUN apt-get install -y nginx

COPY ./default.conf /etc/nginx/sites-available/default

WORKDIR /var/www

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]