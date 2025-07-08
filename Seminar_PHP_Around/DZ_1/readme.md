### DockerRun

```sh
# Сборка проекта
sh build.sh lesson1 && exit
```

```bash
# Запуск проекта (тестовый, при выходе остановит)
sh start.sh lesson1 php-fpm && exit
```

---

Конфиг супервизора, положить в `/etc/supervisor/conf.d/bot.conf`
```
[program:worker]
process_name=%(program_name)s_%(process_num)02d
command=php8.0 /app/mysite.local/runner -c handle_events_daemon
autostart=true
autorestart=true
user=www-data
numprocs=1
redirect_stderr=true
stdout_logfile=/var/log/worker
```

Commands:
- `php runner -c save_event --name 'name' --receiver 1 --text 'text' --cron '* * * * *'`
- `php runner -c handle_events`