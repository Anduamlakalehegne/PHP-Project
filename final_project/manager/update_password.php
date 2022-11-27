<?php

  $conn_db = mysqli_connect("localhost" , "root" , "", "tax_db") or die("Connection Failed");
  if(isset($_POST['re_password']))
  {
  $old_pass=$_POST['old_pass'];
  $new_pass=md5($_POST['new_pass']);
  $re_pass=md5($_POST['re_pass']);
  
  $chg_pwd=mysqli_query($conn_db, "SELECT * FROM reg_manager where email= '".$_SESSION["email"]."'");
  $chg_pwd1=mysqli_fetch_array($chg_pwd);
  $data_pwd=$chg_pwd1['password'];
  if($data_pwd==$old_pass){
  if($new_pass==$re_pass){
    $update_pwd=mysqli_query($conn_db, "UPDATE reg_manager SET password='$new_pass' where email= '".$_SESSION["email"]."'");
    echo "<script>alert('Update Sucessfully'); window.location='officer.php'</script>";
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
