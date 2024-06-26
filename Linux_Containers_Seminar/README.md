# Control work on the Linux block
## Zuev Maksim Mihailovich groupe №6014
Task 5. Docker Compose и Docker Swarm
```Задание 1:
1) создать сервис, состоящий из 2 различных контейнеров: 1 - веб, 2 - БД
2) далее необходимо создать 3 сервиса в каждом окружении (dev, prod, lab)
3) по итогу на каждой ноде должно быть по 2 работающих контейнера
4) выводы зафиксировать 
```
***
Создаем файл docker-compose.yaml и прописываем туда инструкцию. 

![alt text](Screenshot/2.png)

Далее с помощью команды запускаем.

```
sudo docker compose up -d
```
![alt text](Screenshot/1.png)

Далее переходим в браузер ip:6080 и вводим связку логин - пороль.

![alt text](Screenshot/3.png)
![alt text](Screenshot/4.png)
***

Далее необходимо создать 3 сервиса в каждом окружении (dev, prod, lab)

Для решение задачи потребуется две VirtualBox машины "node-1" и "node-2" соедененные между собой подключинием типа NAT или Bridge. 
Создадим две рабочие дериктории 

```
mkdir work_node_1
mkdir work_node_2
```

![alt text](Screenshot/5.png)
***
Воспользуемся командой

```
sudo docker swarm init
```
и подключим две машины вместе.

![alt text](Screenshot/6.png)

Проверяем что все получилось, стутус Active.

```
sudo docker node ls
```
![alt text](Screenshot/7.png)

Cоздаем overlay сеть между node

```
sudo docker network create --driver overlay qzeeVbox --attachable
```

Проверяем созданную сеть на статус overlay

```
sudo docker network ls
```

![alt text](Screenshot/8.png)
***

Прописываем labels = dev

``` 
sudo docker node update --label-add env=dev node-1-VirtualBox
```

И запускаем Service на два контейнера

```
sudo docker service create --name nginx_service --replicas 2 -p 3310:3310 --network qzeeVbox --constraint node.labels.env==dev nginx:latest
```

Проверяем что прошло успешно

```
sudo docker service ps nginx_service
```

![alt text](Screenshot/10.png)
***

Прописываем labels = prod

```
sudo docker node update --label-add env=prod node-2-VirtualBox
```

И запускаем Service на два контейнера

```
sudo docker service create --name nginx_service2 --replicas 2 -p 3308:3308 --network qzeeVbox --constraint node.labels.env==prod nginx:10.10.1
```

Проверяем что прошло успешно

```
sudo docker service ps nginx_service2
```

![alt text](Screenshot/14.png)
***

Прописываем labels = lab

```
sudo docker node update --label-add env=lab node-1-VirtualBox
```

И запускаем Service на два контейнера

```
sudo docker service create --name nginx_service3 --replicas 2 -p 3310:3310 --network qzeeVbox --constraint node.labels.env==lab nginx:latest
```

Проверяем что прошло успешно

```
sudo docker service ps nginx_service3
```

![alt text](Screenshot/15.png)
```

sudo docker inspect имя сервиса 
```

Можно посмотреть в формате .json как прописался label 
![alt text](Screenshot/12.png)
![alt text](Screenshot/13.png)