<?php
include_once('config.php');
include("dashboard.php");
$query="SELECT * FROM customer";
$result= mysqli_query($conn,$query);
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
 
</head>
<body>


<div class="table_responsive">
<div>
       <h3> Customer</h3>
   </div>
    
        <table>
        <tr>
            <th style="height:50px; background-color: #00bcd4" colspan="14"><h2 style="background-color: #00bcd4; ";>View Users</h2></th>
        </tr>   
        <tr>
            <th> ID</th>
            <th> TIN_NO</th>
            <th> first_name</th>
            <th> last_name</th>
            <th> username</th>
            <th> email</th>
            <th> phone number</th>
            <th> Age</th>
            <th> Date</th>
            <th> region</th>
            <th> zone</th>
            <th> kebele</th> 
            <th> sex</th> 
            <th> Admin_id</th> 
        </tr>
        <?php
            while($rows=mysqli_fetch_assoc($result)){

            
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
                <td><?php echo $rows['date'];?></td>
                <td><?php echo $rows['region'];?></td>
                <td><?php echo $rows['zone'];?></td>
                <td><?php echo $rows['kebele'];?></td>
                <td><?php echo $rows['sex'];?></td>
                <td><?php echo $rows['officer_id'];?></td>
            </tr>
            <?php
            }
            ?>

    </table>
</div>
        
</body>
</html>