FROM php:5.6-apache

RUN apt-get update && \
    apt-get upgrade -y && \ 	
    apt-get install -y \
      git \
      vim

RUN rm -rf /var/lib/apt/lists/*

COPY ./php.ini /usr/local/etc/php/

EXPOSE 80
