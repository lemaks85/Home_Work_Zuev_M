### DockerRun

```sh
# Сборка проекта
sh build.sh lesson4 && exit
```
```sh
# Запуск проекта (тестовый, при выходе остановит)
sh start.sh lesson4 php-fpm && exit
```

###### Перед запуском:
- Переименовать `docker/.env.example` в `docker/.env`
- Установить свой часовой пояс `TIMEZONE` в `docker/.env`
- Переименовать `app/.env.example` в `app/.env`
- Вставить токен своего бота `TELEGRAM_TOKEN` в `app/.env`
- Создать БД `app/database/database.sqlite`
  ```db
  table `event`
  - (int, ai)   `id`
  - (string)    `name`
  - (string)    `text`
  - (string)    `receiver_id`
  - (string)    `minute`
  - (string)    `hour`
  - (string)    `day`
  - (string)    `month`
  - (string)    `day_of_week`
  ```
- Первый запуск: `composer update`

### Commands:
```txt
# Добавление сообщения
php runner -c save_event --name 'Test' --receiver <tg_user_id> --text 'Text message' --cron '* * * * *'

# Отправка сообщений вручную
php runner -c handle_events

# Тесты
php runner -c test
vendor/bin/phpunit --coverage-text -c phpunit.xml
```

### UPD
```txt
Версия PHP обновлена до 8.1, тк. не все пакеты устанавливались под 8.0
исправлен PHP-DOC "@covers EventSaver" -> "@covers \App\Actions\EventSaver"
```