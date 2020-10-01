import React from "react";
import Footer from "./Footer";
import Header from "./Header";

const FrontendLayout = props => {
  return (
    <div>
      <Header />
      <div>{props.children}</div>
      <Footer />
    </div>
  );
};

export default FrontendLayout;
