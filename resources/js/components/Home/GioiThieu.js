import React, { Component } from "react";
import TopContent from "../../utils/TopContent";

class GioiThieu extends Component {
  state = {
    gioithieu: [
      {
        image: "/assets/images/gioithieu_1.jpg",
        content:
          "Học Online trực tiếp với Giáo viên, 1 lớp tối đa 6 học sinh; Đội ngũ giáo viên giỏi chuyên môn và tâm huyết, sử dụng thành thạo công nghệ trực tuyến để truyền đạt kiến thức hiệu quả & truyền cảm hứng cho học sinh."
      },
      {
        image: "/assets/images/gioithieu_2.jpg",
        content:
          "Học với các công cụ công nghệ và thiết bị học tập hàng đầu thế giới từ Mỹ, Trung Quốc, Hàn Quốc. Nội dung kiến thức theo chuẩn CSTA & ETS K12 của Mỹ cho nhiều độ tuổi khác nhau. Giải thưởng đổi mới giáo dục châu Á - EduTech Asia Award. "
      },
      {
        image: "/assets/images/gioithieu_3.jpg",
        content:
          "Nền tảng công nghệ học trực tuyến với nhiều tính năng vượt trội, tương tác đa chiều, tăng trải nghiệm thú vị và gắn kết học sinh, xoá nhà ranh giới lớp Online và Offline. Giờ học linh động từ 8:30 tới 21:30 - Không đòi hỏi máy tính cấu hình cao. "
      }
    ]
  };

  render() {
    return (
      <div className="container">
        <TopContent
          firstLine="LỰA CHỌN HÀNG ĐẦU CỦA 20.000 HỌC SINH & TRÊN 100 TRƯỜNG HỌC
"
          SecondLine="Vì sao chọn chúng tôi?"
        ></TopContent>
        <div className="row">
          {this.state.gioithieu.map((item, i) => (
            <div className="col-md-4">
              <div className="content">
                <img src={item.image} alt="" />
                <div
                  className="text"
                  style={{ textAlign: "left", color: "black", marginTop: 20 }}
                >
                  <h6
                    style={{
                      fontSize: "0.9rem",
                      color: "black",
                      textAlign: "justify"
                    }}
                  >
                    {item.content}
                  </h6>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    );
  }
}

export default GioiThieu;
