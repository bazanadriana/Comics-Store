FROM wordpress:6-php8.2-apache

# Install + enable Xdebug
RUN pecl install xdebug \
 && docker-php-ext-enable xdebug

# Xdebug config
COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
