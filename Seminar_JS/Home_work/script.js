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
    itemHoverBtn.addEventListener('click', () => {

        const blockEl = document.createElement('div');
        blockEl.classList.add('blockElem');

        const textEl = document.createElement('p');
        textEl.textContent = `ID - ${element.id} Collection - ${element.name} Price - ${element.price}`;


        const removeButtonEl = document.createElement('button');
        removeButtonEl.textContent = 'Del to Cart';
        removeButtonEl.addEventListener('click', () => blockEl.remove());

        blockEl.appendChild(textEl);
        blockEl.appendChild(removeButtonEl);
        
        const cardEl = document.querySelector('.cart');
        cardEl.appendChild(blockEl);
        
    });

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