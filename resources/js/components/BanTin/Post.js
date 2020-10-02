import { Avatar } from "@material-ui/core";
import {
  AccountCircle,
  ChatBubbleOutline,
  ExpandMoreOutlined,
  NearMe,
  ThumbUp
} from "@material-ui/icons";
import React from "react";

const Post = ({ profilePic, image, username, timestamp, message }) => {
  return (
    <div className="my_post">
      <div className="my_post__top">
        <Avatar src={profilePic} className="my_post__avatar" />
        <div className="my_post__topinfo">
          <h3>{username}</h3>
          <p>{new Date(timestamp?.toDate()).toLocaleString("vi-vn")}</p>
        </div>
      </div>
      <div className="my_post__bottom">
        <p>{message}</p>
      </div>
      <div className="my_post__image">
        <img src={image} alt="" />
      </div>

      <div className="my_post__options">
        <div className="my_post__option">
          <ThumbUp /> <p>Thích</p>
        </div>
        <div className="my_post__option">
          <ChatBubbleOutline /> <p>Bình luận</p>
        </div>
        <div className="my_post__option">
          <NearMe /> <p>Chia sẻ</p>
        </div>
        <div className="my_post__option">
          <AccountCircle />
          <ExpandMoreOutlined />
        </div>
      </div>
    </div>
  );
};

export default Post;
