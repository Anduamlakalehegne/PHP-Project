<?php
include("config.php");
if (isset($_GET["deactivate"])) {
    $email = $_GET["deactivate"];
     
        $query = mysqli_query($conn, "UPDATE role SET status='0' WHERE email='$email'");
        if ($query) {
           
            header("location:users.php");
        } else {
            header("location:users.php");
            $message[]="deactivate fail";
        }
    } 
 else {
    header("location: users.php");
} 

