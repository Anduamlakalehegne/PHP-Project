<?php 
@include 'include/header.php';
@require 'include/db.php';
 
$nameErr = $emailErr=$scmessage=$emErr=$passErr =$Errmessage=$emailErr=$nameErr=$phonenumberErr= $addressErr="";

if(isset($_POST['submit'])){
 
	$name = $_POST["name"];
	 $email = $_POST["email"];
    $password = md5($_POST['password']);  
    $repassword =  md5($_POST['repassword']);
  	$phonenumber = $_POST["phonenumber"];
    	$address = $_POST["address"];
     
      $sql = "SELECT  id FROM customer WHERE email = '$email'" ;
      $check_query = mysqli_query($con,$sql);
      $count_email = mysqli_num_rows($check_query);
      if($count_email > 0){
      $Errmessage="<b>Email Address is already available Try Another</b>";
        }
    
        else{
          if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "<b>Only letters and white space allowed in name</b>";
      
       }

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "<b>Invalid email format</b>";
      
        }

    if ($password != $repassword) {
      $passErr ="<b>password must be the same</b>"; 
      
           }

   if(!preg_match("/^[0-9]+$/",$phonenumber)){
      $phonenumberErr="<b>phonenumber  $phonenumber is not valid</b>";
  
          }

    if(!(strlen($phonenumber) == 10)){
        $phonenumberErr ="<b>phonenumber number must be 10 digit</b>"; 
      
              }

    if (!preg_match("/^[a-zA-Z ]*$/",$address)) {
      $addressErr = "<b>Only letters and white space allowed in address</b>";
          }
       
else{
  $query = "INSERT INTO customer(name, email, password, phonenumber, address) VALUES ('$name','$email','$password','$phonenumber','$address')";
          Mysqli_query($con, $query);
          $scmessage="<b ><p style=color:green font-size:px;>Registration Successful</p></b>";
          
     }
   }
  } 
?>
 <head>
<style>
.error {color: #FF0000;}
</style>
</head>
    <div class="login-form">
        <div class="shape1"></div>  
             <div class="form">
                <img src="images/Authentication_Two Color.svg" alt="" class="form-img">
                <form action="" method="POST" class="form-content1">
 
                    <h1 class="form-title">create account </h1>
                    <span class="error">

                      <?php
                      echo "<p>$scmessage</p>";
                      echo "<p>$Errmessage</p>";
                      echo "<p>$emailErr</p>";
                      echo "<p>$nameErr</p>";
                      echo "<p>$phonenumberErr</p>";
                      echo "<p>$addressErr</p>";
                      echo "<p>$passErr</p>";
                      echo "<p>$emErr</p>";
                      ?>
                   </span>
                    <div class="form-div form-div-one  ">
                        <div class="form-icon"> <i class="fa-solid fa-pen"></i> </div>
                         <div class="form-div-input">
                         <input type="text" name="name" class="form-input" placeholder="username" required>
                         </div>
                    </div>
                    <div class="form-div form-div-one  ">
                        <div class="form-icon"> <i class="fa-solid fa-envelope"></i> </div>
                         <div class="form-div-input">
                         <input type="email" name="email" class="form-input" placeholder="email" required>
                         </div>
                         
                       </div>
                    <div class="form-div form-div-one  ">
                        <div class="form-icon"> <i class="fa-solid fa-lock"></i> </div>
                         <div class="form-div-input">
                           <input type="password" name="password" class="form-input" placeholder="password" required>
                         </div>
                      
                      </div>
                      <div class="form-div form-div-one  ">
                        <div class="form-icon"> <i class="fa-solid fa-lock"></i> </div>
                         <div class="form-div-input">
                           <input type="password" name="repassword" class="form-input" placeholder=" re enter password" required>
                         </div>
                      
                      </div>
                      
                    <div class="form-div form-div-one  ">
                        <div class="form-icon"> <i class="fa-solid fa-phone"></i> </div>
                         <div class="form-div-input">
                         <input type="text" name="phonenumber" class="form-input" placeholder="phone number" required>
                         </div>
                    </div>
                    <div class="form-div form-div-one  ">
                        <div class="form-icon"> <i class="fa-solid fa-location"></i> </div>
                         <div class="form-div-input">
                         <input type="text" name="address" class="form-input" placeholder="adress" required>
                         </div>
                    </div>
                
                    <input type="submit" name="submit" class=" btn" value="sign up">
                    
                  <div class="foot" > Already have an acount<a href="login.php" class="form-signup">sign in</a></div>
                    
                </form>
             </div>
    </div>
    <?php
    include "include/footer.php";
   ?>