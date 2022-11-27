<?php
require 'config.php';
include("dashboard.php");

if(isset($_POST["submit"])){
  $date = $_POST["date"];
  $text = $_POST["text"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $registerdby = $_SESSION["officer_id"];
   
      $query = "INSERT INTO feedback (full_name, email, content, date, officer_id) VALUES 
      ('$name','$email','$text','$date', $registerdby)";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Successfully sent'); </script>";
      
  
}
?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/all.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="right-side">
        <div class="topic-text">Send Feedback</div>
        <form action="#" method="POST" autocomplete="off">
        <div class="input-box">
          <input name="name" type="text" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
          <input name="email" type="text" placeholder="Enter your email" required>
        </div>
        <div class="input-box">
          <input name="date" type="date"  required>
        </div>
        <div class="input-box message-box">
        <div class="input-boxs">
            <textarea name="text" placeholder="Please enter your feedback" required></textarea>
        </div>
          
        </div>
        <div class="button">
          <input class="butonn"  type="submit" name="submit" value="Send" >
         
         
        </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
