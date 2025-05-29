import React, { useContext } from 'react';

import { HandySvg } from "handy-svg";
import add_to_cart_btn from "../img/add_to_cart_btn.svg";

import { CartContext } from "../contexts/CartContext"; // Импорт контекста корзины

function ProductItem({ id, title, description, price, imageUrl }) {
  // Получение функции добавления товара в корзину из CartContext
  const { addToCart } = useContext(CartContext);

  // Вызов функции добавления в корзину
  const handleAddToCart = () => {
    addToCart(id);
  };

  return (
    <div className="item">
      <div className="item_img">
        <div className="hover_img"></div>
        <div className="hover_button">
          <div className="add_to_cart_btn" onClick={handleAddToCart}>
            <HandySvg src={add_to_cart_btn} width="27" height="25" />
            Add to Cart
          </div>
        </div>
        <img className="item_pic" src={imageUrl} alt="Product image" />
      </div>
      <div className="item_text">
        <h5 className="item_title">{title}</h5>
        <p className="item_description">{description}</p>
        <p className="item_price">${price.toFixed(2)}</p>
      </div>
    </div>
  );
}

export default ProductItem;
