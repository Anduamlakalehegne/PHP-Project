<?php
include("config.php");
if (isset($_GET["deactivate"])) {
    $email = $_GET["deactivate"];
     
        $query = mysqli_query($conn, "UPDATE role SET status='0' WHERE email='$email'");
        if ($query) {
            header("location:manage_account.php");
            $message[]="deactivate success";
        } else {
            header("location:manage_account.php");
            $message[]="deactivate fail";
        }
    } 
 else {
    header("location: manage_account.php");
} 
if (isset($_GET["deactivatee"])) {
    $email = $_GET["deactivatee"];
     
        $query = mysqli_query($conn, "UPDATE role SET status='0' WHERE email='$email'");
        if ($query) {
            header("location:manage_account.php");
            $message[]="deactivate success";
        } else {
            header("location:manage_account.php");
            $message[]="deactivate fail";
        }
    } 
 else {
    header("location: manage_account.php");
} 
