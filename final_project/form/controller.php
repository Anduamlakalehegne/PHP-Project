<?php
session_start();
    include_once("connection.php");
    $errors = [];

    // if login Button clicked so

    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $pass=[''];
        $role=[''];
        $status=[''];
        
        $query = mysqli_query($conn, "SELECT * FROM role WHERE email = '$email' AND password ='$password'");
        
        while ($row = mysqli_fetch_assoc($query)){
            $email= $row['email'];
            $pass= $row['password'];
            $role=$row['role'];
            $status=$row['status'];
            $_SESSION['username'] = $row['username'];

          }
          $query1 = mysqli_query($conn, "SELECT * FROM role WHERE email = '$email' AND password ='$password'");
          if (mysqli_num_rows($query1) > 0){
            
          
          if ($status == 1){
        
            if($role=='admin' && $pass==$password){
                $admin_query = mysqli_query($conn,"SELECT * FROM admin WHERE email='$email'");
                $admin_row = mysqli_fetch_assoc($admin_query);

                
                 $admin_id = $admin_row["admin_id"];
                 $name = $admin_row["full_name"];  
                 $username = $admin_row["username"];                                         
                 $email = $admin_row["email"]; 
                 $phonenumber =$admin_row["pnumber"];
                 

                 $_SESSION["admin_id"] = $admin_id;
                 $_SESSION["full_name"] = $name;  
                 $_SESSION["email"] = $email; 
                 $_SESSION["pnumber"] = $phonenumber;
              header("Location: ../admin/admin.php");
              }
      
        elseif ($role=='manager'&& $pass==$password ){
            $manager_query = mysqli_query($conn, "SELECT * FROM reg_manager WHERE email='$email'");
            $manager_row = mysqli_fetch_assoc($manager_query); 
            
            $manager_id = $manager_row["manger_id"];
            $name = $manager_row["first_name"]; 
            $name = $manager_row["last_name"];   
            $name = $manager_row["username"];                                     
            $email = $manager_row["email"];
            $age = $manager_row["age"];
            $sex = $manager_row["sex"];
            $phonenumber =$manager_row["pnumber"];
         

            $_SESSION["manger_id"] = $manager_id;
            $_SESSION["first_name"] = $first_name; 
            $_SESSION["last_name"] = $last_name;                     
            $_SESSION["age"] = $age;
            $_SESSION["email"] = $email;
            $_SESSION["sex"] = $sex;
            $_SESSION["pnumber"] = $phonenumber;
            header("location: ../manager/manager.php");
              
              }
      
            elseif($role=='officer' && $pass==$password){
                $admin_query = mysqli_query($conn,"SELECT * FROM regr_officer WHERE email='$email'");
                $admin_row = mysqli_fetch_assoc($admin_query);

                
                 $admin_id = $admin_row["officer_id"];
                 $first_name = $admin_row["first_name"];  
                 $last_name = $admin_row["last_name"]; 
                 $username = $admin_row["username"];                                         
                 $email = $admin_row["email"]; 
                 $phonenumber =$admin_row["pnumber"];
                 

                 $_SESSION["officer_id"] = $admin_id;
                 $_SESSION["first_name"] = $first_name;
                 $_SESSION["first_name"] = $last_name; 
                 $_SESSION["username"] = $username;    
                 $_SESSION["email"] = $email; 
                 $_SESSION["pnumber"] = $phonenumber;
              header("Location: ../officer/officer.php");
              }
      
          elseif ($role=='customer'&& $pass==$password){
            $delivery_query = mysqli_query($conn, "SELECT * FROM customer WHERE email='$email'");
            $delivery_row = mysqli_fetch_assoc($delivery_query);  
            $_SESSION["delivery_logged"] = "true"; 
            $delivery_id = $delivery_row["customer_id"];
            $name = $delivery_row["first_name"];  
            $name = $delivery_row["last_name"];                                       
            $email = $delivery_row["email"];
            $age = $delivery_row["age"];
            $sex = $delivery_row["sex"];
            $phonenumber =$delivery_row["pnumber"];
          

            $_SESSION["customer_id"] = $delivery_id;
            $_SESSION["first_name"] = $name;                     
            $_SESSION["last_name"] = $email;
            $_SESSION["email"] = $email;
            $_SESSION["age"] = $age;
            $_SESSION["sex"] = $sex;
            $_SESSION["pnumber"] = $phonenumber;
              header("location: ../customer/customer.php");
              } 

        }
        else {
            print("<script>alert('locked account')</script>");            
             }   
       }
      
      else{      
        echo
        "<script> alert('email or password is not correct'); </script>";
      }
    }

    // if forgot button will clicked
    if (isset($_POST['forgot_password'])) {
        $email = $_POST['email'];
        $_SESSION['email'] = $email;

        $emailCheckQuery = "SELECT * FROM role WHERE email = '$email'";
        $emailCheckResult = mysqli_query($conn, $emailCheckQuery);

 
        if ($emailCheckResult) {
            // if email matched
            if (mysqli_num_rows($emailCheckResult) > 0) {
                $code = rand(999999, 111111);
                $updateQuery = "UPDATE role SET code = $code WHERE email = '$email'";
                $updateResult = mysqli_query($conn, $updateQuery);
                if ($updateResult) {
                    $subject = 'Email Verification Code';
                    $message = "our verification code is $code";
                    $sender = 'From: anduamlakalehegne@gmail.com';

                    if (mail($email, $subject, $message, $sender)) {
                        $message = "We've sent a verification code to your Email <br> $email";

                        $_SESSION['message'] = $message;
                        header('location: verifyEmail.php');
                    } else {
                        $errors['otp_errors'] = 'Failed while sending code!';
                    }
                } else {
                    $errors['db_errors'] = "Failed while inserting data into database!";
                }
            }else{
                $errors['invalidEmail'] = "Invalid Email Address";
            }
        }else {
            $errors['db_error'] = "Failed while checking email from database!";
        }
    }
if(isset($_POST['verifyEmail'])){
    $_SESSION['message'] = "";
    $OTPverify = mysqli_real_escape_string($conn, $_POST['OTPverify']);
    $verifyQuery = "SELECT * FROM role WHERE code = $OTPverify";
    $runVerifyQuery = mysqli_query($conn, $verifyQuery);
    if($runVerifyQuery){
        if(mysqli_num_rows($runVerifyQuery) > 0){
            $newQuery = "UPDATE role SET code = 0";
            $run = mysqli_query($conn,$newQuery);
            header("location: newPassword.php");
        }else{
            $errors['verification_error'] = "Invalid Verification Code";
        }
    }else{
        $errors['db_error'] = "Failed while checking Verification Code from database!";
    }
}

// change Password
if(isset($_POST['changePassword'])){
    $password = md5(($_POST['password']));
    $confirmPassword = md5(($_POST['confirmPassword']));
    
    if (strlen($_POST['password']) < 8) {
        $errors['password_error'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
    } else {
        // if password not matched so
        if ($_POST['password'] != $_POST['confirmPassword']) {
            $errors['password_error'] = 'Password not matched';
        } else {
            $email = $_SESSION['email'];
            $updatePassword = "UPDATE role SET password = '$password' WHERE email = '$email'";
            $updatePass = mysqli_query($conn, $updatePassword) or die("Query Failed");
            session_unset();
            session_destroy();
            header('location: login.php');
        }
    }
}