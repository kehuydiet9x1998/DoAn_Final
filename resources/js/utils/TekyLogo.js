import React from "react";

const TekyLogo = props => {
  const template = (
    <div className="width-logo sm-logo">
      <img
        className="logo"
        src="/assets/images/TEKY-Logo-W.png"
        alt="TEKY Online"
        style={{ ...props.addStyle }}
      />
    </div>
  );
  if (props.link) return <a href={props.linkTo}>{template}</a>;
  else return template;
};

export default TekyLogo;
