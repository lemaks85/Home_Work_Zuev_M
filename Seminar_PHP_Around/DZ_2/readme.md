### DockerRun

```sh
# Сборка проекта
sh build.sh lesson2 && exit
```

```bash
# Запуск проекта (тестовый, при выходе остановит)
sh start.sh lesson2 php-fpm && exit
```

Commands:
- `php runner -c save_event --name 'name' --receiver 1 --text 'text' --cron '* * * * *'`
- `php runner -c handle_events`