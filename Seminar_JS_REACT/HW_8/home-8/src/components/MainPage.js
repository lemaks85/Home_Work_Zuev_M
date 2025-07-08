import { Link } from "react-router-dom";

import Header from "./Header";
import Footer from "./Footer";
import ProductItem from "./ProductItem";

import top_brand_img from "../img/top_brand_img.png";

import { HandySvg } from "handy-svg";
import top_brand_title from "../img/top_brand_title.svg";

import { ReactComponent as FeatureDelivery_icon } from "../img/feature_icon1.svg";
import { ReactComponent as FeatureDiscount_icon } from "../img/feature_icon2.svg";
import { ReactComponent as FeatureQuality_icon } from "../img/feature_icon3.svg";

import products from "./productsData"; // Импорт массива продуктов

import "../style.scss";

function MainPage() {
  return (
    <div className="box-content">
      <Header />
      <content className="content">
        <div className="top_brand">
          <div className="top_brand_img">
            <img className="top_brand_pic" src={top_brand_img} alt="Man" />
          </div>
          <div className="top_brand_title">
            <HandySvg src={top_brand_title} width="12" height="93" />
            <div className="top_brand_text">
              <h1 className="tb_large">THE BRAND</h1>
              <h2 className="tb_small">
                OF LUXERIOUS
                <span className="tb_small tb_small__highlighted">FASHION</span>
              </h2>
            </div>
          </div>
        </div>
        <div className="offers center">
          <div className="small_offers">
            <div className="offer offer__for_women">
              <h4 className="offer_subtitle">30% OFF</h4>
              <h3 className="offer_title">FOR WOMEN</h3>
            </div>
            <div className="offer offer__for_men">
              <h4 className="offer_subtitle">HOT DEAL</h4>
              <h3 className="offer_title">FOR MEN</h3>
            </div>
            <div className="offer offer__for_kids">
              <h4 className="offer_subtitle">NEW ARRIVALS</h4>
              <h3 className="offer_title">FOR KIDS</h3>
            </div>
          </div>
          <div className="offer offer__accesories">
            <h4 className="offer_subtitle">LUXIROUS & TRENDY</h4>
            <h3 className="offer_title">ACCESORIES</h3>
          </div>
        </div>
        <div className="products center">
          <p className="products_title">Fetured Items</p>
          <p className="products_text">
            Shop for items based on what we featured in this week
          </p>
          <div className="product_items">
            {products.slice(6).map((product) => (
              <ProductItem
                key={product.id}
                id={product.id}
                title={product.title}
                description={product.description}
                price={product.price}
                imageUrl={product.imageUrl}
              />
            ))}
          </div>
          <div className="products_button">
            <Link className="browse_button" to="/catalog">
              Browse All Product
            </Link>
          </div>
        </div>
        <section>
          <div className="features center">
            <figure>
              <div className="feature">
                <FeatureDelivery_icon className="feature_icon" />
                <h4 className="feature_title">Free Delivery</h4>
                <p className="feature_description">
                  Worldwide delivery on all. Authorit tively morph
                  next-generation innov tion with extensive models.
                </p>
              </div>
            </figure>
            <figure>
              <div className="feature">
                <FeatureDiscount_icon className="feature_icon" />
                <h4 className="feature_title">Sales & discounts</h4>
                <p className="feature_description">
                  Worldwide delivery on all. Authorit tively morph
                  next-generation innov tion with extensive models.
                </p>
              </div>
            </figure>
            <figure>
              <div className="feature">
                <FeatureQuality_icon className="feature_icon" />
                <h4 className="feature_title">Quality assurance</h4>
                <p className="feature_description">
                  Worldwide delivery on all. Authorit tively morph
                  next-generation innov tion with extensive models.
                </p>
              </div>
            </figure>
          </div>
        </section>
      </content>
      <Footer />
    </div>
  );
}

export default MainPage;
