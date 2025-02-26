FROM php:8.1-fpm-alpine as builder
RUN apk add \
    --no-cache \
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
    tzdata \
    && docker-php-ext-install pdo pdo_sqlite \
    && docker-php-ext-configure pcntl --enable-pcntl \
    && docker-php-ext-install pcntl \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer -q


FROM builder as debug
RUN apk add \
    --no-cache $PHPIZE_DEPS \
    --update linux-headers \
    && pecl install xdebug-3.3.1 \
    && docker-php-ext-enable xdebug


FROM debug
ENV TZ=Europe/Moscow
COPY php.ini /usr/local/etc/php/conf.d/php-custom.ini
COPY run.sh /root
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
WORKDIR /app/mysite.local
CMD ["sh", "/root/run.sh"]