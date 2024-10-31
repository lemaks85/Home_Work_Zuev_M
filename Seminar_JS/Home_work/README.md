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
