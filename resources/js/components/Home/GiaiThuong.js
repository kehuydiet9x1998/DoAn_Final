import React, { Component } from "react";
import TopContent from "../../utils/TopContent";

class GiaiThuong extends Component {
  state = {
    giaithuong: [
      {
        anh: "/assets/images/giaithuong1.png",
        ten: "SCHOOL OF THE FUTURE – WEF 2020",
        noidung:
          "Teky được bình chọn là một trong 14 mô hình giáo dục đổi mới toàn cầu tiêu biểu tại Diễn đàn kinh tế thế giới WEF 2020 tại Thụy Sĩ"
      },
      {
        anh: "/assets/images/giaithuong2.png",
        ten: "ASEAN BUSINESS AWARDS 2019",
        noidung:
          " Được vinh danh tại hạng mục Startup and Innovation Driven Entrepreneur dành cho các doanh nghiệp tốt nhất tại Đông Nam Á"
      },
      {
        anh: "/assets/images/giaithuong3.png",
        ten: "SCHOOL OF THE FUTURE – WEF 2020",
        noidung:
          "Teky được bình chọn là một trong 14 mô hình giáo dục đổi mới toàn cầu tiêu biểu tại Diễn đàn kinh tế thế giới WEF 2020 tại Thụy Sĩ"
      },
      {
        anh: "/assets/images/giaithuong4.png",
        ten: "SCHOOL OF THE FUTURE – WEF 2020",
        noidung:
          "Teky được bình chọn là một trong 14 mô hình giáo dục đổi mới toàn cầu tiêu biểu tại Diễn đàn kinh tế thế giới WEF 2020 tại Thụy Sĩ"
      },
      {
        anh: "/assets/images/giaithuong5.png",
        ten: "SCHOOL OF THE FUTURE – WEF 2020",
        noidung:
          "Teky được bình chọn là một trong 14 mô hình giáo dục đổi mới toàn cầu tiêu biểu tại Diễn đàn kinh tế thế giới WEF 2020 tại Thụy Sĩ"
      },
      {
        anh: "/assets/images/giaithuong6.png",
        ten: "SCHOOL OF THE FUTURE – WEF 2020",
        noidung:
          "Teky được bình chọn là một trong 14 mô hình giáo dục đổi mới toàn cầu tiêu biểu tại Diễn đàn kinh tế thế giới WEF 2020 tại Thụy Sĩ"
      },
      {
        anh: "/assets/images/giaithuong7.png",
        ten: "SCHOOL OF THE FUTURE – WEF 2020",
        noidung:
          "Teky được bình chọn là một trong 14 mô hình giáo dục đổi mới toàn cầu tiêu biểu tại Diễn đàn kinh tế thế giới WEF 2020 tại Thụy Sĩ"
      },
      {
        anh: "/assets/images/giaithuong8.png",
        ten: "SCHOOL OF THE FUTURE – WEF 2020",
        noidung:
          "Teky được bình chọn là một trong 14 mô hình giáo dục đổi mới toàn cầu tiêu biểu tại Diễn đàn kinh tế thế giới WEF 2020 tại Thụy Sĩ"
      }
    ]
  };

  render() {
    return (
      <div>
        <TopContent
          firstLine="Thành tích
"
          SecondLine="Giải thưởng đã đạt được
"
        />
        <div className="container">
          <div className="row">
            {this.state.giaithuong.map((item, i) => (
              <div className="col-lg-3 col-md-6" key={i}>
                <div className="giaithuong">
                  <img src={item.anh} alt="" />
                  <h3 style={{ textTransform: "uppercase" }}>{item.ten}</h3>
                  <p>{item.noidung}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>
    );
  }
}

export default GiaiThuong;
