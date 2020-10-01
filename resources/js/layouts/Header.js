import React, { Component } from "react";
import TekyLogo from "../utils/TekyLogo";
import MyNavLink from "../utils/MyNavLink";

class Header extends Component {
  state = {
    headerShow: false,
    showMenu: true,
    navItems: [
      { type: "text", text: "Trang chủ", linkTo: "/", items: [] },
      {
        type: "dropdown",
        text: "Khóa học",
        linkTo: "/khoa-hoc",
        items: [
          { text: "Khóa học lập trình robot", linkTo: "/robot" },
          { text: "Lap trinh web", linkTo: "/robot" }
        ]
      },
      {
        type: "dropdown",
        text: "Tài liệu miễn phí",
        linkTo: "/tai-lieu-mien-phi",
        items: [
          { text: "Lap trinh web", linkTo: "/robot" },
          { text: "Lap trinh web", linkTo: "/robot" }
        ]
      },
      {
        type: "text",
        text: "Đội ngũ giáo viên",
        linkTo: "/giao-vien",
        items: []
      },
      { type: "text", text: "Liên hệ", linkTo: "/contact-us", items: [] },
      { type: "text", text: "Đăng nhập", linkTo: "/dangnhap", items: [] }
    ]
  };

  componentDidMount() {
    window.addEventListener("scroll", this.handleScroll);
  }

  handleScroll = () => {
    if (window.scrollY > 0) {
      this.setState({ headerShow: true });
    } else {
      this.setState({ headerShow: false });
    }
  };

  toggleMenu = () => {
    const display = this.state.showMenu ? "block" : "none";
    document.querySelector(".navi").style.display = display;
    this.setState({ showMenu: !this.state.showMenu });
  };

  render() {
    return (
      <div className="header">
        <div
          className="wrapper"
          style={{
            background: `${this.state.headerShow ? "#5dc2a7" : "transparent"}`
          }}
        >
          <div className="a-menu" onClick={this.toggleMenu}>
            <img src="/assets/menualt.png" alt="menu" />
          </div>
          <TekyLogo addStyle={{ marginLeft: "40px" }} link linkTo="/" />
          <ul className="navi">
            {this.state.navItems.map((item, i) => (
              <MyNavLink {...item} key={i} />
            ))}
          </ul>
        </div>
      </div>
    );
  }
}

export default Header;
