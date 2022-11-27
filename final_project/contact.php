<?php
require 'config.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $text = $_POST["text"];
  $date = $_POST["date"];
   
      $query = "INSERT INTO admin_feedback (name, email, content, date) VALUES ('$name','$email','$text','$date')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Successfully sent'); </script>";
      
  
}
?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <title> Contact Us Form </title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/all.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Ethiopia </div>
          <div class="text-two">Hawassa, Techno</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+251912345678</div>
          <div class="text-two">+251987654321</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">anduamlak@gmail.com</div>
          <div class="text-two">nigus@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>The quick brpwn fox jumps over the laxy dog The quick brpwn fox jumps over the laxy dog The quick brpwn fox jumps over the laxy dog</p>
        <form action="#" method="POST" autocomplete="off">
        <div class="input-box">
          <input name="name" type="text" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
          <input name="email" type="text" placeholder="Enter your email" required>
        </div>
        <div class="input-box message-box">
        <div class="input-boxs">
            <textarea  name="text"  placeholder="Please enter your comment" required></textarea>
        </div>
        <div class="input-box">
          <input name="date" type="date" placeholder="Enter date" required>
        </div>
          
        </div>
        <div class="button">
          <input name="submit" type="submit" value="Send Now" >
         
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>
