# Продолжение JavaScript
## Урок 11. Семинар. Шаблонизация
```
Домашнее задание.
Выполнил студент GB Зуев Максим Михайлович, группа № 6014.
```
Задание.

> Дан макет сайта https://www.figma.com/file/mnLY69cYE5cqWM5w6n5hXx/Seo-%26-Digital-Marketing-Landing-Page?node-id=190%3A1194&t=q4NMnXTnwyyTSGA6-0 
> В блоке Featured Items небходимо реализовать шаблон товаров.

> Для этого необходимо создать json формат данных по всем товарам. 

> Из этого файла сформировать блок Featured Items. `Всю вёрстку остальных частей реализовывать не нужно, если у вас она была сделана на html/css можно использовать, заново создавать не требуется`.


## Пример "Решение задачи" размещение на сервере.
http://sxcary2r.beget.tech/
---
![](./screen/1.png)



## HTML

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="cards-section">
        <div class="container">
            <h1 class="cards-section__title">Fetured Items</h1>
            <p class="cards-section__description">Shop for items based on what we featured in this week</p>
                <div class="cards__wrapper"></div>
                    <div class="cards-section__btn">
                        <button class="btn-browse">Browse All Product</button>
                    </div>
        </div>
    </section>
    <script src="./data.js"></script>
    <script src="./script.js"></script>
</body>
</html>
```
## CSS
```css
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap');

* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	text-decoration: none;
}

body {
	scroll-behavior: smooth;
	text-rendering: optimizeSpeed;
}

img {
	display: block;
	max-width: 100%;
}

h1,
h2,
h3,
h4,
p {
	font-family: 'Lato';
	font-style: normal;
	font-weight: 400;
	color: #222222;
}

.container {
	max-width: 1140px;
	margin: 0 auto;
}

header {
	background: #222222;
	height: 75px;
}

.navigation {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 18px 0 19px;
}

.navigation__left-part {
	display: flex;
	align-items: center;
	gap: 41px;
}

.navigation__right-part {
	display: flex;
	align-items: center;
	gap: 33px;
	position: relative;
}

.number {
	position: absolute;
	right: -9px;
	top: -4px;
	padding: 5px;
	width: 19px;
	height: 19px;
	background-color: #f16d7f;
	border-radius: 50%;
	display: flex;
	align-items: center;
	justify-content: center;
}

.count {
	text-align: center;
	color: #fff;
	font-size: 12px;
}

.nav-btn {
	cursor: pointer;
	background-color: inherit;
	outline: none;
	border: none;
}

.banner-section {
	background-color: #f1e4e6;
	margin-bottom: 65px;
}

.banner-section__wrapper {
	max-width: 1600px;
	margin: 0 auto;
	display: grid;
	grid-template-columns: 1fr 1fr;
	gap: 64px;
}

.banner-title__wrapper {
	display: flex;
	align-items: center;
}

.banner__title {
	display: flex;
	flex-direction: column;
	border-left: 12px solid #f16d7f;
	max-width: 415px;
	height: 93px;
}

.banner__title-h1 {
	padding-left: 16px;
	font-weight: 900;
	font-size: 48px;
	line-height: 58px;
}

.banner__title-h2 {
	padding-left: 16px;
	font-weight: 700;
	font-size: 33px;
	line-height: 38px;
}

.banner__title-h2 span {
	color: #f16d7f;
}

.category-section {
	margin-bottom: 96px;
}

.category__wrapper {
	display: grid;
	grid-template-columns: 1fr 1fr 1fr;
	gap: 30px;
}

.category-women,
.category-men,
.category-kids {
	width: 360px;
	height: 260px;
}

.category-women {
	background-image: url(/img/women.png);
}
.category-men {
	background-image: url(/img/men.png);
}
.category-kids {
	background-image: url(/img/kids.png);
}
.category-accesories {
	grid-row: 2;
	grid-column: 1 / 4;
	background-image: url(/img/acs.png);
	height: 180px;
}

.category-bg {
	background: rgba(33, 22, 22, 0.7);
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	cursor: pointer;
}

.category-text {
	font-size: 16px;
	line-height: 19px;
	color: #ffffff;
}

.category-title {
	font-weight: 700;
	font-size: 24px;
	line-height: 29px;
	color: #f16d7f;
}

.cards-section {
	margin-bottom: 60px;
}

.cards-section__title {
	font-size: 30px;
	line-height: 36px;
	text-align: center;
	margin-bottom: 6px;
}

.cards-section__description {
	font-size: 14px;
	line-height: 17px;
	color: #9f9f9f;
	margin-bottom: 48px;
	text-align: center;
}

.cards__wrapper {
	display: grid;
	grid-template-columns: 1fr 1fr 1fr;
	grid-template-rows: 1fr 1fr;
	gap: 30px;
	margin-bottom: 48px;
}

.cards__item {
	display: flex;
	flex-direction: column;
	background: #f8f8f8;
}

.item-img {
	width: 360px;
	height: 420px;
	margin-bottom: 25px;
}

.item-img:hover .item-img__hover {
	display: flex;
}

.item-img__hover {
	background: rgba(58, 56, 56, 0.86);
	width: 100%;
	height: 100%;
	display: none;
	justify-content: center;
	align-items: center;
}

.item-img__hover-btn {
	cursor: pointer;
	background: transparent;
	outline: none;
	border: 1px solid #ffffff;
	padding: 13px 16px;
	display: flex;
	align-items: center;
	gap: 11px;

	font-family: 'Lato';
	font-style: normal;
	font-weight: 400;
	font-size: 14px;
	line-height: 17px;
	color: #ffffff;
}

.item-img__hover-btn::before {
	content: url(./img/btn-cart.svg);
	width: 26px;
	height: 24px;
}

.item-description {
	display: flex;
	flex-direction: column;
	margin: 0 0 19px 16px;
}

.item-title {
	font-size: 13px;
	line-height: 16px;
	margin-bottom: 16px;
}

.item-text {
	font-weight: 300;
	font-size: 14px;
	line-height: 17px;
	color: #5d5d5d;
	margin-bottom: 16px;
	max-width: 314px;
}

.item-price {
	font-size: 16px;
	line-height: 19px;
	color: #f16d7f;
}

.cards-section__btn {
	display: flex;
	justify-content: center;
}

.btn-browse {
	font-family: 'Lato';
	font-style: normal;
	font-weight: 400;
	font-size: 16px;
	line-height: 19px;
	color: #f26376;
	cursor: pointer;
	background: inherit;
	outline: none;
	border: 1px solid #ff6a6a;
	padding: 14px 38px;
}

```
## JS Шаблон
```js
const data = JSON.parse(dataCard);
const cardBox = document.querySelector('.cards__wrapper');



data.forEach(element => {

    const itemEl = document.createElement('div');
    itemEl.classList.add('cards__item');

    const itemImg = document.createElement('div');
    itemImg.classList.add('item-img');
    itemImg.style.backgroundImage = `url(${element.url})`;

    const itemHover = document.createElement('div');
    itemHover.classList.add('item-img__hover');

    const itemHoverBtn = document.createElement('button');
    itemHoverBtn.classList.add('item-img__hover-btn');
    itemHoverBtn.textContent = 'Add to Cart';

    const itemDesc = document.createElement('div');
    itemDesc.classList.add('item-description');

    const itemTitle = document.createElement('h4');
    itemTitle.classList.add('"item-title');
    itemTitle.textContent = element.name;

    const itemText = document.createElement('p');
    itemText.classList.add('item-text');
    itemText.textContent = element.text;

    const itemPrice = document.createElement('p');
    itemPrice.classList.add('item-price');
    itemPrice.textContent = element.price;

    cardBox.appendChild(itemEl);
    itemEl.appendChild(itemImg);
    itemImg.appendChild(itemHover);
    itemHover.appendChild(itemHoverBtn);
    itemEl.appendChild(itemDesc);
    itemDesc.appendChild(itemTitle);
    itemDesc.appendChild(itemText);
    itemDesc.appendChild(itemPrice);

});
```
## JSON Данные
```json
const dataCard = `
    [
        {
            "url": "./img/item1.jpg",
            "name": "ELLERY X M'O CAPSULE",
            "text": "Known for her sculptural takes on traditional tailoring, Australian arbiter of cool Kym Ellery teams up with Moda Operandi",
            "price": "$52.00"
        },

        {
            "url": "./img/item2.png",
            "name": "ELLERY X M'O CAPSULE",
            "text": "Known for her sculptural takes on traditional tailoring, Australian arbiter of cool Kym Ellery teams up with Moda Operandi",
            "price": "$48.00"
        },

        {
            "url": "./img/item3.png",
            "name": "ELLERY X M'O CAPSULE",
            "text": "Known for her sculptural takes on traditional tailoring, Australian arbiter of cool Kym Ellery teams up with Moda Operandi",
            "price": "$28.00"
        },

        {
            "url": "./img/item4.png",
            "name": "ELLERY X M'O CAPSULE",
            "text": "Known for her sculptural takes on traditional tailoring, Australian arbiter of cool Kym Ellery teams up with Moda Operandi",
            "price": "$122.00"
        },

        {
            "url": "./img/item5.png",
            "name": "ELLERY X M'O CAPSULE",
            "text": "Known for her sculptural takes on traditional tailoring, Australian arbiter of cool Kym Ellery teams up with Moda Operandi",
            "price": "$36.00"
        },

        {
            "url": "./img/item6.png",
            "name": "ELLERY X M'O CAPSULE",
            "text": "Known for her sculptural takes on traditional tailoring, Australian arbiter of cool Kym Ellery teams up with Moda Operandi",
            "price": "$12.00"
        }
    ]
`
```
