<?php
session_start();
if(strlen($_SESSION['username']==0)){
    header("Location: ../index.php");
  }
  ?>