<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Account</title>
</head>
<body>
    

                
 <hr>
                               
    <?php 
                                
        include('config.php');
        include("dashboard.php");
        if(isset($_GET['update']))
        $id=$_GET['update'];
        $query=mysqli_query($conn,"SELECT * from regr_officer where officer_id='$id' ");
        $rows=mysqli_fetch_array($query);
        if(isset($_POST["submit"])){
          $first_name = $_POST["first_name"];
          $last_name = $_POST["last_name"];
          $username = $_POST["username"];
          $email = $_POST["email"];
          $pnumber = $_POST["pnumber"];
          $age = $_POST["age"];
          $region = $_POST["region"];
          $zone = $_POST["zone"];
          $kebele = $_POST["kebele"];

          $query5 = "UPDATE regr_officer SET first_name='$first_name', last_name='$last_name', username='$username', email='$email', pnumber='$pnumber',
          age='$age', region='$region', zone='$zone', kebele='$kebele'  where officer_id='$id' ";
          mysqli_query($conn, $query5);


          header('location:users.php');
                  
             }
    ?>
     
     <?php 
          if(isset($_GET['manger_id'])){
          $id = $_GET['manger_id'];
          $query2= "DELETE FROM role where id='$id'";
          Mysqli_query($conn, $query2);
          
     };?>




                                                 
        <div class="container"style="margin-top:60px ">
            <div class="title" >Update account</div>
            <div class="content">
            <form action="#" method="POST" autocomplete="off">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">First Name</span>
                    <input type="text" name="first_name" value="<?php echo $rows['first_name']; ?>" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Last Name</span>
                    <input type="text" name="last_name" value="<?php echo $rows['last_name']; ?>" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="username" value="<?php echo $rows['username']; ?>" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" value="<?php echo $rows['email']; ?>" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" name="pnumber" value="<?php echo $rows['pnumber']; ?>" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Age</span>
                    <input type="text" name="age" value="<?php echo $rows['age']; ?>" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Region</span>
                    <input type="text" name="region" value="<?php echo $rows['region']; ?>" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Zone</span>
                    <input type="text" name="zone" value="<?php echo $rows['zone']; ?>" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Kebele</span>
                    <input type="text" name="kebele" value="<?php echo $rows['kebele']; ?>" required>
                  </div>
                </div>
                <div class="gender-details">
                  <input type="radio" name="sex" id="dot-1">
                  <input type="radio" name="sex" id="dot-2">
                  <input type="radio" name="sex" id="dot-3">
                  <span class="gender-title">Gender</span>
                  <div class="category">
                    <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender">Male</span>
                  </label>
                  <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Female</span>
                  </label>
                  <label for="dot-3">
                    <span class="dot three"></span>
                    <span class="gender">Prefer not to say</span>
                    </label>
                  </div>
                </div>
                <div class="button">
                  <input type="submit" name="submit" value="Update">
                </div>
              </form>
            </div>
          </div>
        <?php}?>
        
   
</body>
</html>