// All configuration with firebase in this file
const nameField = document.getElementById('name');
const emailField = document.getElementById('email');
const messageField = document.getElementById('message');
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
  apiKey: "AIzaSyBUnmcdIFM91co5t5cCKyjqGnkZQSvuvUQ",
  authDomain: "image-gallery-bf82b.firebaseapp.com",
  projectId: "image-gallery-bf82b",
  storageBucket: "image-gallery-bf82b.appspot.com",
  messagingSenderId: "915199341316",
  appId: "1:915199341316:web:ce6758a88fc1a92c68d651",
  measurementId: "G-59JPYL93KW"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();


// Reference messages collection

  var messagesRef = firebase.database().ref('messages');


// listen for form submit

 document.getElementById('contactForm').addEventListener('submit', submitForm);

// Submit Form

function submitForm(e){
   e.preventDefault();
  console.log("test form submit");

//Get Values

    var name = nameField.value;
    var email = emailField.value;
    var message = messageField.value;


    addToDB(name, email, message);

// Show alert
    document.querySelector('.alert').style.display = 'block';

    // Hide alert after 3 seconds
      setTimeout(function(){
        document.querySelector('.alert').style.display = 'none';
      },3000);

// Clear Form
    document.getElementById('contactForm').reset();
}


// Function to get values from form

    function getInputVal(id){
    return document.getElementById(id).value;
    }



// Save Message
function addToDB (name, email, message) {
  messagesRef.push({
    name: name,
    email: email,
    message: message
  });
}
