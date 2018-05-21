FROM php:7-fpm

RUN apt-get update \
	&& apt-get install -y libpng12-dev zlib1g-dev curl libcurl4-gnutls-dev \
	&& docker-php-ext-install gd \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install pdo_mysql \
    && pecl install redis && echo "extension=redis.so" > /usr/local/etc/php/conf.d/redis.ini \
    && pecl install xdebug \ 
    && pecl install yar && echo "extension=yar.so" > /usr/local/etc/php/conf.d/yar.ini
    

