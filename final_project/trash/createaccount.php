<?php
require 'config.php';
//if(!empty($_SESSION["id"])){
  //header("Location: index.php");
//}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM register WHERE email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO register (name,email,password) VALUES ('$name','$email','$password')";
      mysqli_query($con, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title> Registration PAGE</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <img class="U" src="images/i.jpg">
        <div class="forms">
            <div class="form login">
                <span class="title">Registrsation</span>
                <form action="" method="POST" autocomplete="off">
                    <div class="input-field">
                        <input type="text" name="name" placeholder="enter your name" required>
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" name="email" placeholder="enter your email" required>
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="input-field">
                       <input type="password" name="password" placeholder="enter password" required>
                       <i class="fas fa-lock"></i>
                        <!--<i class="uil uil-eye-slash xxx"></i>-->
                    </div>
                    <div class="input-field">
                        <input type="password" name="confirmpassword" placeholder="confirm your password" required>
                        <i class="fas fa-lock"></i>
                         <!--<i class="uil uil-eye-slash xxx"></i>-->
                     </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logcheck">
                            <label for="logcheck" class="text">i accept all terms and conditions</label>

                        </div>
                        
                    </div>
                    <div class="input-field button">
                    <input type="submit" name="submit" value="Register">
                        
                    </div>
                 </form>
                 <div class="login-signup">
                     <span class="text"> Already have have account?
                         <a href="login.php" class="text sign-up-text">login now</a>

                     </span>
                 </div>
                
             </div>