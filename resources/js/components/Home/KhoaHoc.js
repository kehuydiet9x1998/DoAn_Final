import React, { Component } from "react";
import KhoaHocCard from "../../utils/KhoaHocCard";
import TopContent from "../../utils/TopContent";

class KhoaHoc extends Component {
  state = {
    dskhoahoc: [
      {
        anh: "/assets/images/khoahoc1.png",
        duongdan: "/",
        ten: "Mầm non Lập trình với Scratch Jr. và Maker Empire",
        gia: "180.000 đ"
      },
      {
        anh: "/assets/images/khoahoc2.png",
        duongdan: "/",
        ten: "Mầm non Lập trình với Scratch Jr. và Maker Empire",
        gia: "180.000 đ"
      },
      {
        anh: "/assets/images/khoahoc3.png",
        duongdan: "/",
        ten: "Mầm non Lập trình với Scratch Jr. và Maker Empire",
        gia: "180.000 đ"
      },
      {
        anh: "/assets/images/khoahoc4.png",
        duongdan: "/",
        ten: "Mầm non Lập trình với Scratch Jr. và Maker Empire",
        gia: "180.000 đ"
      },
      {
        anh: "/assets/images/khoahoc5.png",
        duongdan: "/",
        ten: "Mầm non Lập trình với Scratch Jr. và Maker Empire",
        gia: "180.000 đ"
      },
      {
        anh: "/assets/images/khoahoc6.png",
        duongdan: "/",
        ten: "Mầm non Lập trình với Scratch Jr. và Maker Empire",
        gia: "180.000 đ"
      },
      {
        anh: "/assets/images/khoahoc7.png",
        duongdan: "/",
        ten: "Mầm non Lập trình với Scratch Jr. và Maker Empire",
        gia: "180.000 đ"
      },
      {
        anh: "/assets/images/khoahoc8.png",
        duongdan: "/",
        ten: "Mầm non Lập trình với Scratch Jr. và Maker Empire",
        gia: "180.000 đ"
      }
    ]
  };

  render() {
    return (
      <div>
        <TopContent
          firstLine="CÔNG NGHỆ DẪN ĐẦU - BÙNG NỔ TƯƠNG LAI
"
          SecondLine="12 Khoá học trực tuyến
"
        />
        <div className="container">
          <div className="bp-element bp-element-list-courses layout-grid">
            <div className="row">
              {this.state.dskhoahoc.map((item, i) => (
                <KhoaHocCard
                  anh={item.anh}
                  key={i}
                  duongdan={item.duongdan}
                  ten={item.ten}
                  gia={item.gia}
                />
              ))}
            </div>
          </div>
        </div>
      </div>
    );
  }
}

export default KhoaHoc;
