import React, { Component } from "react";
import KhoaHoc from "./KhoaHoc";
import GioiThieu from "./GioiThieu";
import HomeSlider from "./HomeSlider";
import LoTrinhHoc from "./LoTrinhHoc";
import QuangCao from "./QuangCao";
import GiaiThuong from "./GiaiThuong";
import DangKy from "./DangKy";
import FrontendLayout from "../../layouts";
import ReactDOM from "react-dom";

class Home extends Component {
  render() {
    return (
      <FrontendLayout>
        <HomeSlider />
        <GioiThieu />
        <QuangCao />
        <LoTrinhHoc />
        <KhoaHoc />
        <GiaiThuong />
        <DangKy />
      </FrontendLayout>
    );
  }
}

export default Home;

if (document.getElementById("home")) {
  console.log("render");
  ReactDOM.render(<Home />, document.getElementById("home"));
}
