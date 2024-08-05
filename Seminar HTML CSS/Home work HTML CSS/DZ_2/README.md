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

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Main page</title>
</head>
<body>
  <ul>
    <li><a class="link" href="#">Main page</a></li>
    <li><a class="link" href="./catalog/catalog.html ">Catalog</a></li>
    <li><a class="link" href="./contacts.html">Contacts</a></li>
  </ul>
  <h1 class="title">Main page</h1>
  <p class="txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio in, architecto repudiandae quos sapiente impedit sunt excepturi delectus quia perspiciatis eius vitae accusantium ipsum dolor nihil similique totam omnis est, accusamus corrupti repellendus. Deleniti, neque iure vel in quibusdam dolores incidunt voluptatem labore, cupiditate dolor consectetur adipisci. Voluptatibus, accusamus id?</p>
  <h2 class="titTwo">Welcome to site</h2>
  <p class="txt">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas corrupti explicabo perferendis eos voluptatem natus, laborum, adipisci inventore non porro, eius repudiandae neque quos officia consequuntur! Necessitatibus veritatis quis molestiae nihil ea quam ducimus quas fugiat libero quidem, saepe, unde nesciunt commodi alias, aliquid soluta in amet. Sunt, nisi inventore.</p>
  <p class="txt">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim ad, adipisci soluta molestias est neque nam recusandae id. Aut dolorum iure natus quis unde, facere illum illo ex ducimus praesentium quidem ullam vel veritatis velit reprehenderit rem animi amet optio necessitatibus impedit enim voluptatibus expedita obcaecati! Tenetur, distinctio! Sit, enim!</p>
<p class="txt">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et asperiores distinctio amet nam assumenda consectetur enim molestiae magni, voluptatum quo vitae iste nesciunt accusamus ea blanditiis sequi ut labore atque a in, sapiente voluptate quidem. Quis modi, aliquam minima voluptatem quibusdam ex fugit ullam. Natus magnam repellendus voluptates dolore cumque?</p>
  
</body>
</html>
```

```html 
/* a {
  text-decoration: none;
  } */

  .link {
    color: cornflowerblue;
    font-size: 16px;
    line-height: 20px;
  }

  .title {
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
    color: #7D7987
  }

  .titTwo {
    color: coral;
    font-style: normal;
    font-weight: 700;
    font-size: 36px;
    line-height: 80px;
  }
```

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catalog</title>
</head>
<body>
  <ul>
    <li><a href="../index.html">Main page</a></li>
    <li><a href="#">Catalog</a></li>
    <li><a href="../contacts.html">Contacts</a></li>
  </ul>
<h1 class="title">Catalog</h1>
  <p class="txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium maiores, eum quaerat, obcaecati placeat inventore minus dignissimos amet aspernatur eos, quia eaque qui quisquam aut sunt quos fugiat iure. Libero omnis nulla pariatur voluptas. Voluptatum cumque dolorum officiis quasi quae. Soluta, dolore, unde voluptatum, architecto quo iure et molestiae quis obcaecati excepturi sit perspiciatis exercitationem! Quisquam voluptatum voluptas cum neque commodi dolor voluptates velit quidem nemo magnam? Illo quisquam dolores aut rem molestiae distinctio quos id quam similique corporis animi aliquam beatae cumque sit fugit soluta voluptatibus, nesciunt consequatur in deleniti! Accusantium hic asperiores sit, qui debitis et sequi! Nam voluptate culpa molestiae optio, hic atque quos sapiente labore, in ullam nostrum architecto doloremque cum illum assumenda ipsum placeat. Quod doloribus incidunt optio reiciendis tempora, quaerat, error illo iste iusto magnam commodi dolorum, adipisci harum facilis architecto reprehenderit omnis quae quasi doloremque autem! Sed quod laboriosam temporibus natus exercitationem nam?

  </p>

<div>
      <img src="../img/1.avif" alt="Croissant with chocolate" width="300" height="300">
      <h4>The croissant with chocolate</h4>
      <p class="txt">The croissant with chocolate is the most delicious in our store. The delicate puff pastry and sweet chocolate will not leave you indifferent.</p>
</div>
<div>
  <img src="../img/2.avif" alt="Donut" width="300" height="300">
  <h4>Donut</h4>
  <p class="txt">It is made from the most delicate dough, covered with an unforgettable glaze and sprinkled with confetti.</p>
</div>
<div>
  <img src="../img/3.avif" alt="Cake" width="300" height="300">
  <h4>Cake with strawberries</h4>
  <p class="txt">This cake will be the first on your holiday table. Its delicate strawberry filling, along with a soft dough, makes this dish tasty and satisfying.</p>
</div>
</body>
</html>
```