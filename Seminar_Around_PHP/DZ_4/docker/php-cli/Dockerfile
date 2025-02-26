FROM php:8.1-cli-alpine

RUN apk add htop

COPY php.ini /usr/local/etc/php/conf.d/php-custom.ini

WORKDIR /app/mysite.local
VOLUME /app/mysite.local