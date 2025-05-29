import React, { createContext, useState, useEffect } from "react";

// Создание контекста корзины
export const CartContext = createContext();

// Создание компонента-провайдера корзины
const CartContextProvider = (props) => {
  // Имитация бэкенда: содержание корзины загружается из localStorage, если оно было сохрано в localStorage
  const [cartItems, setCartItems] = useState(
    JSON.parse(localStorage.getItem("cartItems")) || []
  );

  // Функция добавления товара в корзину по его id
  const addToCart = (productId) => {
    setCartItems((prevCartItems) => {
      // Проверка наличия товар с таким id в корзине
      const existingItem = prevCartItems.find((item) => item.id === productId);
      if (existingItem) {
        // Если товар уже есть в корзине, его количество увеличивается
        return prevCartItems.map((item) =>
          item.id === productId
            ? { ...item, quantity: item.quantity + 1 }
            : item
        );
      } else {
        // Если товара не было в корзине, такой добавляется в корзину в количестве 1.
        return [...prevCartItems, { id: productId, quantity: 1 }];
      }
    });
  };

  // Функция удаления товара из корзины по его id
  const removeFromCart = (productId) => {
    setCartItems((prevCartItems) =>
      prevCartItems.filter((item) => item.id !== productId)
    );
  };

  // Функция изменения количества товаров в корзине
  const updateCartItemQuantity = (productId, quantityChange) => {
    setCartItems(
      cartItems.map((item) =>
        item.id === productId
          ? {
              ...item,
              quantity: Math.max(1, quantityChange), // Минимум 1 единица товара в корзине
            }
          : item
      )
    );
  };

  // Очистка корзины
  const clearCart = () => {
    setCartItems([]);
  };

  // Имитация бэкенда: сохранение состояния корзины в localStorage при каждом изменении
  useEffect(() => {
    localStorage.setItem("cartItems", JSON.stringify(cartItems));
  }, [cartItems]);

  return (
    <CartContext.Provider
      value={{
        cartItems,
        addToCart,
        removeFromCart,
        clearCart,
        updateCartItemQuantity,
      }}
    >
      {props.children}
    </CartContext.Provider>
  );
};

export default CartContextProvider;
