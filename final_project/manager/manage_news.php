<?php
require 'config.php';
include("dashboard.php");

if(isset($_POST["submit"])){
  $date = $_POST["date"];
  $text = $_POST["text"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $registerdby = $_SESSION["manger_id"];
   
      $query = "INSERT into news(posted_date, news_content, posted_by, email, manager_id ) VALUES 
      ('$date','$text','$name','$email',$registerdby)";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Successfully sent'); </script>";
      
  
}
?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <title> Post news form </title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/all.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="right-side">
        <div class="topic-text">Post News</div>
        <form action="manage_news.php" method="POST" autocomplete="off">
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
            <textarea name="text" placeholder="Please enter your comment" required></textarea>
        </div>
          
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Send Now" >
          <br>
          <br>
          <input class="buttonn"  type="reset" name="submmit" value="Clear" >
        </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
