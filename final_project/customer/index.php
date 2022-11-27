<?php
include("dashboard.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>update password</title>

    <link rel="stylesheet" href="css/login.css">

  </head>

  <body>
  
    
      <div class="container" >
      <div class="page-header">
       

        <div style="width:30%;">
          <form action="update_password.php" method="post">
            <div class="form-group">
              <label for="exampleInputPassword1" style="">Old Password</label>
              <input type="password" class="form-control" name="old_pass" id="exampleInputPassword1" placeholder="Old Password"required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" class="yy" style="">New Password</label>
              <input type="password" class="form-control" name="new_pass" id="exampleInputPassword1" placeholder="New Password"required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" class="yy" style="">Re-Type New Password</label>
              <input type="password" class="form-control" name="re_pass" id="exampleInputPassword1" placeholder="Re-Type New Password"required>
            </div>
            <a href="admin.php" class="zz">Back</a>
            <button type="submit" name="re_password" class="btn">Submit</button>
          </form>

        </div>

      </div>


    

 


  </body>

</html>
