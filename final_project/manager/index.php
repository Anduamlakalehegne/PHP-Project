<?php
include("dashboard.php");
$conn_db = mysqli_connect("localhost" , "root" , "", "tax_db") or die("Connection Failed");
if(isset($_POST['re_password']))
{
$old_pass=md5($_POST['old_pass']);
$new_pass=md5($_POST['new_pass']);
$re_pass=md5($_POST['re_pass']);

$chg_pwd=mysqli_query($conn_db, "SELECT * FROM role WHERE email= '".$_SESSION["email"]."'");
$chg_pwd1=mysqli_fetch_array($chg_pwd);
$data_pwd=$chg_pwd1['password'];

if($data_pwd==$old_pass){
if($new_pass==$re_pass){
    $update_pwd=mysqli_query($conn_db, "UPDATE role SET password='$new_pass' WHERE email= '".$_SESSION["email"]."'");
  echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
}

else{
  echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
}

}
else
{
echo "<script>alert('Your old password is wrong'); window.location='index.php'</script>";
}

}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <link rel="stylesheet" href="css/login.css">

  </head>

  <body>
  
    
      <div class="container" >
      <div class="page-header">
       

        <div style="width:30%;">
          <form action="" method="post">
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
            <button type="submit" name="re_password" class="btn">Submit</button>
          </form>

        </div>

      </div>


    

 


  </body>

</html>
