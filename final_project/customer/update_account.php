<?php
include("dd.php");
include("config.php");
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="table.css">
    <title>view customer</title>
</head>
<body>
<hr>

    
<div class="table_responsive" style="margin-top:-100px ";>
<div>
       <h2> Update Account</h2>
   </div>
        <table>
        <tr>
            <th style="height:50px; background-color: #00bcd4"; colspan="16"; ><h2>View Users</h2></th>
        </tr>   
        <tr>
            <th> ID</th>
            <th> TIN_NO</th>
            <th> First name</th>
            <th> Last_name</th>
            <th> Username</th>
            <th> Email</th>
            <th> Phone number</th>
            <th> Age</th>
            <th> Sex</th>
            <th> Date</th>
            <th> Region</th>
            <th> zone</th>
            <th> kebele</th> 
            <th> Officer iid</th> 
            <th> Action</th> 
           
            
        </tr>
       


        <?php
            $query="SELECT * FROM customer  where email= '".$_SESSION["email"]."'";
            $res= mysqli_query($conn,$query);
            while($rows=mysqli_fetch_assoc($res)){
                $email=$rows['email'];
                
           
                $result = mysqli_query($conn, "SELECT * FROM role where email= '".$_SESSION["email"]."' "); 
                $row = mysqli_fetch_assoc($result);
             
               ?> 

           
            <tr>
           
                <td ><?php echo $rows['customer_id'];?></td>
                <td ><?php echo $rows['TIN_No'];?></td>
                <td><?php echo $rows['first_name'];?></td>
                <td><?php echo $rows['last_name'];?></td>
                <td><?php echo $rows['username'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['pnumber'];?></td>
                <td><?php echo $rows['age'];?></td>
                <td><?php echo $rows['sex'];?></td>
                <td><?php echo $rows['date'];?></td>
                <td><?php echo $rows['region'];?></td>
                <td><?php echo $rows['zone'];?></td>
                <td><?php echo $rows['kebele'];?></td>
                <td><?php echo $rows['officer_id'];?></td>

               
                <td class="action_btn"><a href="manage_account.php?update=<?php echo $rows['email']; ?>"> <i class="fas fa-edit"></i></a></td>
                
               
                
            </tr>
                
            </td>   
             </tr> 
            <?php
            }
            ?>