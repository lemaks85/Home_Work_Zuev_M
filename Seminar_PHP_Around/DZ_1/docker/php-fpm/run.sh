# shellcheck disable=SC2164
cd /usr/local/etc/php/conf.d
printf '[Date]\ndate.timezone="%s"\n', $TZ > tzone.ini
cd /app/mysite.local
composer update

php-fpm

/usr/bin/supervisord -c "/etc/supervisor/conf.d/bot.conf"