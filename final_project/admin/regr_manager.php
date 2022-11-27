<?php
include("config.php");
include("dashboard.php");
$errors = [];
$em= [];


if(isset($_POST["submit"])){
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $pnumber = $_POST["pnumber"];

  $age = $_POST["age"];
  $date = $_POST["reg_date"];
  $region = $_POST["region"];
  $zone = $_POST["zone"];
  $kebele = $_POST["kebele"];
  $sex = $_POST["sex"];
  $registerdby = $_SESSION["admin_id"];

  
  // generate a random Code
  $password = rand(99999999, 11111111);
  
  $sql = "SELECT * FROM role WHERE email = '$email'";
  $res = mysqli_query($conn, $sql) or die('query failed');
  if (mysqli_num_rows($res) > 0) {
    echo
    "<script> alert('Email Address is already available Try Another'); </script>";
  }
 
  else{
    
    $registerdby = $_SESSION["admin_id"];
    
    $subject = 'Email Verification Code';
    $message = "Your username is $email and Your password is $password";
    $sender = 'From: anduamlak027@gmail.com ';

    if (mail($email, $subject, $message, $sender)) {
        echo
        "<script> alert('successfully registerd'); </script>";
    
    } else {
        echo $errors['otp_errors'] = 'Failed while sending code!';
    }

    $query = "INSERT INTO reg_manager (first_name, last_name, username, email, pnumber, age, registration_date, region, zone, kebele, sex, admin_id) 
    VALUES ('$first_name','$last_name','$username','$email','$pnumber','$age','$date','$region','$zone','$kebele','$sex', $registerdby)";
    mysqli_query($conn, $query);
    if ($query) {
      $pass=md5($password);
      $insertInfo = "INSERT INTO role ( username, email, password, role) VALUES ('$first_name','$email','$pass','manager')";
      mysqli_query($conn, $insertInfo);
    }

    if ($insertInfo) {
     
  } else {
    echo $errors['db_errors'] = "Failed while inserting data into database!";
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
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>Regi officer</title>

    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script type="text/javascript">
      
      function useraccount() {
                var letter = /^[A-Za-z]+$/;
                var number = /^[0-9]+$/;
                var length = '10';
                var minlength = '3';
                var data = /\d{4}-\d{2}-\d{2}/;
                var decimalnum = /^\d+\.\d{0,2}$/;
                var emailvalidate = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
             

               if (document.usertable.first_name.value == "") {
                    document.getElementById('first_name').innerHTML = '<font color ="red" margin-left:50px>Please fill first Name</font>';
                    document.getElementById("last_name").innerHTML = '';
                    document.usertable.first_name.focus();
                    return false;
                  
                }
                else if (!letter.test(document.usertable.first_name.value)) {
                    document.getElementById('first_name').innerHTML = '<font color="red">Please fill valid Name</font>';
                    document.usertable.first_name.focus();
                    return false;
                }
                else if (document.usertable.last_name.value == "") {
                    document.getElementById('last_name').innerHTML = '<font color ="red">Please fill last Name</font>';
                    document.getElementById("first_name").innerHTML = '';
                    document.usertable.last_name.focus();
                    return false;
                }
                else if (!letter.test(document.usertable.last_name.value)) {
                    document.getElementById('last_name').innerHTML = '<font color="red">please fill the last name only letter</font>';
                    document.usertable.last_name.focus();
                    return false;
                }
                else if (document.usertable.username.value == "") {
                    document.getElementById('username').innerHTML = '<font color ="red">please fill the username</font>';
                    document.getElementById("last_name").innerHTML = '';
                    document.usertable.username.focus();
                    return false;
                }
                else if (!letter.test(document.usertable.username.value)) {
                    document.getElementById('username').innerHTML = '<font color="red">please fill the username only letter</font>';
                    document.usertable.username.focus();
                    return false;
                }
                else if (document.usertable.email.value == "") {
                    document.getElementById('email').innerHTML = '<font color="red">please fill the email</font>';
                    document.getElementById("username").innerHTML = '';
                    document.usertable.email.focus();
                    return false;
                }
                else if (!emailvalidate.test(document.usertable.email.value)) {
                    document.getElementById('email').innerHTML = '<font color="red">please fill the correct email format</font>';
                    document.usertable.email.focus();
                    return false;
                }
                else if (document.usertable.pnumber.value == "") {
                    document.getElementById('pnumber').innerHTML = '<font color="red">please fill Phone Number</font>';
                    document.getElementById("email").innerHTML = '';
                    document.usertable.pnumber.focus();
                    return false;
                }
                else if (!number.test(document.usertable.pnumber.value)) {
                    document.getElementById('pnumber').innerHTML = '<font color="red">please fill the correct phone format</font>';
                    document.usertable.pnumber.focus();
                    return false;
                }
                 else if (document.usertable.age.value == "") {
                    document.getElementById('age').innerHTML = '<font color="red">please fill age</font>';
                    document.getElementById("pnumber").innerHTML = '';
                    document.usertable.age.focus();
                    return false;
                }
                else if (!number.test(document.usertable.age.value)) {
                    document.getElementById('age').innerHTML = '<font color="red">please fill the correct age format</font>';
                    document.usertable.age.focus();
                    return false;
                }
                else if (document.usertable.reg_date.value == "") {
                    document.getElementById('reg_date').innerHTML = '<font color="red">please fill date</font>';
                    document.getElementById("age").innerHTML = '';
                    document.usertable.reg_date.focus();
                    return false;
                }
                else if (document.usertable.region.value == "") {
                    document.getElementById('region').innerHTML = '<font color="red">please fill region</font>';
                    document.getElementById("reg_date").innerHTML = '';
                    document.usertable.region.focus();
                    return false;
                }
                else if (!letter.test(document.usertable.region.value)) {
                    document.getElementById('region').innerHTML = '<font color="red">Only leters are allowed</font>';
                    document.usertable.region.focus();
                    return false;
                }
                else if (document.usertable.zone.value == "") {
                    document.getElementById('zone').innerHTML = '<font color="red">please fill zone</font>';
                    document.getElementById("region").innerHTML = '';
                    document.usertable.zone.focus();
                    return false;
                }
                else if (!letter.test(document.usertable.zone.value)) {
                    document.getElementById('zone').innerHTML = '<font color="red">Only leters are allowed</font>';
                    document.usertable.zone.focus();
                    return false;
                }
                else if (document.usertable.kebele.value == "") {
                    document.getElementById('kebele').innerHTML = '<font color="red">please fill kebele</font>';
                    document.getElementById("zone").innerHTML = '';
                    document.usertable.kebele.focus();
                    return false;
                }

          else {
              return true;
          }
      }
  </script>

  




</head>
<body>

 
  

        <div class="container"style="margin-top:-100px ">
            <div class="title" >Manager Rigsteration Form </div>

            <div class="content">
            <form action="#" method="POST" name="usertable">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">First Name</span>
                    <input type="text" name="first_name" placeholder="Enter first name" >
                       <p id="first_name"></p>
                  </div>
                  <div class="input-box">
                    <span class="details">Last Name</span>
                    <input  type="text" name="last_name" placeholder="Enter last name" >
                    <p id="last_name"></p>
                  </div>
                  <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="username" placeholder="Enter username" >
                    <p id="username"></p>
                  </div>
                  <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" placeholder="Enter email address" >
                    <p id="email"></p>
                  </div>
                  <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" name="pnumber" placeholder="Enter phone number" >
                    <p id="pnumber"></p>
                  </div>
                 
                  <div class="input-box">
                    <span class="details">Age</span>
                    <input type="number" name="age" placeholder="Enter age" >
                    <p id="age"></p>
                  </div>
                  <div class="input-box">
                    <span class="details">Registration Date</span>
                    <input type="date" name="reg_date" placeholder="Enter gender" >
                    <p id="reg_date"></p>
                  </div>
                  <div class="input-box">
                    <span class="details">Region</span>
                    <input type="text" name="region" placeholder="Enter region" >
                    <p id="region"></p>
                  </div>
                  <div class="input-box">
                    <span class="details">Zone</span>
                    <input type="text" name="zone" placeholder="Enter zone" >
                    <p id="zone"></p>
                  </div>
                  <div class="input-box">
                    <span class="details">Kebele</span>
                    <input type="text" name="kebele" placeholder="Enter kebele" >
                    <p id="kebele"></p>
                  </div>
                </div>
                <div class="gender-details">
                  <input type="radio" value="male" name="sex" id="dot-1" for="male" required>
                  <input type="radio" value="female" name="sex" id="dot-2"  for="female" required>
                  <input type="radio" value="other" name="sex" id="dot-3" for="male" required>
                  <span class="gender-title">Gender</span>
                  <div class="category">
                    <label value="male"  name="sex" for="dot-1" >
                    <span name="sex" class="dot one"></span>
                    <span name="sex" value="male" class="gender">Male</span>
                  </label>
                  <label name="sex" value="female" for="dot-2">
                    <span name="sex" class="dot two" ></span>
                    <span name="sex" value="female" class="gender">Female</span>
                  </label>
                  <label name="sex" value="other" for="dot-3" >
                    <span name="sex" class="dot three"></span>
                    <span name="sex" value="other" class="gender" >other</span>
                    </label>
                  </div>
                </div>
                <div class="button">
                <input type="submit" name="submit" value="Register" onclick="return useraccount();">
                </div>
              </form>
            </div>
          </div>
          
        
</body>
</html>