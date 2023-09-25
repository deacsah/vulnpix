FROM php:7-apache

# Install php extension
RUN docker-php-ext-install mysqli

# Copy app
COPY ./public_html /var/www/html
COPY ./code /var/www/code

RUN chown -R www-data:www-data /var/www/