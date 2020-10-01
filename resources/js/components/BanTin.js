import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Bantin extends Component {
  render() {
    return <p>Ban tin neff</p>;
  }
}

if (document.getElementById("bantin")) {
  ReactDOM.render(<Bantin />, document.getElementById("bantin"));
}
