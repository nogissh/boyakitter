FROM php:5.6-apache

RUN apt-get update && \
    apt-get upgrade -y && \ 	
    apt-get install -y \
      git \
      vim \
      wget \
      libmcrypt-dev

RUN docker-php-ext-install \
      fileinfo \
      mysqli \
      mbstring \
      mcrypt \
      pdo \
      pdo_mysql

RUN rm -rf /var/lib/apt/lists/*

COPY ./php.ini /usr/local/etc/php/

EXPOSE 80
