import React from "react";
import TekyLogo from "../utils/TekyLogo";

const Footer = () => {
  return (
    <div>
      <div className="home_footer" id="bt-block">
        <div className="footer_wrapper">
          <div className="col-3" style={{ padding: "0 35px 0 0" }}>
            <TekyLogo link linkTo="/" />
            <p className="intro">
              Đội ngũ giáo viên của TEKY là những người ưu tú nhất trong ngành
              công nghệ thông tin, có khả năng truyền cảm hứng tuyệt vời và ươm
              mầm tài năng trẻ.
            </p>
            <ul className="social-ul">
              <li>
                <a
                  rel="noopener noreferrer"
                  target="_blank"
                  href="https://www.facebook.com/tekyacademy"
                >
                  <i className="icon icon-facebook" />
                </a>
              </li>
              <li>
                <a
                  rel="noopener noreferrer"
                  target="_blank"
                  href="https://www.youtube.com/channel/UCQVGBz5ybBSIVJaL1l_XCAQ"
                >
                  <i className="icon icon-youtube" />
                </a>
              </li>
              <li>
                <a
                  rel="noopener noreferrer"
                  target="_blank"
                  href="https://www.instagram.com/trungtamanhnguathena/"
                >
                  <i className="icon icon-insta" />
                </a>
              </li>
            </ul>
          </div>
          <div className="col-3" style={{ padding: "0 0 0 10px" }}>
            <ul>
              <li className="top-li">Giờ hoạt động</li>
              <li>
                <a target="_blank" rel="noopener noreferrer" href="/">
                  THỨ 3 đến THỨ 6: 08:30 - 20:30
                </a>
              </li>
              <li>
                <a target="_blank" rel="noopener noreferrer" href="/">
                  THỨ 7 - Chủ Nhật: 08:30 - 20:30
                </a>
              </li>

              <li>
                <a target="_blank" href="/">
                  THỨ 2: Không làm việc
                </a>
              </li>
            </ul>
          </div>
          <div className="col-3" style={{ padding: "0 0 0 55px" }}>
            <ul className="info-ft">
              <li className="top-li">về teky</li>
              <li>
                <a
                  rel="noopener noreferrer"
                  target="_blank"
                  href="https://anhnguathena.vn/cau-hoi-thuong-gap-id462"
                >
                  › Báo chính nói gì về Teky
                </a>
              </li>
              <li>
                <a
                  rel="noopener noreferrer"
                  target="_blank"
                  href="https://anhnguathena.vn/huong-dan-dang-ky-hoc-id457"
                >
                  › Đội ngũ giảng viên
                </a>
              </li>
              <li>
                <a
                  rel="noopener noreferrer"
                  target="_blank"
                  href="https://anhnguathena.vn/huong-dan-thanh-toan-id452"
                >
                  › Đội ngũ lãnh đạo
                </a>
              </li>
              <li>
                <a
                  rel="noopener noreferrer"
                  target="_blank"
                  href="https://anhnguathena.vn/quy-dinh-trung-tam-id459"
                >
                  › Giải thưởng đã đạt được
                </a>
              </li>
              <li>
                <a rel="noopener noreferrer" target="_blank" href="/">
                  › Sơ đồ đường đi
                </a>
              </li>
            </ul>
          </div>
          <div className="col-3" style={{ padding: "0 0 0 20px" }}>
            <ul className="info-ft">
              <div>
                <li className="top-li">Fanpage</li>
                <div
                  className="fb-page"
                  data-href="https://www.facebook.com/tekyacademy"
                  data-tabs="timeline"
                  data-width={300}
                  data-height={200}
                  data-small-header="false"
                  data-adapt-container-width="true"
                  data-hide-cover="false"
                  data-show-facepile="true"
                >
                  <blockquote
                    cite="https://www.facebook.com/tekyacademy"
                    className="fb-xfbml-parse-ignore"
                  >
                    <a href="https://www.facebook.com/tekyacademy">
                      TEKY Học Viện Sáng Tạo Công Nghệ
                    </a>
                  </blockquote>
                </div>
              </div>
            </ul>
          </div>
          <p className="bt-p">Develop by Kim Anh team</p>
        </div>
      </div>
      ;
    </div>
  );
};

export default Footer;
