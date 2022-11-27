<?php
include("config.php");
if (isset($_GET["activate"])) {
    $email = $_GET["activate"];
    $check_query = mysqli_query($conn, "SELECT * FROM role WHERE email='$email'"); 
            $query = mysqli_query($conn,"UPDATE role SET status='1' WHERE email='$email'");
            if ($query) {
                $message[]="activatesuccess";
                header("location:manage_account.php");
              
            } 
            else {
                $message="activatefail";
                header("location:manage_account.php");
                
            }
        }
          
 else {
    header("location:manage_account.php?");
}

if (isset($_GET["activatee"])) {
    $email = $_GET["activatee"];
    $check_query = mysqli_query($conn, "SELECT * FROM role WHERE email='$email'"); 
            $query = mysqli_query($conn,"UPDATE role SET status='1' WHERE email='$email'");
            if ($query) {
                $message[]="activatesuccess";
                header("location:manage_account.php");
              
            } 
            else {
                $message="activatefail";
                header("location:manage_account.php");
                
            }
        }
          
 else {
    header("location:manage_account.php?");
}
?>

