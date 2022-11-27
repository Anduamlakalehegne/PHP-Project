<?php
require 'config.php';
//if(!empty($_SESSION["id"])){
  //header("Location: index.php");
//}
$nameErr = $emailErr=$scmessage=$emErr=$passErr =$Errmessage=$emailErr=$nameErr=$phonenumberErr= $addressErr="";
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $pnumber = $_POST["pnumber"];
  $password = md5($_POST["password"]);
  $cpassword = md5($_POST["cpassword"]);
  $age = $_POST["age"];
  $sex = $_POST["sex"];
  $address = $_POST["address"];

   $sql = "SELECT * FROM reg_manager WHERE email = '$email'";
   $check_query = mysqli_query($conn,$sql);
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

        if ($password != $cpassword) {
            $passErr ="<b>password must be the same</b>"; 
        
            }

        if(!preg_match("/^[0-9]+$/",$pnumber)){
            $phonenumberErr="<b>phonenumber  $pnumber is not valid</b>";

            }

        if(!(strlen($pnumber) == 10)){
            $phonenumberErr ="<b>phonenumber number must be 10 digit</b>"; 
        
                }

        if (!preg_match("/^[a-zA-Z ]*$/",$address)) {
            $addressErr = "<b>Only letters and white space allowed in address</b>";
      }

  else{
      $query = "INSERT INTO reg_manager (name, username, email, pnumber, password, cpassword, age, sex, address) VALUES ('$name','$username','$email','$pnumber','$password','$cpassword','$age','$sex','$address')";
      mysqli_query($conn, $query);
      $scmessage="<b ><p style=color:green font-size:px;>Registration Successful</p></b>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="admin.css">
    <title>Register manager</title>
    <style>
.error 
{color: #FF0000;}
{margin-top: -10px}
</style>
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span class="fa fa-user"></span><span> System Admin</span>
            </h1>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="admin.php" class="active"><span class="fa fa-home"></span>
                        <span>Home</span></a>
                </li>
                <li>
                    <a href="" class="active1"><span class="fa fa-user"></span>
                        <span>Register Manager</span></a>
                </li>
                <li>
                    <a href=""><span class="fa fa-user"></span>
                        <span>Register Officer</span></a>
                </li>
                <li>
                    <a href=""><span class="fa fa-address-card"></span>
                        <span>Manage Account</span></a>
                </li>
                <li>
                    <a href="view_user.php"><span class="fa fa-address-book"></span>
                        <span>View Manager</span></a>
                </li>
                <li>
                    <a href=""><span class="fa fa-address-book"></span>
                        <span>View Officer</span></a>
                </li>
                <li>
                    <a href="index.php"><span class="fas fa-lock"></span>
                        <span>Log out</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="fa fa-bars"></span>
                </label>
                Admin Page
            </h2>
            <div class="search-wrapper">
                <span class="fa fa-search"></span>
            <input type="search" placeholder="search here">
            </div>
            <div class="user-wrapper">
                <img src="images/01.jpg" width="50px" height="50px">
                <div>
                    <h4>Anduamlak</h4>
                    <small>Admin</small>
                </div>
            </div>
            
            
        </header>

        <div class="container">
            <div class="title" style="margin-top:280px">Manager Rigsteration Form </div>
            <div class="content">
            <form action="#" method="POST" autocomplete="off">
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
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="name" placeholder="Enter your name" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="username" placeholder="Enter your username" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="email" placeholder="Enter your email" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" name="pnumber" placeholder="Enter your number" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="" name="cpassword" placeholder="Confirm your password" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Age</span>
                    <input type="text" name="age" placeholder="Ensert your age" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Gender</span>
                    <input type="text" name="sex" placeholder="Enter your gender" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Street Address</span>
                    <input type="text" name="address" placeholder="Enter Your street address" required>
                  </div>
                  <div class="input-box">
                    <span class="details">City</span>
                    <input type="text" name="address" placeholder="Enter Your city" required>
                  </div>
                  <div class="input-box">
                    <span class="details">State</span>
                    <input type="text" name="address" placeholder="Enter Your state" required>
                  </div>
                </div>
                <div class="gender-details">
                </div>
                <div class="button">
                <input type="submit" name="submit" value="Register">
                </div>
              </form>
            </div>
          </div>
          
        
</body>
</html>