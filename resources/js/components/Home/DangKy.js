import React, { Component } from "react";

class DangKy extends Component {
  state = {
    uudai: [
      "Giảm 30% cho lần đăng ký đầu tiên.",
      "Miễn phí một khóa học trải nghiệm tùy chọn tại TEKY"
    ],
    ngayketthuc: ""
  };

  render() {
    return (
      <section id="ss10">
        <div
          className="container"
          style={{ marginTop: "-60px", position: "relative", zIndex: 2 }}
        >
          <div
            className="toptext"
            style={{ paddingTop: 90, paddingBottom: 10 }}
          >
            <h3 style={{ color: "#2e487b" }}>
              <b> Ưu đãi đặc biệt </b>
            </h3>
          </div>
          <div className="row">
            <div className="col-md-1" />
            <div className="col-md-6 col-xs-12" style={{ marginBottom: 15 }}>
              <div className="row">
                <div className="col-md-12 col-xs-12">
                  <div className="content" style={{ color: "#085784" }}>
                    <ul style={{ textAlign: "left", marginBottom: 30 }}>
                      {this.state.uudai.map((item, i) => (
                        <li className="why">
                          <img
                            className="sao"
                            src="/assets/images/sao.png"
                            alt=""
                          />
                          <h6 style={{ marginLeft: 10, fontSize: "1rem" }}>
                            {item}
                          </h6>
                        </li>
                      ))}
                    </ul>
                  </div>
                </div>
                <div
                  className="col-md-12"
                  style={{ textAlign: "left", marginBottom: 10 }}
                >
                  <div>
                    <h5 style={{ color: "#2d477b" }}>Thời gian ưu đãi còn</h5>
                  </div>
                </div>
                <div
                  className="col-md-12 col-xs-12"
                  style={{ marginBottom: 35, display: "contents" }}
                >
                  <div
                    className="col-md-3 col-xs-3"
                    style={{
                      msFlex: "0 0 25%",
                      flex: "0 0 25%",
                      maxWidth: "25%"
                    }}
                  >
                    <div
                      className="tivi"
                      style={{
                        height: 70,
                        width: 70,
                        borderRadius: 10,
                        background: "#326bfc"
                      }}
                    >
                      <span
                        className="form-control oinput"
                        style={{
                          borderRadius: 10,
                          background: "#326afc",
                          border: "none",
                          color: "white",
                          fontSize: 30,
                          padding: 0
                        }}
                        id="ngay"
                      >
                        <b style={{ marginLeft: "-3px" }}> 0 </b>
                      </span>
                      <b style={{ color: "white" }}> ngày </b>
                    </div>
                  </div>
                  <div
                    className="col-md-3 col-xs-3"
                    style={{
                      msFlex: "0 0 25%",
                      flex: "0 0 25%",
                      maxWidth: "25%"
                    }}
                  >
                    <div
                      className="tivi"
                      style={{
                        height: 70,
                        width: 70,
                        borderRadius: 10,
                        background: "#326bfc"
                      }}
                    >
                      <span
                        className="form-control oinput"
                        style={{
                          borderRadius: 10,
                          background: "#326afc",
                          border: "none",
                          color: "white",
                          fontSize: 30,
                          padding: 0
                        }}
                        id="gio"
                      >
                        21
                      </span>
                      <b style={{ color: "white" }}> giờ</b>
                    </div>
                  </div>
                  <div
                    className="col-md-3 col-xs-3"
                    style={{
                      msFlex: "0 0 25%",
                      flex: "0 0 25%",
                      maxWidth: "25%"
                    }}
                  >
                    <div
                      className="tivi"
                      style={{
                        height: 70,
                        width: 70,
                        borderRadius: 10,
                        background: "#326bfc"
                      }}
                    >
                      <span
                        className="form-control oinput"
                        style={{
                          borderRadius: 10,
                          background: "#326afc",
                          border: "none",
                          color: "white",
                          fontSize: 30,
                          padding: 0
                        }}
                        id="phut"
                      >
                        22
                      </span>
                      <b style={{ color: "white" }}> phút</b>
                    </div>
                  </div>
                  <div
                    className="col-md-3 col-xs-3"
                    style={{
                      msFlex: "0 0 25%",
                      flex: "0 0 25%",
                      maxWidth: "25%"
                    }}
                  >
                    <div
                      className="tivi"
                      style={{
                        height: 70,
                        width: 70,
                        borderRadius: 10,
                        background: "#326bfc"
                      }}
                    >
                      <span
                        className="form-control oinput"
                        style={{
                          borderRadius: 10,
                          background: "#326afc",
                          border: "none",
                          color: "white",
                          fontSize: 30,
                          padding: 0
                        }}
                        id="giay"
                      >
                        14
                      </span>
                      <b style={{ color: "white" }}> giây</b>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-md-5 col-xs-12" style={{ textAlign: "center" }}>
              <form
                className="formdk"
                id="registerform"
                noValidate="novalidate"
              >
                <div
                  className="toptextform"
                  style={{ paddingTop: 20, paddingBottom: 10 }}
                >
                  <h4 className="d-none d-sm-block" style={{ color: "white" }}>
                    <b> ĐĂNG KÝ NHẬN ƯU ĐÃI </b>
                  </h4>
                  <h4
                    className="d-block d-sm-none"
                    style={{ color: "white", fontSize: "1.2rem" }}
                  >
                    <b> ĐĂNG KÝ NHẬN ƯU ĐÃI </b>
                  </h4>
                </div>
                <div className="boxx" style={{ width: "90%", margin: "auto" }}>
                  <div className="controls">
                    <input
                      type="text"
                      placeholder="Tên của bạn"
                      className="form-control"
                      name="name"
                    />
                  </div>
                  <div className="controls">
                    <input
                      type="tel"
                      placeholder="Số điện thoại"
                      className="form-control"
                      name="phone"
                    />
                  </div>
                  <div className="controls">
                    <input
                      type="text"
                      placeholder="Địa chỉ"
                      className="form-control"
                      name="street"
                    />
                  </div>
                  <div className="controls">
                    <input
                      type="text"
                      placeholder="Tuổi của bé"
                      className="form-control"
                      name="lpinput1"
                    />
                  </div>
                  <div className="controls">
                    <select
                      tabIndex={10}
                      style={{
                        width: "100%",
                        height: 35,
                        borderRadius: 10,
                        color: "#6c747d"
                      }}
                      name="khoahoc"
                      className
                      data-selected
                    >
                      <option value>Lựa chọn khóa học</option>
                      <option value="">Lập trình Robot</option>
                      <option value="">Lập trình Robot</option>
                      <option value="">Lập trình Robot</option>
                      <option value="">Lập trình Robot</option>
                    </select>
                  </div>
                </div>

                <input
                  type="hidden"
                  id="utm_source"
                  name="utm_source"
                  defaultValue="Google_Search7_Thaivh_TuKhoa_TiengAnhChoBe"
                />
                <input
                  type="hidden"
                  id="utm_campaign"
                  name="utm_campaign"
                  defaultValue
                />
                <input
                  type="hidden"
                  name="ngaythang"
                  defaultValue="2020-09-15 03:43:38"
                />
                <button className="yellow" type="submit" id="dangky">
                  <div>
                    <h5 style={{ padding: 5 }}>
                      <b id="btnText">Đăng ký ngay!</b>
                    </h5>
                  </div>
                </button>
              </form>
            </div>
          </div>
        </div>
        <div className="bottom2" style={{ position: "relative", zIndex: 2 }} />
      </section>
    );
  }
}

export default DangKy;
