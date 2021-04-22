// For Firebase JS SDK v7.20.0 and later, measurementId is optional


  import firebase from 'firebase/app'
  import 'firebase/database'
  import 'firebase/firestore'
  import 'firebase/storage'
  import 'firebase/auth'
  import 'firebase/functions'
  // import 'firebase/messaging'
  
  const firebaseConfig = {
    apiKey: "AIzaSyCZ7l05QitCxl5nnj5GS-yUMQa93KKSFaY",
    authDomain: "driptrip.firebaseapp.com",
    databaseURL: "https://driptrip.firebaseio.com",
    projectId: "driptrip",
    storageBucket: "driptrip.appspot.com",
    messagingSenderId: "1007600765593",
    appId: "1:1007600765593:web:1fe85c31ad78b0340cc608",
    measurementId: "G-5L3T1LSGX1"
  };
  firebase.initializeApp(firebaseConfig)
  
  const database = firebase.database()
  
  const storage = firebase.storage()
  
  const auth = firebase.auth()
  auth.setPersistence(firebase.auth.Auth.Persistence.LOCAL)
  
  let messaging = null
  // if( firebase.messaging.isSupported() ){
  //   try{
  //     messaging = firebase.messaging()
  //     messaging.usePublicVapidKey('BKddClI45H_p_yfOQVK9gRHwNclIwJG3f5AlzBOuzCZZBbi9jytXp18-DTAIbetd71WZ2Jl5Y_0nAIiJbSBGq0Q')
  //   }catch (e) {
  //     console.warning(e)
  //   }
  // }else{
  //   messaging = null
  // }
  
  const functions = firebase.functions()
  
  const timeStamp = firebase.database.ServerValue.TIMESTAMP
  
  const firestore = firebase.firestore()
  
  export { firebase, database, storage, auth, functions, messaging, firestore, timeStamp }
  