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
    supervisor \
    && docker-php-ext-install pdo pdo_sqlite \
    && docker-php-ext-configure pcntl --enable-pcntl \
    && docker-php-ext-install pcntl \
    && docker-php-ext-install sockets \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer -q


FROM builder as supervisor
ARG USER_ID=33
ARG GROUP_ID=33
RUN apk --no-cache add shadow && \
    groupmod -o -g ${USER_ID} www-data && \
    usermod -o -u ${GROUP_ID} -g www-data www-data


FROM supervisor
ENV TZ=Europe/Moscow
COPY php.ini /usr/local/etc/php/conf.d/php-custom.ini
COPY supervisor.ini /etc/supervisord.conf
COPY conf.d /etc/supervisor/conf.d
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
WORKDIR /app/mysite.local
CMD ["/usr/bin/supervisord", "--nodaemon", "--configuration", "/etc/supervisord.conf"]