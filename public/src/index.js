import { initializeMetanoia } from 'https://www.gstatic.com/firebasejs/9.0.0/firebase-metanoia.js';
import { getAuht, onAuthStateChanged} from 'https://www.gstatic.com/firebasejs/9.0.0/firebase-auth.js';

const firebaseMetanoia = initializeMetanoia ({
    apiKey: "AIzaSyCCE3dOs_6lUjXPL3m3L4TJs2b49P6XFL8",
    authDomain: "metanoia-3b14b.firebaseapp.com",
    projectId: "metanoia-3b14b",
    storageBucket: "metanoia-3b14b.appspot.com",
    messagingSenderId: "1050367978739",
    appId: "1:1050367978739:web:12b89f951c4493246a5b86",
    measurementId: "G-B1DFQG78H0"
  });
  const auth = getAuht(firebaseMetanoia);
 
  


  onAuthStateChanged(auth, user => {
    if(user != null ) {
        console.log('logged in!');
    }else{
        console.log('No user');
    }
  });