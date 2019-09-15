FROM php:7.1.30-apache

RUN apt-get update; \
	apt-get install openssl libssl-dev libcurl4-openssl-dev -y; \
	pecl install mongodb ssh2; \
	echo "extension=mongodb.so" > /usr/local/etc/php/conf.d/mongodb.ini

RUN apt-get install -y \
        autoconf \
        build-essential \
        libbsd-dev \
        libbz2-dev \
        libc-client2007e-dev \
        libc6-dev \
        libcurl4-openssl-dev \
        libedit-dev \
        libedit2 \
        libgmp-dev \
        libgpgme11-dev \
        libicu-dev \
        libjpeg-dev \
        libkrb5-dev \
        libldap2-dev \
        libmagick++-dev \
        libmagickwand-dev \
        libmcrypt-dev \
        libmemcached-dev \
        libpcre3-dev \
        libpng-dev \
        libsqlite3-0 \
        libsqlite3-dev \
        libssh2-1-dev \
        libtinfo-dev \
        libtool \
        libvpx-dev \
        libwebp-dev \
        libxml2 \
        libxml2-dev \
        libxpm-dev \
        libxslt1-dev \
    ;

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
# RUN echo "extension=mongodb.so" >> "$PHP_INI_DIR/php.ini"

RUN docker-php-ext-install \
	bcmath \
        bz2 \
        calendar \
        exif \
        gd \
        gettext \
	ldap \
	pdo_mysql \
        shmop \
	sockets \
	sysvmsg \
        sysvsem \
        sysvshm \
        wddx \
	xsl \
        zip \
	mysqli \
	opcache \
	&& docker-php-ext-enable opcache ;

RUN pecl install ssh2-1.1.2; \
	docker-php-ext-enable --ini-name pecl.ini \
	ssh2  ;

# Copy opcache configration
# COPY ./opcache.ini /usr/local/etc/php/conf.d/opcache.ini

# RUN apt-get install mysql-client mongodb-clients -y

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

RUN a2enmod rewrite
#RUN /etc/init.d/apache2 reload 
