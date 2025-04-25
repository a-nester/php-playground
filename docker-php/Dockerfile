FROM php:8.2-apache

RUN docker-php-ext-install mysqli

# Встановлюємо xdebug
RUN pecl install xdebug \
  && docker-php-ext-enable xdebug