# Вокруг PHP – экосистема веб-приложений. Обучение в записи
## Урок 2. Семинар: Консольный PHP
```
Домашнее задание.

Выполнил студент GB Зуев Максим Михайлович, группа № 6014.
```
---
Домашнее задание написано на последних слайдах в презентации.

> Код с семинара, [скачать](https://drive.google.com/file/d/1aW53N1R7cxP5OPtgifjrEWn2KkJVDXgU/view?usp=sharing) и понять 
Конфиг супервизора, положить в /etc/supervisor/conf.d
```php
[program:worker]
process_name=%(program_name)s_%(process_num)02d
command=php8.2 ПУТЬДОФАЙЛА_RUNNER -c handle_events_daemon
autostart=true
autorestart=true
user=www-data
numprocs=1
redirect_stderr=true
stdout_logfile=/var/log/worker

php runner -c save_event --name 'name' --receiver 1 --text 'text' --cron '* * * * *' * * * * * php runner -c handle_events
```
=>  [DZ_1](./DZ_1/)
---
## Урок 4. Семинар: Backend API
Домашнее задание написано на последних слайдах в [презентации](./DZ_2/Презентация%20к%20семинару%202.%20Backend%20API%20-%20student.pdf).

