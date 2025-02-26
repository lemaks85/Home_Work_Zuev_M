FROM php:8.0-fpm-alpine

ARG TZ=Europe/Moscow
ARG USER_ID=33
ARG GROUP_ID=33

COPY php.ini /usr/local/etc/php/conf.d/php-custom.ini

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime \
	&& echo $TZ > /etc/timezone

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

RUN docker-php-ext-install pdo pdo_sqlite

RUN docker-php-ext-configure pcntl --enable-pcntl \
  && docker-php-ext-install pcntl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer -q

COPY systemctl-worker.conf /etc/supervisord.conf
COPY conf.d /etc/supervisor/conf.d

RUN apk --no-cache add shadow && \
    groupmod -o -g ${USER_ID} www-data && \
    usermod -o -u ${GROUP_ID} -g www-data www-data

WORKDIR /app/mysite.local
VOLUME /app/mysite.local

CMD ["/usr/bin/supervisord", "--nodaemon", "--configuration", "/etc/supervisord.conf"]