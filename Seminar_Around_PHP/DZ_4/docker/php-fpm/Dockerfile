FROM php:8.1-fpm-alpine

COPY php.ini /usr/local/etc/php/conf.d/php-custom.ini
COPY run.sh /root

RUN apk add \
    htop \
    nano \
    autoconf \
    curl \
    wget \
    git \
    zip \
    unzip \
    oniguruma \
    openssl \
    sqlite-dev \
    supervisor

#RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-install pdo pdo_sqlite

RUN docker-php-ext-configure pcntl --enable-pcntl \
  && docker-php-ext-install pcntl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer -q

RUN apk add \
    --no-cache $PHPIZE_DEPS \
    --update linux-headers \
    && pecl install xdebug-3.3.1 \
    && docker-php-ext-enable xdebug

WORKDIR /app/mysite.local
VOLUME /app/mysite.local

CMD ["sh", "/root/run.sh"]