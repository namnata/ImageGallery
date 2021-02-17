<!DOCTYPE html>

<html>

<head>
 <link rel="stylesheet" type="text/css" href="style.css" />

      <title>My Image Gallery</title>
      <script
     src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
     defer
   ></script>
</head>


<body>
  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>

 <!-- TODO: Add SDKs for Firebase products that you want to use
      https://firebase.google.com/docs/web/setup#available-libraries -->
 <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>
 <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-auth.js"></script>
 <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script>
 <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-database.js"></script>

    <div style="text-align:center">
    <h1>Lighthouse Photography</h1>
    <hr>

      <!--The grid for menu: 3 columns-->

    <div class="menu">
      <div class="column">
      <a href="index.html">Home</a>
      </div>
      <div class="column">
      <a href="about.html">About</a>
      </div>
      <div class="column">
      <a href="contact.php">Contact Us</a>
      </div>
      <div class="column">
      <a href="price.html">Market</a>
      </div>
    </div>



    <div class="textAbout">
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis vestibulum ex,
    at sollicitudin massa elementum iaculis. Pellentesque maximus quam nec urna cursus, vitae
    placerat nunc ultricies. Duis commodo lobortis metus, in pharetra sapien ullamcorper elementum.
    Curabitur facilisis euismod sem, nec dictum leo mollis nec. Praesent quis risus consectetur,
    consequat mauris eget, tristique lectus. Sed laoreet, sapien in mattis malesuada, sem nibh
    hendrerit urna, sed facilisis tortor enim nec massa. Pellentesque dolor quam, fermentum aliquet
    volutpat nec, porta at diam. Donec at hendrerit tortor
    </p>
   </div>


   <h4>Visit our beautiful gallery in Wellinton</h4>

   <!--The div element for the map -->
  <div id="map">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.7427006048642!2d174.77651951470898!3d-41.29270397927295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38afd0ac4e62c5%3A0x7a6839d874707c9b!2s54%20Taranaki%20Street%2C%20Te%20Aro%2C%20Wellington%206011!5e0!3m2!1sen!2snz!4v1609971112078!5m2!1sen!2snz" width="640" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>








   <h4>Welcome to pop up for a cuppa, or leave us a message:</h4>


 <div class="container">


   <form id="contactForm">

    <div class="alert">Your message has been sent</div>


    <input type="text" id="name" name="name" placeholder="Your name.."><br>


    <input type="email" id="email" required name="email" placeholder="Your email.."><br>


    <input type="text" id="message" name="message" placeholder="Write us something.."</textarea><br>


    <input type="submit">

   </form>
 </div>

<div class="lighthouse">

<a href="index.html"><img src="lighthouse1.png.png" title="Home" width="50px"></a>
</div>



<hr>
<div class="footer">


   <a id="icon" href="https://www.youtube.com/" title="Our Youtube channel"><img id="myImg1" src="iconmonstr-youtube-3.svg">


    <a id="icon" href="https://www.facebook.com/" title="Our Facebook page"><img id="myImg1" src="iconmonstr-facebook-3.svg">


    <a id="icon" href="https://www.twitter.com/" title="Our Twitter"><img id="myImg1" src="iconmonstr-twitter-3 (1).svg">


    <a id="icon" href="https://www.instagram.com/" title="Our Instagram profile"><img id="myImg1" src="iconmonstr-instagram-1.svg">


</div>


<!--This scrpit connect contact form to firebase.js file-->
<script src = "firebase.js"></script>
</body>

<html>
