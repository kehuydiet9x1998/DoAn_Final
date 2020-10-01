import React, { Component } from "react";

class MyNavLink extends Component {
  render() {
    if (this.props.type === "dropdown") {
      return (
        <li>
          <a className="has_menu" href={this.props.linkTo}>
            {this.props.text}
          </a>
          <ul className="navi-1">
            {this.props.items.map((item, i) => (
              <li key={i}>
                <a href={item.linkTo}>{item.text}</a>
              </li>
            ))}
          </ul>
        </li>
      );
    } else {
      return (
        <li>
          <a href={this.props.linkTo}>{this.props.text}</a>
        </li>
      );
    }
  }
}

export default MyNavLink;
