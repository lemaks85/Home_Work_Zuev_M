import Header from "./Header";
import Footer from "./Footer";

import { HandySvg } from "handy-svg";
import right_arrow_icon from "../img/right_arrow.svg";

function RegistrationPage() {
  return (
    <div className="box-content">
        <Header />
        <content className="content">
            <div className="head center">
                <h1 className="head_title">REGISTRATION</h1>
            </div>
            <div className="reg-box center">
                <div className="reg-box__left">
                    <form action="#" method="post" id="reg_user">
                        <div className="reg-box__reg-form">
                            <p className="reg-box__form_title">Your Name</p>
                            <input
                                className="reg-box__reg-field"
                                type="text"
                                id="user_first_name"
                                placeholder="First Name"
                                required
                            />
                            <input
                                className="reg-box__reg-field"
                                type="text"
                                id="user_last_name"
                                placeholder="Last Name"
                                required
                            />
                        </div>
                        <div className="reg-box__sex-selectors">
                            <div className="reg-box__sex-selector">
                                <input
                                    className="reg-box__radio"
                                    type="radio"
                                    id="male_button"
                                    name="user_sex"
                                />
                                <label for="male_button">Male</label>
                            </div>
                            <div className="reg-box__sex-selector">
                                <input
                                    className="reg-box__radio"
                                    type="radio"
                                    id="female_button"
                                    name="user_sex"
                                />
                                <label for="female_button">Female</label>
                            </div>
                        </div>
                        <div className="reg-box__reg-form">
                            <p className="reg-box__form_title">Login details</p>
                            <input
                                className="reg-box__reg-field"
                                type="email"
                                id="user_email"
                                placeholder="Email"
                                required
                            />
                            <input
                                className="reg-box__reg-field"
                                type="password"
                                id="user_password"
                                placeholder="Password"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                required
                            />
                        </div>
                        <p className="reg-box__password-requirements">Please use 8 or more characters, with at least 1 number and a mixture of uppercase and lowercase letters</p>
                    </form>
                    <div>
                        <button className="reg-box__button" type="submit" form="reg_user">
                            JOIN NOW
                            <HandySvg src={right_arrow_icon} width="17" height="10" />
                        </button>
                    </div>
                </div>
                <div className="reg-box__right">
                    <p className="reg-box__perks_title">LOYALTY HAS ITS PERKS</p>
                    <p className="reg-box__perks_text">Get in on the loyalty program where you can earn points and unlock serious perks. Starting with these as soon as you join:</p>
                    <ul className="reg-box__perks_lst">
                        <li className="reg-box__perks_li">15% off welcome offer</li>
                        <li className="reg-box__perks_li">Free shipping, returns and exchanges on all orders</li>
                        <li className="reg-box__perks_li">$10 off a purchase on your birthday</li>
                        <li className="reg-box__perks_li">Early access to products</li>
                        <li className="reg-box__perks_li">Exclusive offers & rewards</li>
                    </ul>
                </div>
            </div>
        </content>
      <Footer />
    </div>
  );
}

export default RegistrationPage;
