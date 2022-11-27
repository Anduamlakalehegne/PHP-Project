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
    <link rel="stylesheet" href="css/admin.css">
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
               
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
        <h2 class="" style="font-size:22px;  color: #2f66dd; ">
                <label for="nav-toggle">
                    <span class="fa fa-bars"></span>
                </label>
                Officer Page
        </h2>
            <div class="sidbar-brand"style="font-size:22px;  color: #2f66dd; ">
                <span >Pay Fair Tax For Better Tomorrow!!!</span>
            </div>

            <div  style=" color: #2f66dd; font-size:27px; margin:0px 5px 0px 0px;" class="fa fa-user" onclick="settingsMenuToggle()"></div>
            <div class="settings-menu">
            <div class="settings-menu-inner">
            <div class="user-profile">
              
            </div>

            <div class="settings-menu-inner">
            <?php
             $manager = $_SESSION["officer_id"];
             
             $query="SELECT * FROM regr_officer where officer_id = $manager";
             $result= mysqli_query($conn,$query);
             
            
            while($rows=mysqli_fetch_assoc($result)){  
        ?>
        <div class="aa1" >
        <div class="bb1">
        <div class="cc1">
        <span  style=" color: #2f66dd; font-size:30px; margin:30px 0px 10px 0px;" class="fa fa-user"></span>
        
            <span  style=" color: #2f66dd; margin-top:10px; "><h1>Well Come</h1></span>
            <h1  style=" color: #2f66dd; margin-top:10px; "> <?php echo $rows['first_name'];?></h1>
            <h4 style=" color: #2f66dd; margin-top:10px; " ><p>Email:</p><?php echo $rows['email'];?></h4>
            <h4 style=" color: #2f66dd; margin-top:10px; " ><p>Phone Number:</p><?php echo $rows['pnumber'];?></h4>
            <a href="index.php"  style=" font-size:15px;  display: flex;  margin-top:40px"> <span  class="fa fa-key" style="font-size:20px; margin-left:35px;"></span>  <span style="font-size:20px; margin-left:15px">Change Password</span></a>
            <a href="../logout.php"style=" font-size:15px;  display: flex; margin-top:5px"> <span  class="fa fa-sign-out" style="font-size:20px; margin-left:35px;"></span> <span style="font-size:20px; margin-left:15px" onclick="return confirm('Are you sure you want to logout')">Log Out</span></a>
            
        </div>
        </div>
        
        </div>
         
    </div>
    <?php
            }
            ?>
             
            </div>
        </header>

</header>
<script  src="js/script.js"></script>
</body>
</html>
