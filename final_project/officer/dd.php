<?php
include('config.php');
include('../session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/adminnn.css">
    <title>Officer page</title>
</head>
<body>
    
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span class="fa fa-user"></span><span> Officer</span>
            </h1>
        </div>
        <div class="sidebar-menu">
            <ul>
            <li>
                    <a href="officer.php" class="active"><span class="fa fa-home"></span>
                        <span>Home</span></a>
                </li>
                <li>
                    <a href="reg_customer.php" class="active1"><span class="fa fa-user"></span>
                        <span>Register customer</span></a>
                </li>
                <li>
                    <a href="manage_account.php"><span class="fa fa-user"></span>
                        <span>Manage account</span></a>
                </li>
                <li>
                    <a href="manage_tax_declaration.php"><span class="fa fa-address-card"></span>
                        <span>Manage tax declarations </span></a>
                </li>    
                <li>
                    <a href="feedback.php"><span class="fa fa-comments"></span>
                        <span>Send Feedback</span></a>
                </li>    
                <li>
                    <a href="index.php"><span class="fa fa-key"></span>
                        <span>change password</span></a>
                </li>
               
                <li>
                    <a href="../logout.php "onclick="return confirm('are you sure you want to logout')"  ><span class="fa fa-sign-out"></span>
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
                Officer Page
            </h2>
            <div class="search-wrapper">
                <span class="fa fa-search"></span>
            <input type="search" placeholder="search here">
            </div>
        </header>
</header>

</body>
