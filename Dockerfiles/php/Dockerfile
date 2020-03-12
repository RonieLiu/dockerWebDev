FROM php:7.2-fpm

RUN apt-get update \
	&& apt-get install -y libpng-dev zlib1g-dev curl libcurl4-gnutls-dev \
	&& apt install -y git \
	&& apt install -y zip \
	&& php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
	&& php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
	&& docker-php-ext-install gd \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install pdo_mysql \
    && pecl install redis && echo "extension=redis.so" > /usr/local/etc/php/conf.d/redis.ini \
    && pecl install xdebug \
    && composer config -g repo.packagist composer https://mirrors.aliyun.com/composer


