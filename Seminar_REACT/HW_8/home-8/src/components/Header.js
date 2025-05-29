import React, { useContext } from 'react';
import { Link } from "react-router-dom";

import { CartContext } from "../contexts/CartContext";

import {HandySvg} from 'handy-svg';
import header_logo from "../img/header_logo.svg";
import search_icon from "../img/search_icon.svg";
import { ReactComponent as Мenu_icon } from "../img/menu_icon.svg";
import { ReactComponent as User_icon } from "../img/user_icon.svg";
import { ReactComponent as Cart_icon } from '../img/cart_icon.svg';

function Header() {
    // Получение количества товаров в корзине из контекста
    const { cartItems } = useContext(CartContext);
    const totalItems = cartItems.reduce((total, item) => total + item.quantity, 0);

    return (
        <header className="header center">
        <div className="header_left">
            <Link className="logo" to="/">
                <img src={header_logo} alt="Letter b logo" />
            </Link>
            <HandySvg src={search_icon} className="search_icon" width="27" height="28"/>
        </div>
        <div className="header_right">
            <div className="main_menu">
                <label htmlFor="main_menu_button" className="main_menu_button">
                    <Мenu_icon className="menu_icon" />
                </label>
                <input type="checkbox" id="main_menu_button" defaultChecked="false" />
                <div className="main_menu_bar">
                    <h4 className="main_menu_title">MENU</h4>
                    <ul>
                        <li>
                            <Link className="main_section" to="/catalog">MAN</Link>
                            <ul>
                                <li><Link className="link_section" to="/catalog">Accessories</Link></li>
                                <li><Link className="link_section" to="/catalog">Bags</Link></li>
                                <li><Link className="link_section" to="/catalog">Denim</Link></li>
                                <li><Link className="link_section" to="/catalog">T-Shirts</Link></li>
                            </ul>
                        </li>
                        <li>
                            <Link className="main_section" to="/catalog">WOMAN</Link>
                            <ul>
                                <li><Link className="link_section" to="/catalog">Accessories</Link></li>
                                <li><Link className="link_section" to="/catalog">Jackets & Coats</Link></li>
                                <li><Link className="link_section" to="/catalog">Polos</Link></li>
                                <li><Link className="link_section" to="/catalog">T-Shirts</Link></li>
                                <li><Link className="link_section" to="/catalog">Shirts</Link></li>
                            </ul>
                        </li>
                        <li>
                            <Link className="main_section" to="/catalog">KIDS</Link>
                            <ul>
                                <li><Link className="link_section" to="/catalog">Accessories</Link></li>
                                <li><Link className="link_section" to="/catalog">Jackets & Coats</Link></li>
                                <li><Link className="link_section" to="/catalog">Polos</Link></li>
                                <li><Link className="link_section" to="/catalog">T-Shirts</Link></li>
                                <li><Link className="link_section" to="/catalog">Shirts</Link></li>
                                <li><Link className="link_section" to="/catalog">Bags</Link></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <Link className="user" to="/registration">
                <User_icon className="user_icon" />
            </Link>
            <Link className="cart" to="/cart">
                <Cart_icon className="cart_icon" />
                {totalItems > 0 && <span className="cart_count">{totalItems}</span>}
            </Link>
      </div>
    </header>
  );
}

export default Header;