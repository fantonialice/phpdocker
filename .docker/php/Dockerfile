FROM php:8.1-fpm

# Install xdebug
RUN pecl install xdebug-3.1.5 \
    && docker-php-ext-enable xdebug

WORKDIR /exerciciosphp

