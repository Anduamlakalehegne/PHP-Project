

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/manage.css">
    <title>Update Account</title>
</head>
<body>
    

                
 <hr>
                               
    <?php 
                                
        include('config.php');
        include("dashboard.php");
      
        $query=mysqli_query($conn,"SELECT * from customer where email= '".$_SESSION["email"]."' ");
        $query1=mysqli_query($conn,"SELECT * from role where email= '".$_SESSION["email"]."' ");
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
          $query5 = "UPDATE customer SET first_name='$first_name', last_name='$last_name', username='$username', email='$email', pnumber='$pnumber',
          age='$age', region='$region', zone='$zone', kebele='$kebele' where email= '".$_SESSION["email"]."' ";
             mysqli_query($conn, $query5);
             header('location:tot.php');
                     
                }
    ?>
    
                                                 
        <div class="container"style="margin-top:70px ">
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
                    <input type="email" name="email" value="<?php echo $rows['email']; ?>" readonly>
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
                  <span  name="sex" class="gender-title">Gender</span>
                  <div class="category">
                    <label for="dot-1">
                    <span  name="sex" class="dot one"></span>
                    <span  name="sex" class="gender">Male</span>
                  </label>
                  <label for="dot-2">
                    <span  name="sex" class="dot two"></span>
                    <span   name="sex" class="gender">Female</span>
                  </label>
                  <label for="dot-3">
                    <span  name="sex" class="dot three"></span>
                    <span  name="sex" class="gender">Prefer not to say</span>
                    </label>
                  </div>
                </div>
                <div class="button">
                <input name="submit" type="submit"  value="Update">
                </div>
              </form>
            </div>
          </div>
        <?php}?>
        
   
</body>
</html>