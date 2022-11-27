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
    <link rel="stylesheet" href="css/adminn.css">
    <title>Customer page</title>
</head>
<body>
    
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span class="fa fa-user"></span><span> Customer</span>
            </h1>
        </div>
        <div class="sidebar-menu">
            <ul>
            <li>
                    <a href="customer.php" class="active"><span class="fa fa-home"></span>
                        <span>Home</span></a>
                </li>
                <li>
                    <a href="taxpayer_services.php" class="active1"><span class="fa fa-user"></span>
                        <span>Tax Payer services</span></a>
                </li>
                <li>
                    <a href="manage_account.php" class="active1"><span class="fa fa-user"></span>
                        <span>Manage Account</span></a>
                </li>
                <li>
                    <a href="tax_declarations.php."><span class="fa fa-address-book"></span>
                        <span>Tax Declarations</span></a>
                </li>
                
                <li>
                    <a href="send_feedback.php"><span class="fa fa-comments"></span>
                        <span>Send Feedback</span></a>
                </li>
               
                <li>
                    <a href="change_password.php"><span class="fa fa-key"></span>
                        <span>Change Password</span></a>
                </li>
                <li>
                    <a href="../logout.php" onclick="return confirm('Are you sure you want to logout')"><span class="fa fa-sign-out"></span>
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
                Customer Page
            </h2>
            <div class="search-wrapper">
                <span class="fa fa-search"></span>
            <input type="search" placeholder="search here">
            </div>
        </header>
</header>

</body>
