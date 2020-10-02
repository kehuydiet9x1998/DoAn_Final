import { Avatar } from "@material-ui/core";
import { InsertEmoticon, PhotoLibrary, Videocam } from "@material-ui/icons";
import React, { useState } from "react";
import db from "../../firebase";
import firebase from "firebase";
import { useStateValue } from "../../StateProvider";

const MessageSender = () => {
  const [input, setInput] = useState("");
  const [imageUrl, setImageUrl] = useState("");

  const handleSubmit = e => {
    e.preventDefault();

    db.collection("posts").add({
      message: input,
      timestamp: firebase.firestore.FieldValue.serverTimestamp(),
      profilePic: user?.avatar,
      username: user.username,
      image: imageUrl
    });

    setInput("");
    setImageUrl("");
  };
  const [{ user }, dispatch] = useStateValue();

  return (
    <div className="messagesender">
      <div className="messagesender__top">
        <Avatar src={user?.avatar} />
        <form>
          <input
            value={input}
            onChange={e => setInput(e.target.value)}
            type="text"
            placeholder={"Nhập nội dung"}
            style={{ flex: 1 }}
          />
          <input
            value={imageUrl}
            onChange={e => setImageUrl(e.target.value)}
            type="text"
            placeholder={"Đường dẫn ảnh"}
          />
          <button onClick={handleSubmit} type="submit">
            Hidden submit
          </button>
        </form>
      </div>
      <div className="messagesender__bottom">
        <div className="messagesender_option">
          <Videocam style={{ color: "red" }} />
          <h3>Livestream</h3>
        </div>
        <div className="messagesender_option">
          <PhotoLibrary style={{ color: "green" }} />
          <h3>Ảnh/Video</h3>
        </div>
        <div className="messagesender_option">
          <InsertEmoticon style={{ color: "orange" }} />
          <h3>Cảm xúc</h3>
        </div>
      </div>
    </div>
  );
};

export default MessageSender;
