import React, { useContext, useState, useEffect } from "react";
import { Link } from "react-router-dom";
import Header from "./Header";
import Footer from "./Footer";
import { CartContext } from "../contexts/CartContext";
import products from "./productsData"; // Импорт массива продуктов

import { ReactComponent as CloseIcon } from "../img/close_icon.svg";

const CartPage = () => {
  // Получение функционала из CartContext
  const { cartItems, removeFromCart, updateCartItemQuantity, clearCart } = useContext(CartContext);

  // Состояние для хранения общей стоимости
  const [totalPrice, setTotalPrice] = useState(0);

  // Определение общей стоимости товаров в корзине
  useEffect(() => {
    let total = 0;
    cartItems.forEach((item) => {
      const product = products.find((product) => product.id === item.id);
      total += product.price * item.quantity;
    });
    setTotalPrice(total);
  }, [cartItems]);

  // Изменение количества товара в корзине
  const handleQuantityChange = (event, productId) => {
    const newQuantity = parseInt(event.target.value);
    updateCartItemQuantity(productId, newQuantity);
  };
    
  // Удаления товара из корзины
  const handleRemoveItem = (productId) => {
    removeFromCart(productId);
  };

  // Очистка корзины
  const handleClearCart = () => {
    clearCart();
  };

  return (
    <div className="box-content">
      <Header />
      <content className="content">
        <div className="head center">
          <h1 className="head_title">SHOPPING CART</h1>
        </div>
        <div className="cart-box center">
          {cartItems.length === 0 ? (
            <h2>Your cart is empty</h2>
          ) : (
            <div className="cart-box__left">
              <div className="cart-box__products">
                {cartItems.map((item) => {
                  const product = products.find((product) => product.id === item.id);
                  if (product)
                  return (
                    <div className="cart-box__product_card" key={item.id}>
                      <div className="cart-box__card_img">
                        <img src={product.imageUrl} alt="Product image" />
                      </div>
                      <div className="cart-box__card_text">
                        <h4 className="cart-box__card_title">{product.title}</h4>
                        <p className="cart-box__card_content">
                          Price:&nbsp;
                          <span className="cart-box__card_price cart-box__card_value">
                            ${product.price.toFixed(2)}
                          </span>
                        </p>
                        <p className="cart-box__card_content">
                          Color:&nbsp;
                          <span className="cart-box__card_value">
                            {product.color}
                          </span>
                        </p>
                        <p className="cart-box__card_content">
                          Size:&nbsp;
                          <span className="cart-box__card_value">
                            {product.size}
                          </span>
                        </p>
                        <label htmlFor="quantity" className="cart-box__card_content">
                          Quantity:
                        </label>
                        <input
                          id="quantity"
                          type="number"
                          min="1"
                          value={item.quantity}
                          onChange={(e) => handleQuantityChange(e, item.id)}
                        />
                      </div>
                      <a className="cart-box__close_icon" onClick={() => handleRemoveItem(item.id)}>
                        <CloseIcon />
                      </a>
                    </div>
                  );
                })}
              </div>
              <div className="cart-box__buttons">
                <div className="cart-box__shopping_button">
                  <a className="cart-box__shopping_button_title" onClick={handleClearCart}>
                    Clear shopping cart
                  </a>
                </div>
                <div className="cart-box__shopping_button">
                  <Link className="cart-box__shopping_button_title" to="/catalog">
                    Continue shopping
                  </Link>
                </div>
              </div>
            </div>
          )}
          <div className="cart-box__right">
            <div className="cart-box__shipping-form">
              <h4 className="cart-box__shipping-title">SHIPPING ADRESS</h4>
              <input
                className="cart-box__shipping-field"
                type="text"
                id="country"
                placeholder="Country"
                value="Bangladesh"
                required
              />
              <input
                className="cart-box__shipping-field"
                type="text"
                id="territory"
                placeholder="State"
                required
              />
              <input
                className="cart-box__shipping-field"
                type="text"
                id="postcode"
                placeholder="Postcode / Zip"
                required
              />
              <div className="cart-box__shipping_button">
                <a className="cart-box__shipping_button_title" href="#">
                  GET A QUOTE
                </a>
              </div>
            </div>
            <div className="cart-box__checkout-box">
              <div className="cart-box__subtotal">
                <div>SUB TOTAL</div>
                <div>${totalPrice.toFixed(2)}</div>
              </div>
              <div className="cart-box__grandtotal">
                <div>GRAND TOTAL</div>
                <div className="cart-box__totalprice">${totalPrice.toFixed(2)}</div>
              </div>
              <hr className="cart-box__checkout-line" />
              <div className="cart-box__checkout-button">
                <a className="cart-box__checkout_button_title" href="#">
                  PROCEED TO CHECKOUT
                </a>
              </div>
            </div>
          </div>
        </div>
      </content>
      <Footer />
    </div>
  );
}

export default CartPage;
