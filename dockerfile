# Use PHP 8.4 CLI with Apache
FROM php:8.4-apache

WORKDIR /var/www/html

# System dependencies
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libonig-dev curl libicu-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring zip intl bcmath

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy the full Laravel app
COPY . .

# Install dependencies
RUN composer install --optimize-autoloader --no-scripts --no-interaction

# Storage symlink
RUN php artisan storage:link || true

# Permissions
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80
CMD ["apache2-foreground"]