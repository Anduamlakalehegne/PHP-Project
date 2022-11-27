<?php

  $conn_db = mysqli_connect("localhost" , "root" , "", "tax_db") or die("Connection Failed");
  if(isset($_POST['re_password']))
  {
  $old_pass=$_POST['old_pass'];
  $new_pass=$_POST['new_pass'];
  $re_pass=$_POST['re_pass'];
  $chg_pwd=mysqli_query($conn_db, "SELECT * FROM admin WHERE admin_id='1'");
  $chg_pwd1=mysqli_fetch_array($chg_pwd);
  $data_pwd=$chg_pwd1['password'];
  if($data_pwd==$old_pass){
  if($new_pass==$re_pass){
    $update_pwd=mysqli_query($conn_db, "UPDATE admin SET password='$new_pass' WHERE admin_id='1'");
    echo "<script>alert('Update Sucessfully'); window.location='admin.php'</script>";
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
