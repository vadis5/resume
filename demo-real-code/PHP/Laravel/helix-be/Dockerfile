FROM php:7.4-apache

RUN a2enmod rewrite

#Todo: move to Base image for faster build
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
        libonig-dev \
        graphviz \
    && docker-php-ext-configure gd --with-jpeg\
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install zip \
    && docker-php-source delete

ADD . .

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --ignore-platform-reqs --no-scripts

RUN cp .env.example .env

# Generate JWT Secret
RUN php artisan jwt:secret

# Generate API docs
RUN php artisan scribe:generate

#Generate symbolic link
RUN php artisan storage:link

RUN chown -R www-data:www-data storage/ bootstrap/
