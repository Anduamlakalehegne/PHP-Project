<?php
include("dashboard.php");
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

</head>
<body>

    
<div class="table_responsive" style="margin-top:-100px ";>
<div>
       <h2> Customers</h2>
   </div>
        <table>
        <tr>
            <th style="height:50px; background-color: #00bcd4"; colspan="17"; ><h2>View Users</h2></th>
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
            <th> Officer Id</th> 
            <th colspan="2">  Action</th> 
            <th> Control</th> 
            
            
        </tr>
        <?php if(isset($_GET['customer_id'])){
        $id = $_GET['customer_id'];
        $query2= "DELETE FROM customer WHERE customer_id = $id";
        Mysqli_query($conn, $query2);
       
     };?>


        <?php
        
            $query="SELECT * FROM customer where officer_id= '".$_SESSION["officer_id"]."' ";
            $res= mysqli_query($conn,$query);
            while($rows=mysqli_fetch_assoc($res)){
                $email=$rows['email'];
                
           
                $result = mysqli_query($conn, "SELECT * FROM role WHERE email='$email' "); 
                $row = mysqli_fetch_assoc($result);
                $status = $row["status"];
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

               
                <td class="action_btn"><a href="new.php?update=<?php echo $rows['email']; ?>"> <i class="fas fa-edit"></i></a></td>
                <td class="action_btnn"><a href="manage_account.php?customer_id=<?php echo $rows['email']; ?>"onclick="return confirm('are you sure you want to delete this item')" > <i class="fas fa-trash"></i></a></td>
         
            <td>    
                <?php
                if ($status == 1) {
                ?>
                <a href="deactivateaccount.php?deactivate=<?php echo $email ?>" ><i class=" fas fa-toggle-on fa-1x" ></i></a>
                                               
            <?php
                } else {
                ?>
                <a href="activateaccount.php?activate=<?php echo $email ?>"> <i class=" fas fa-toggle-off fa-1x"></i></a>
                <?php
                }
                
                ?>
               
                
            </tr>
                
            </td>   
             </tr> 
            <?php
            }
            ?>