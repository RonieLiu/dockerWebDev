FROM php:5.5-fpm

RUN apt-get update \
	&& apt-get install -y libpng12-dev zlib1g-dev \
	&& docker-php-ext-install gd \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install pdo_mysql \
	&& curl -o /home/redis.tgz https://pecl.php.net/get/redis-2.2.7.tgz \
    && pecl install /home/redis.tgz && echo "extension=redis.so" > /usr/local/etc/php/conf.d/redis.ini \
    && pecl install xdebug && echo "extension=xdebug.so" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_connect_back=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    

