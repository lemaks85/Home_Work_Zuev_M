# Домашнее задание
```
1.	Скачать и настроить редактор кода, если этого не сделали на семинаре
2.	Создать пустую папку, придумать название
3.	Создать первую html страницу (index.html)
4.	Добавить структуру html документа
5.	Добавить меню сайта (Меню сайта должно быть на каждой странице, оно должно быть одинаковым)
a.	Главная 
b.	Каталог
c.	Контакты
6.	Создать заголовок h1 с текстом “Главная страница”
7.	Добавить параграф p с произвольным текстом (lorem) (используем расширение emmet уже установленное в vsc, для этого вводим lorem и нажимаем клавишу tab)
8.	Создать подзаголовок h2 с текстом “Добро пожаловать на сайт”
9.	Добавить три параграф p с произвольным текстом (lorem)
10.	Рядом с файлом index.html создать папку catalog
11.	Внутри папки catalog создать файл catalog.html 
12.	На странице “каталог” добавить структуру html документа
13.	Добавить меню сайта (такое же как на главной странице)
14.	Добавить Заголовок h1 с текстом “Каталог”
15.	Создать параграф p с произвольным текстом из 150 слов для этого вводим “lorem150” и нажимаем tab
16.	Сделать переходы с главной страницы на страницу каталог, при нажатии на меню сайта и переход со страницы каталог на главную страницу
17.	Создать папку img и разместить ее рядом с index.html
18.	Добавить в папку img произвольные фотографии товаров, по вашей тематике можно выбрать любое фото https://www.freepik.com/search?format=search&orientation=portrait&query=products  
19.	На странице “Каталог” после заголовка h1 и параграфа p добавить 
a.	Изображение товара
b.	Название товара
c.	Описасние товара
20.	Добавить 3 таких товара на страницу каталога (не следует добавлять более 3х товаров)
```
## index.html
```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main page</title>
</head>
<body>
  <ul>
    <li><a href="#">Main page</a></li>
    <li><a href="./catalog/catalog.html ">Catalog</a></li>
    <li><a href="./contacts.html">Contacts</a></li>
  </ul>
  <h1>Main page</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio in, architecto repudiandae quos sapiente impedit sunt excepturi delectus quia perspiciatis eius vitae accusantium ipsum dolor nihil similique totam omnis est, accusamus corrupti repellendus. Deleniti, neque iure vel in quibusdam dolores incidunt voluptatem labore, cupiditate dolor consectetur adipisci. Voluptatibus, accusamus id?</p>
  <h2>Welcome to site</h2>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas corrupti explicabo perferendis eos voluptatem natus, laborum, adipisci inventore non porro, eius repudiandae neque quos officia consequuntur! Necessitatibus veritatis quis molestiae nihil ea quam ducimus quas fugiat libero quidem, saepe, unde nesciunt commodi alias, aliquid soluta in amet. Sunt, nisi inventore.</p>
  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim ad, adipisci soluta molestias est neque nam recusandae id. Aut dolorum iure natus quis unde, facere illum illo ex ducimus praesentium quidem ullam vel veritatis velit reprehenderit rem animi amet optio necessitatibus impedit enim voluptatibus expedita obcaecati! Tenetur, distinctio! Sit, enim!</p>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et asperiores distinctio amet nam assumenda consectetur enim molestiae magni, voluptatum quo vitae iste nesciunt accusamus ea blanditiis sequi ut labore atque a in, sapiente voluptate quidem. Quis modi, aliquam minima voluptatem quibusdam ex fugit ullam. Natus magnam repellendus voluptates dolore cumque?</p>
  
</body>
</html>
```

## Catalog
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
<h1>Catalog</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium maiores, eum quaerat, obcaecati placeat inventore minus dignissimos amet aspernatur eos, quia eaque qui quisquam aut sunt quos fugiat iure. Libero omnis nulla pariatur voluptas. Voluptatum cumque dolorum officiis quasi quae. Soluta, dolore, unde voluptatum, architecto quo iure et molestiae quis obcaecati excepturi sit perspiciatis exercitationem! Quisquam voluptatum voluptas cum neque commodi dolor voluptates velit quidem nemo magnam? Illo quisquam dolores aut rem molestiae distinctio quos id quam similique corporis animi aliquam beatae cumque sit fugit soluta voluptatibus, nesciunt consequatur in deleniti! Accusantium hic asperiores sit, qui debitis et sequi! Nam voluptate culpa molestiae optio, hic atque quos sapiente labore, in ullam nostrum architecto doloremque cum illum assumenda ipsum placeat. Quod doloribus incidunt optio reiciendis tempora, quaerat, error illo iste iusto magnam commodi dolorum, adipisci harum facilis architecto reprehenderit omnis quae quasi doloremque autem! Sed quod laboriosam temporibus natus exercitationem nam?

  </p>

<div>
      <img src="../img/1.avif" alt="Croissant with chocolate" width="300" height="300">
      <h4>The croissant with chocolate</h4>
      <p>The croissant with chocolate is the most delicious in our store. The delicate puff pastry and sweet chocolate will not leave you indifferent.</p>
</div>
<div>
  <img src="../img/2.avif" alt="Donut" width="300" height="300">
  <h4>Donut</h4>
  <p>It is made from the most delicate dough, covered with an unforgettable glaze and sprinkled with confetti.</p>
</div>
<div>
  <img src="../img/3.avif" alt="Cake" width="300" height="300">
  <h4>Cake with strawberries</h4>
  <p>This cake will be the first on your holiday table. Its delicate strawberry filling, along with a soft dough, makes this dish tasty and satisfying.</p>
</div>
</body>
</html>
```
## Contacts
```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacts</title>
</head>
<body>
 
  <ul>
    <li><a href="./index.html">Main page</a></li>
    <li><a href="./catalog/catalog.html">Catalog</a></li>
    <li><a href="#">Contacts</a></li>
  </ul> 
  <h1>Contacts</h1>
  <form action="#">
<h3>Write to us</h3>
<textarea placeholder="Message"></textarea> <br>
<input type="text" placeholder="your lastname"> <br>
<input type="email" placeholder="your email">

  </form>
</body>
</html>
```