import React, { Component } from "react";
import TopContent from "../../utils/TopContent";

class LoTrinhHoc extends Component {
  render() {
    return (
      <div
        style={{
          textAlign: "center"
        }}
      >
        <TopContent
          firstLine="Lộ trình học được xây dựng kỹ lưỡng"
          SecondLine="Lộ trình học"
        />
        <img src="/assets/images/lotrinhhoc.png" alt="" />
      </div>
    );
  }
}

export default LoTrinhHoc;
