import firebase from "firebase";
const firebaseConfig = {
  apiKey: "AIzaSyAg8l4n8Mn8fvrWOwz6fUokCdfaxX3ZYQI",
  authDomain: "teky-7a7cd.firebaseapp.com",
  databaseURL: "https://teky-7a7cd.firebaseio.com",
  projectId: "teky-7a7cd",
  storageBucket: "teky-7a7cd.appspot.com",
  messagingSenderId: "410845488015",
  appId: "1:410845488015:web:2d457a47c336cec9cee1fa",
  measurementId: "G-GWY4KJFQH5"
};

const firebaseApp = firebase.initializeApp(firebaseConfig);
const db = firebaseApp.firestore();

export default db;
