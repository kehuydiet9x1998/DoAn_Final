import React from "react";

const KhoaHocCard = ({
  anh,
  duongdan,
  ten,
  gia,
  anhgiaovien = "https://teky.online/wp-content/uploads/2020/03/TekyAvatar-100x100.png",
  duongdangiaovien = "/",
  tengiaovien = "Học viên Teky",
}) => {
  return (
    <div className="custom-col col-sm-6 col-md-6 col-lg-3 wrapper-item-course">
      <div className="item-course color-2">
        <div className="pic">
          <a href={duongdan}>
            <img src={anh} alt={ten} className />
          </a>
          <div className="price">{gia} </div>
        </div>
        <div className="text">
          <div className="teacher">
            <div className="ava">
              <img
                src={anhgiaovien}
                width={68}
                height={68}
                alt="User Avatar"
                className="avatar avatar-68 wp-user-avatar wp-user-avatar-68 photo avatar-default"
              />
            </div>
            <a href={duongdangiaovien}>{tengiaovien}</a>
          </div>
          <h3 className="title-course">
            <a href={duongdan}>{ten}</a>
          </h3>
          <div className="info-course">
            <a href={duongdan}>{ten}</a>
          </div>
        </div>
      </div>
    </div>
  );
};

export default KhoaHocCard;
