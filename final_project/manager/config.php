<?php 


if(!empty($_SESSION['officer_id'])){
    header("Location: ../logout.php");
  }

$conn = mysqli_connect("localhost", "root", "", "tax_db");

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>