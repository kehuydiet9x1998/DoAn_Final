import { Button } from "@material-ui/core";
import React, { Component } from "react";
import TopContent from "../../utils/TopContent";

class QuangCao extends Component {
  render() {
    return (
      <div>
        <TopContent
          firstLine="thời đại 4.0"
          SecondLine="trẻ em phải biết lập trình"
        />
        <div className="container" style={{ textAlign: "center" }}>
          <div
            style={{
              display: "flex",
              justifyContent: "space-between",
              background: "light-gray",
            }}
          >
            <iframe
              title="{1}"
              width={550}
              height={315}
              src="https://www.youtube.com/embed/1jsJHvAXqgQ"
              frameBorder={0}
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowFullScreen
            />
            <iframe
              title="{2}"
              width={550}
              height={315}
              src="https://www.youtube.com/embed/q6QbqIs6ll8"
              frameBorder={0}
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowFullScreen
            />
          </div>
          <Button
            variant="contained"
            href="#contained-buttons"
            style={{
              backgroundColor: "#5DC2A7",
              borderRadius: "50px 50px 50px 50px",
              fontWeight: 700,
              color: "white",
              margin: "20px 0",
            }}
          >
            ĐĂNG KÝ NGAY HÔM NAY
          </Button>
        </div>
      </div>
    );
  }
}

export default QuangCao;
