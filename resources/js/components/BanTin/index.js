import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom";
import db from "../../firebase";
import reducer, { actionTypes, initialState } from "../../reducer";
import { StateProvider, useStateValue } from "../../StateProvider";
import MessageSender from "./MessageSender";
import Post from "./Post";

export default function Bantin() {
  const [{ user }, dispatch] = useStateValue();
  const [posts, setPosts] = useState([]);

  useEffect(() => {
    dispatch({
      actionType: actionTypes.SET_USER,
      user: { username: props.username, avatar: props.avatar }
    });
    db.collection("posts")
      .orderBy("timestamp", "desc")
      .onSnapshot(snapshot => {
        setPosts(snapshot.docs.map(doc => ({ id: doc.id, data: doc.data() })));
      });
  }, []);

  return (
    <div className="feed">
      <MessageSender />
      {posts.map((post, i) => (
        <Post
          key={i}
          profilePic={post.data.profilePic}
          image={post.data.image}
          username={post.data.username}
          message={post.data.message}
          timestamp={post.data.timestamp}
        />
      ))}
    </div>
  );
}

const bantin = document.getElementById("bantin");
const props = Object.assign({}, bantin?.dataset);
if (bantin) {
  ReactDOM.render(
    <StateProvider initialState={initialState} reducer={reducer}>
      <Bantin {...props} />
    </StateProvider>,
    bantin
  );
}
