#!/bin/bash
composer install --no-interaction --no-progress --no-suggest --optimize-autoloader --no-dev
php artisan migrate --force
php artisan db:seed
php artisan key:generate
php artisan serve --host=0.0.0.0 --port=8000