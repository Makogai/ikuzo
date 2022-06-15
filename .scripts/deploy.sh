#!/bin/bash
set -e

echo "Deployment started ..."

# Enter maintenance mode or return true
# if already is in maintenance mode
(php artisan down) || true

# Pull the latest version of the app
sudo git config --global --add safe.directory /var/www/websites/ikuzounscripted.me

sudo git pull origin master

# Install composer dependencies
sudo composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Clear the old cache
sudo php artisan clear-compiled

# Recreate cache
sudo php artisan optimize

# Use node v 17
# nvm use 17

node -v

sudo npm install

# Compile npm assets
sudo npm run prod

# Run database migrations
sudo php artisan migrate --force

# Exit maintenance mode
sudo php artisan up

echo "Deployment finished!"
