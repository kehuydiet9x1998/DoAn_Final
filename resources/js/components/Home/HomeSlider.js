import React from "react";
import Button from "@material-ui/core/Button";
import Slider from "react-slick";
import "slick-carousel/slick/slick-theme.css";
import "slick-carousel/slick/slick.css";
// import MyButton from "../utils/Button";

const HomeSlider = props => {
  const slides = [
    {
      img: "/assets/sliders/slider_1.jpg",
      lineOne: `Giảng viên chất lượng`,
      lineTwo: `Đội ngũ giáo viên \nchuyên môn và tâm huyết`,
      linkTitle: "Đăng ký học thử miễn phí",
      linkTo: "/"
    },
    {
      img: "/assets/sliders/slider_2.jpg",
      lineOne: `Chương trình đào tạo \nđạt chuẩn Mỹ`,
      lineTwo: `Nội dung kiến thức theo chuẩn \nCSTA và EST12 của Mỹ`,
      linkTitle: "Đăng ký học thử miễn phí",
      linkTo: "/"
    },
    {
      img: "https://teky.edu.vn/wp-content/uploads/2019/11/1-1.jpg",
      lineOne: `Nền tảng online \nHọc công nghệ cho trẻ em`,
      lineTwo: `Duy nhất tại Việt Nam \nTrên 20.000 học sinh trên toàn quốc`,
      linkTitle: "Đăng ký học thử miễn phí",
      linkTo: "/"
    }
  ];

  const settings = {
    dot: false,
    inifinite: true,
    speed: 100,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false
  };

  const generateSlides = () => {
    return slides
      ? slides.map((item, i) => {
          return (
            <div key={i}>
              <div
                className="featured_image"
                style={{
                  background: `url(${item.img})`,
                  height: `${window.innerHeight}px`,
                  backgroundSize: "100% 100%"
                  // width: "100%",
                }}
              >
                <div className="featured_action">
                  <div className="tag title">{item.lineOne}</div>
                  <div className="tag low_title">{item.lineTwo}</div>
                  <div>
                    <Button
                      variant="outlined"
                      color="primary"
                      style={{
                        backgroundColor: "rgba(0, 0, 0, 0)",
                        fontFamily: "Montserrat",
                        outline: " currentcolor none medium",
                        boxShadow: "none",
                        lineHeight: "44px",
                        letterSpacing: "0px",
                        fontWeight: 700,
                        fontSize: "15px",
                        borderColor: "rgb(255, 255, 255)",
                        borderStyle: "solid",
                        borderWidth: "1px",
                        margin: "20px",
                        borderRadius: " 30px",
                        padding: "0px 39px",
                        color: "rgb(255, 255, 255)",
                        textDecoration: "none",
                        whiteSpace: "nowrap",
                        width: "auto",
                        height: "auto",
                        opacity: 1,
                        transform: "translate3d(0px, 0px, 0px)",
                        transformOrigin: "50% 50% 0px"
                      }}
                    >
                      {item.linkTitle}
                    </Button>
                  </div>
                </div>
              </div>
            </div>
          );
        })
      : null;
  };

  return (
    <div className="featured_container">
      <Slider {...settings}>{generateSlides()}</Slider>
      <div className="ss1bottom" style={{ marginLeft: "-3px" }} />
    </div>
  );
};

export default HomeSlider;
