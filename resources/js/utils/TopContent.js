import React from "react";

const TopContent = ({ firstLine, SecondLine }) => {
  return (
    <div
      className="toptext"
      style={{
        paddingTop: 60,
        paddingBottom: 25,
        textAlign: "center",
        textTransform: "uppercase",
      }}
    >
      <h4 style={{ fontSize: "20px", lineHeight: 3 }}> {firstLine} </h4>
      <h3 style={{ color: "#2e487b", textTransform: "uppercase" }}>
        <b> {SecondLine} </b>
      </h3>
      <hr style={{ width: "200px", margin: "40px auto" }} />
    </div>
  );
};

export default TopContent;
