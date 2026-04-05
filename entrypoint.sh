#!/bin/bash
set -e

# Copy .env if not exists
if [ ! -f /var/www/.env ]; then
    echo "Creating .env from .env.example..."
    cp /var/www/.env.example /var/www/.env
fi

# Generate app key only if not set
if ! grep -q "^APP_KEY=base64:" /var/www/.env; then
    echo "Generating application key..."
    php artisan key:generate --force
fi

# Run migrations (optional: remove if you prefer manual)
php artisan migrate --force

php artisan db:seed --force

exec "$@"
