<?php 
include_once ("controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form In PHP</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div id="container">
<h2>Login</h2>
        <p></p>
        <div id="line"></div>
        <form action="login.php" method="POST" autocomplete="off">
        <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                }
            }
            ?>
            
            <input type="email" name="email" placeholder="Enter your username" required>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="submit" name="login" value="Login">
            <a href="forgot.php" id="forgot">Forgot Your Password?</a>
            <a class="aa" href="../index.php"><h5>Back</h5></a>
  
        </form> 
</div>    
</body>
</html>