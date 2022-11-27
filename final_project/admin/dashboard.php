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
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Admin page</title>
</head>
<body>
    
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span class="fa fa-user"></span><span> System Admin</span></h1>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="admin.php" class="active"><span class="fa fa-home"></span>
                        <span>Home</span></a>
                </li>
                <li>
                    <a href="regr_manager.php" class="active1"><span class="fa fa-user"></span>
                        <span>Register Manager</span></a>
                </li>
                <li>
                    <a href="regr_officer.php"><span class="fa fa-user"></span>
                        <span>Register Officer</span></a>
                </li>
               
                <li>
                    <a href="manage_account.php"><span class="fa fa-address-card"></span>
                        <span>Manage Account</span></a>
                </li>
                <li>
                    <a href="manage_feedback.php"><span class="fa fa-comments"></span>
                        <span>Manage Feedback</span></a>
                </li>
               
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
        <h2 class=""style="font-size:22px;  color: #2f66dd; ">
                <label for="nav-toggle">
                    <span class="fa fa-bars"></span>
                </label>
                Admin Page
            </h2>
            <div class=""style="font-size:22px;  color: #2f66dd; ">
                <span >Pay Fair Tax For Better Tomorrow!!!</span>
            </div>


           <div  style=" color: #2f66dd; font-size:27px; margin:0px 5px 0px 0px;" class="fa fa-user" onclick="settingsMenuToggle()"></div>
            <div class="settings-menu">
            <div class="settings-menu-inner">
            <div class="user-profile">
              

            </div>
            <div class="settings-menu-inner">
            <?php
             $admin = $_SESSION["admin_id"];
             
             $query="SELECT * FROM admin where admin_id = $admin";
             $result= mysqli_query($conn,$query);
             
            
            while($rows=mysqli_fetch_assoc($result)){  
        ?>
        <div class="cards-single"  style="margin-top:100px">
        <div class="nandus">
        <div class="aa">
        <span class="fa fa-user"></span>
        
            <span><h5>Well Come</h5></span>
            <h2><?php echo $rows['full_name'];?></h2>
            <h4 class="d">Email Address:</h4>
            <h4><?php echo $rows['email'];?></h4>
            <h5><p>Phone Number:</p><?php echo $rows['pnumber'];?></h5>
            <a href="change_password.php"  style=" font-size:15px;  display: flex;  margin-top:30px"> <span  class="fa fa-key" style="font-size:20px; margin-left:35px;"></span>  <span style="font-size:20px; margin-left:15px">Change Password</span></a>
            <a href="../logout.php"  style=" font-size:15px;  display: flex; margin-top:-19px"> <span  class="fa fa-sign-out" style="font-size:20px; margin-left:35px;"></span>  <span style="font-size:20px; margin-left:15px" onclick="return confirm('Are you sure you want to logout')">Log Out</span></a>
                   
                
            
        </div>
        </div>
        
        </div>
         
    </div>
    <?php
            }
            ?>
             
            </div>
        </header>
</div>
</header>
<script  src="script.js"></script>
</body>
</html>
