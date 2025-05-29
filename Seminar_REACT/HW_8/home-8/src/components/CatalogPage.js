import React, { useState } from "react";

import Header from "./Header";
import Footer from "./Footer";
import ProductItem from "./ProductItem";

import { ReactComponent as FilterIcon } from "../img/filter_icon.svg";

import { HandySvg } from "handy-svg";
import drop_down_arrow from "../img/drop-down_arrow.svg";

import products from "./productsData"; // Импорт массива продуктов

// Функция для реализации пагинации карточек товаров (как было задумано в макете)
function pagination(array, pageSize, pageNumber) {
  return array.slice((pageNumber - 1) * pageSize, pageNumber * pageSize);
}

function CatalogPage() {
  // Состояние для хранения текущей страницы
  const [currentPage, setCurrentPage] = useState(1);

  // Количество товаров на одной странице согласно макету
  const pageSize = 9;

  // Состояние для хранения выбранных размеров товаров (для реализации сортировки)
  const [selectedSizes, setSelectedSizes] = useState([]);

  // Функция установки текущей страницы
  const handlePageChange = (pageNumber) => {
    setCurrentPage(pageNumber);
  };

  // Функция обработки изменения выбранных размеров
  const handleSizeChange = (size) => {
    // Если размер выбран - удаляем его из состояния выбранных размеров
    if (selectedSizes.includes(size)) {
      setSelectedSizes(selectedSizes.filter((s) => s !== size));
    } else {
      // Если размер не был выбран - добавляем его для сортировки
      setSelectedSizes([...selectedSizes, size]);
    }
  };

  // Формирование набора карточек для отображения на текущей странице
  const displayedProducts = pagination(
    products.filter(
      (product) =>
        // Фильтрация по размерам: отображаем только те товары, которые имеют хотя бы один из выбранных размеров
        selectedSizes.length === 0 || selectedSizes.includes(product.size)
    ),
    pageSize,
    currentPage
  );

  // Определение количества отображаемых страниц
  const totalPages = Math.ceil(
    products.filter(
      (product) =>
        selectedSizes.length === 0 || selectedSizes.includes(product.size)
    ).length / pageSize
  );

  return (
    <div className="box-content">
      <Header />
      <content className="content">
        <div className="head center">
          <h1 className="head_title">NEW ARRIVALS</h1>
          <nav className="breadcrums">
            <a href="/" className="breadcrums__link">
              HOME
            </a>
            <a href="#" className="breadcrums__link">
              MEN
            </a>
            <a
              href="#"
              className="breadcrums__link breadcrums__link__highlight"
            >
              NEW ARRIVALS
            </a>
          </nav>
        </div>
        <div className="filter-sorter center">
          <div className="filter-block">
            <details className="filter">
              <summary className="filter__summary">
                <span className="filter__title">FILTER</span>
                <FilterIcon className="filter__icon" />
              </summary>
              <div className="filter__content">
                <details open className="filter__item">
                  <summary className="filter__subtitle">CATEGORY</summary>
                  <div className="filter__link-box">
                    <a href="#" className="filter__link">
                      Accessories
                    </a>
                    <a href="#" className="filter__link">
                      Bags
                    </a>
                    <a href="#" className="filter__link">
                      Denim
                    </a>
                    <a href="#" className="filter__link">
                      Hoodies & Sweatshirts
                    </a>
                    <a href="#" className="filter__link">
                      Jackets & Coats
                    </a>
                    <a href="#" className="filter__link">
                      Polos
                    </a>
                    <a href="#" className="filter__link">
                      Shirts
                    </a>
                    <a href="#" className="filter__link">
                      Shoes
                    </a>
                    <a href="#" className="filter__link">
                      Sweaters & Knits
                    </a>
                    <a href="#" className="filter__link">
                      T-Shirts
                    </a>
                    <a href="#" className="filter__link">
                      Tanks
                    </a>
                  </div>
                </details>
                <details className="filter__item">
                  <summary className="filter__subtitle">BRAND</summary>
                  <div className="filter__link-box">
                    <a href="#" className="filter__link">
                      Some Brand
                    </a>
                    <a href="#" className="filter__link">
                      Some Brand
                    </a>
                    <a href="#" className="filter__link">
                      Some Brand
                    </a>
                  </div>
                </details>
                <details className="filter__item">
                  <summary className="filter__subtitle">DESIGNER</summary>
                  <div className="filter__link-box">
                    <a href="#" className="filter__link">
                      Some Designer
                    </a>
                    <a href="#" className="filter__link">
                      Some Designer
                    </a>
                    <a href="#" className="filter__link">
                      Some Designer
                    </a>
                  </div>
                </details>
              </div>
            </details>
          </div>
          <div className="sorter">
            <details className="sorter__details">
              <summary className="sorter__summary">
                <span className="sorter__title">TRENDING NOW</span>
                <HandySvg src={drop_down_arrow} width="11" height="6" />
              </summary>
            </details>
            <details className="sorter__details">
              <summary className="sorter__summary">
                <span className="sorter__title">SIZE</span>
                <HandySvg src={drop_down_arrow} width="11" height="6" />
              </summary>
              <div className="sorter__content">
                <div className="sorter__item">
                  <input
                    type="checkbox"
                    className="sorter__checkbox"
                    id="sorter__size-XS"
                    defaultChecked="true"
                    onChange={() => handleSizeChange("XS")}
                    checked={selectedSizes.includes("XS")}
                  />
                  <label className="sorter__label" htmlFor="sorter__size-XS">
                    XS
                  </label>
                </div>
                <div className="sorter__item">
                  <input
                    type="checkbox"
                    className="sorter__checkbox"
                    id="sorter__size-S"
                    defaultChecked="true"
                    onChange={() => handleSizeChange("S")}
                    checked={selectedSizes.includes("S")}
                  />
                  <label className="sorter__label" htmlFor="sorter__size-S">
                    S
                  </label>
                </div>
                <div className="sorter__item">
                  <input
                    type="checkbox"
                    className="sorter__checkbox"
                    id="sorter__size-M"
                    defaultChecked="true"
                    onChange={() => handleSizeChange("M")}
                    checked={selectedSizes.includes("M")}
                  />
                  <label className="sorter__label" htmlFor="sorter__size-M">
                    M
                  </label>
                </div>
                <div className="sorter__item">
                  <input
                    type="checkbox"
                    className="sorter__checkbox"
                    id="sorter__size-L"
                    defaultChecked="true"
                    onChange={() => handleSizeChange("L")}
                    checked={selectedSizes.includes("L")}
                  />
                  <label className="sorter__label" htmlFor="sorter__size-L">
                    L
                  </label>
                </div>
              </div>
            </details>
            <details className="sorter__details">
              <summary className="sorter__summary">
                <span className="sorter__title">PRICE</span>
                <HandySvg src={drop_down_arrow} width="11" height="6" />
              </summary>
            </details>
          </div>
        </div>
        <div className="products spec_catalog center">
          <div className="product_items product_items_spec">
            {displayedProducts.map((product) => (
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

          <div className="catalog_nav">
            <nav className="catalog_nav__box">
              <div className="catalog_nav__pagination">
                {Array.from(
                  { length: totalPages },
                  (_, index) => (
                    <a
                      key={index}
                      onClick={() => handlePageChange(index + 1)}
                      className="catalog_nav__link"
                    >
                      {index + 1}
                    </a>
                  )
                )}
              </div>
            </nav>
          </div>
        </div>
      </content>
      <Footer />
    </div>
  );
}

export default CatalogPage;
