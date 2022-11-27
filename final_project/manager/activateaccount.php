<?php
include("config.php");
if (isset($_GET["activate"])) {
    $email = $_GET["activate"];
    $check_query = mysqli_query($conn, "SELECT * FROM role WHERE email='$email'"); 
            $query = mysqli_query($conn,"UPDATE role SET status='1' WHERE email='$email'");
            if ($query) {
                echo
                "<script> alert('successfully Deactivate'); </script>";
                header("location:users.php");
              
            } 
            else {
                $message="activatefail";
                header("location:users.php");
                
            }
        }
          
 else {
    
}

?>

