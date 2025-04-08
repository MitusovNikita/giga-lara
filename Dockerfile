# Use an official PHP image as the base image
FROM php:8.3-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    unzip \
    git \
    supervisor \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo mbstring pdo_mysql gd xml

# x-debug install
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Устанавливаем зависимость для phpredis
RUN pecl install redis && docker-php-ext-enable redis

# Расширение для mongodb
# RUN docker-php-ext-enable mongodb

# Устанавливаем зависимости для Memcached
RUN apt-get update && apt-get install -y libmemcached-dev && docker-php-ext-install memcached
# Установим PECL пакет для memcached
RUN pecl install memcached && docker-php-ext-enable memcached


# Install dependencies for MongoDB
#RUN apt-get update && apt-get install -y libcurl4-openssl-dev pkg-config libssl-dev
#
## Install PHP extensions
#RUN docker-php-ext-install curl
#
## Install the MongoDB driver
#RUN pecl install mongodb \
#    && docker-php-ext-enable mongodb

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory to /var/www
WORKDIR /var/www

# Copy the current directory contents into the container
COPY /app /var/www

# Install Laravel dependencies
RUN composer install --optimize-autoloader --no-dev

# Expose port 9000 and start PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]