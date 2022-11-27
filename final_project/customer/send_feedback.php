<?php
require 'config.php';
include("dashboard.php");

if(isset($_POST["submit"])){
  $tin_no = $_POST["tin_no"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $text = $_POST["text"];
  $date = $_POST["date"];
   
      $query = "INSERT INTO feedback (TIN_NO, full_name, email, content, date) VALUES 
      ('$tin_no','$name','$email','$text','$date')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Successfully sent'); </script>";
      
  
}
?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <title> Post news orm </title>
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
          <input name="tin_no" type="text" placeholder="Enter your TIN_No" required>
        </div>
        <div class="input-box">
          <input name="name" type="text" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
          <input name="email" type="text" placeholder="Enter your email" required>
        </div>
        <div class="input-box message-box">
        <div class="input-boxs">
            <textarea name="text" placeholder="Please enter your feedback" required></textarea>
        </div>
          
        </div>
        <div class="input-box">
          <input name="date" type="date"  required>
        </div>
       
        <div class="button">
          <input class="buttonn"  type="submit" name="submit" value="Send" >
          <br>
          <br>
          <input class="buttonn"  type="reset" name="submit" value="Clear" >
        </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
