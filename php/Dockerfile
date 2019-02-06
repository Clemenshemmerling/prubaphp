FROM php:5.5-apache

RUN apt-get update && apt-get \
    install -y zlib1g-dev php5-gd php5-xmlrpc php-soap php5-intl sendmail libpng-dev libxml2-dev libicu-dev

RUN pecl install intl

RUN docker-php-ext-install mysqli zip gd soap xmlrpc opcache intl && \
    docker-php-ext-install tokenizer mysql pdo pdo_mysql

RUN apt-get update && apt-get \
    install -y mysql-client php5-mysql

RUN service apache2 restart

RUN chmod -R 777 /var/www/
