# Use an official PHP image as the base image
FROM php:8.2-fpm

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