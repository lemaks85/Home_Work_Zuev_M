import "./style.scss";
import { Helmet } from "react-helmet";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";

import MainPage from "./components/MainPage";
import CatalogPage from "./components/CatalogPage";
import CartPage from "./components/CartPage";
import RegistrationPage from "./components/RegistrationPage";


function App() {
  return (
    <>
      <Helmet>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap"
          rel="stylesheet"
        />
      </Helmet>
      <Router>
        <Routes>
          <Route path="/" element={<MainPage />} exact />
          <Route path="/catalog" element={<CatalogPage />} />
          <Route path="/cart" element={<CartPage />} />
          <Route path="/registration" element={<RegistrationPage />} />
        </Routes>
      </Router>
    </>
  );
}

export default App;