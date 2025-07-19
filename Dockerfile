FROM php:8.2-apache

RUN apt-get update && apt-get install -y libonig-dev libzip-dev unzip \
    && docker-php-ext-install mysqli pdo pdo_mysql
