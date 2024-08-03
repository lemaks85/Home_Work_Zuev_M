# Домашнее задание
```
Данная домашняя работа является продолжение предыдущей, не забываем
использовать работу из прошлого урока
Текст задания
1. Открыть Домашнюю работу из урока 1
2. Создать файл стилей style.css
3. Подключить ко всем страницам
4. Задать стиль
a {
text-decoration: none;
}
5. Проверить работу стилей на всех страницах
6. Разделить экран на 2 части, сделать так чтобы файл стилей располагался
справа, а все html файлы были слева
7. Для всех ссылок меню задать класс (придумать логичное название класса)
a. color: cornflowerblue;
b. font-size: 16px;
c. line-height: 20px;
8. Проверить отображения стилей на всех страницах проекта
9. Для всех заголовков h1 на сайте задать класс и к нему стиль
a. color: #222222;
b. font-size: 28px;
c. line-height: 36px;
d. font-weight: bold;
10. Для всех параграфов в проекте задать класс
11. К данному классу задать стили
a. font-style: normal;
b. font-weight: 300;
c. font-size: 18px;
d. line-height: 30px;
e. color: #7D7987
12. Для заголовков h2 задать класс
13. К данному классу указать стиль
a. color: coral;
b. font-style: normal;
c. font-weight: 700;
d. font-size: 36px;
e. line-height: 80px;
```

## index.html

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css">
    <title>main page</title>
  </head>
  <body>
    <ul>
      <li><a class="link" href="#">Main</a></li>
      <li><a class="link" href="./info/about.html">About me</a></li>
      <li><a class="link" href="./form.html">Form</a></li>
    </ul>
    <h1 class="tit">Hello world</h1>
    <p class="txt">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam quo
      perferendis odit doloremque saepe, labore voluptatum omnis, deserunt eius
      in maxime ipsum veniam velit eaque deleniti molestias amet nulla fugiat.
    </p>
    <h2 class="sub">Heading 2</h2>
    <p class="txt">
      Далеко-далеко за словесными горами в стране гласных и согласных живут
      рыбные тексты. Знаках сбить пояс заманивший путь возвращайся? Несколько
      страна по всей семантика взгляд ты ipsum, вопроса даль, безорфографичный
      пунктуация языком текста он, большой это парадигматическая составитель
      щеке безопасную оксмокс знаках они над бросил? Своего использовало
      единственное грустный своих, там речью вопрос злых большого рукопись
      которое дал несколько, взгляд буквенных его встретил продолжил? Себя
      скатился сих букв, прямо дорогу образ наш всемогущая там свой необходимыми
      подзаголовок текста буквенных правилами одна вдали рукопись?
      Безорфографичный алфавит первую грустный там рукописи взгляд свою
      последний своих, предупреждал текстов! Океана ему заманивший города
      которое, коварный даль диких точках!
    </p>
    <h3>Heading 3</h3>
    <p class="txt">Lorem ipsum dolor sit amet.</p>
    <h4>Heading 4</h4>
    <h5>Heading 5</h5>
    <h6>Heading 6</h6>
    <a href="https://vk.com" target="_blank"><img src="./img/vk.webp" alt="vk" width="90" height="50" /></a>
    <a href="https://mail.ru" target="_blank"><img src="./img/mail.webp" alt="mail" width="50" height="50" /></a>
  </body>
</html>

```

## style.css

```css
a {
  text-decoration: none;
}


body {
  background-color: bisque;
  /* font-family: sans-serif; */
}

.link {
  color: cornflowerblue;
  font-size: 16px;
  line-height: 20px;
}

.tit {
  color: #222222;
  font-size: 28px;
  line-height: 36px;
  font-weight: bold;
}

.txt {
  font-style: normal;
  font-weight: 300;
  font-size: 18px;
  line-height: 30px;
  color: #7d7987;
}

.sub {
  color: coral;
  font-style: normal;
  font-weight: 700;
  font-size: 36px;
  line-height: 80px;
}

.picture {
  border-radius: 20px 50px 20px 80px;
  width: 250px;
  height: 200px;
}

.form {
  width: 200px;
  height: 30px;
  outline: none;
  border: 1px solid #ccc;
  border-radius: 15px;
  font-size: 14px;
  line-height: 30px;
}

.click {
  width: 100px;
  height: 30px;
  font-size: 14px;
  border: 1px solid #ccc;
  border-radius: 10px;
}

```