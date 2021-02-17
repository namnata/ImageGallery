<!DOCTYPE html>

<html>

<head>
      <title>My Image Gallery</title>
</head>
   <link rel="stylesheet" type="text/css" href="style.css" />
   
<body>
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
    
<hr>

<div class="welcomepage">

<p>

Hello <?php echo $_POST["fullname"]; ?>. Thank you for your message. We'll come back to you shortly.<br>


<p>


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

<?php 
//var_dump($_POST);
$file = 'newContacts.txt';
// Append a new data to the file
$data = $_POST["fullname"] . '|' . $_POST["email"] . '|' . $_POST["subject"] .
'|' . date("Y/m/d") . '|'. date("h:i:sa"). "\r\n";
$ret = file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
if($ret === false) {
die('There was an error writing this file');
}
else {
//echo "$ret bytes written to file";
}
?>
    
    

</div>
</body>
</html>