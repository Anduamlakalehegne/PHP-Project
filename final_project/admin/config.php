<?php 


$conn = mysqli_connect("localhost", "root", "", "tax_db");

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>