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

<div class="table_responsive" style="margin-top:320px; margin-left:-90px ";>
<div>
       <h2> Vat declarations</h2>
   </div>
        <table>
        <tr>
            <th style="height:50px; background-color: #00bcd4"; colspan="12"; ><h2>View Users</h2></th>
        </tr>   
        <tr>
            <th> ID</th>
            <th> TIN_NO</th>
            <th> Declaration date</th>
            <th> Vat return type</th>
            <th> Tax period</th>
            <th> Name of registerd organization/tax payer</th>
            <th> Vat registration number</th>
            <th> Agent TIN</th>
            <th> Organization TIN</th>
            <th> Customer ID</th>
            <th> Officer ID</th>
            <th> Detail</th> 
           
            
       
        <?php
            $query="SELECT * FROM vat_declaration";
            $res= mysqli_query($conn,$query);
            while($rows=mysqli_fetch_assoc($res)){
            
               ?> 

           
            <tr>
           
                <td ><?php echo $rows['id'];?></td>
                <td ><?php echo $rows['TIN_No'];?></td>
                <td><?php echo $rows['declaration_date'];?></td>
                <td><?php echo $rows['vat_return_type'];?></td>
                <td><?php echo $rows['tax_period'];?></td>
                <td><?php echo $rows['name_of_registerd_organization_or_tax_payer'];?></td>
                <td><?php echo $rows['vat_registration_number'];?></td>
                <td><?php echo $rows['agent_TIN'];?></td>
                <td><?php echo $rows['organization_TIN'];?></td>
                <td><?php echo $rows['customer_id'];?></td>
                <td><?php echo $rows['officer_id'];?></td>
              

               
                <td class="action_btn"><a href="detail.php?detail=<?php echo $rows['id']; ?>"> <i class="fas fa-info-circle"></i></a></td>
                <!-- <td class="action_btnn"><a href="manage_account.php?manger_id=<?php echo $rows['customer_id']; ?>" > <i class="fas fa-print"></i></a></td> -->
              
               
               
                
            </tr>
                
            </td>   
             </tr> 
            <?php
            }
            ?>
            </table>
        </div>

        <div class="table_responsive" style="margin-top:40px; margin-left:-90px ";>
<div>
       <h2> TOT declarations</h2>
   </div>
        <table>
        <tr>
            <th style="height:50px; background-color: #00bcd4"; colspan="12"; ><h2>View Users</h2></th>
        </tr>   
        <tr>
        <th> ID</th>
            <th> TIN_NO</th>
            <th> Name of registerd organization/tax payer</th>
            <th> Tax registration number</th>
            <th> Document Number</th>
            <th> Region</th>
            <th> Zone</th>
            <th> Kebele</th>
            <th> Phone Number</th>
            <th> Customer ID</th>
            <th> Officer ID</th>
            <th> Detail</th> 
           
            
       
        <?php
            $query="SELECT * FROM tot_declaration";
            $res= mysqli_query($conn,$query);
            while($rows=mysqli_fetch_assoc($res)){
            
               ?> 

           
            <tr>
           
                <td ><?php echo $rows['id'];?></td>
                <td ><?php echo $rows['TIN_NO'];?></td>
                <td><?php echo $rows['name_of_registerd_orgainization_or_tax_payer'];?></td>
                <td><?php echo $rows['tax_registaration_number'];?></td>
                <td><?php echo $rows['document_number'];?></td>
                <td><?php echo $rows['region'];?></td>
                <td><?php echo $rows['zone'];?></td>
                <td><?php echo $rows['kebele'];?></td>
                <td><?php echo $rows['pnumber'];?></td>
                <td><?php echo $rows['customer_id'];?></td>
                <td><?php echo $rows['officer_id'];?></td>
              

               
                <td class="action_btn"><a href="tot_detail.php?detail=<?php echo $rows['id']; ?>"> <i class="fas fa-info-circle"></i></a></td>
                <!-- <td class="action_btnn"><a href="manage_account.php?manger_id=<?php echo $rows['customer_id']; ?>" > <i class="fas fa-print"></i></a></td> -->
              
               
               
                
            </tr>
                
            </td>   
             </tr> 
            <?php
            }
            ?>
            </table>
        </div>
        <div class="table_responsive" style="margin-top:50px; margin-left:-90px ";>
<div>
       <h2> Exise Tax declarations</h2>
   </div>
        <table>
        <tr>
            <th style="height:50px; background-color: #00bcd4"; colspan="12"; ><h2>View Users</h2></th>
        </tr>   
        <tr>
            <th> ID</th>
            <th> TIN_NO</th>
            <th> Declaration date</th>
            <th> Exise Tax Registration Number</th>
            <th> Tax period</th>
            <th> Name of registerd organization/tax payer</th>
            <th> Vat registration number</th>
            <th> Agent TIN</th>
            <th> Organization TIN</th>
            <th> Customer ID</th>
            <th> Officer ID</th>
            <th> Detail</th> 
           
            
       
        <?php
            $query="SELECT * FROM excise_tax_declaration";
            $res= mysqli_query($conn,$query);
            while($rows=mysqli_fetch_assoc($res)){
            
               ?> 

           
            <tr>
           
                <td ><?php echo $rows['id'];?></td>
                <td ><?php echo $rows['TIN_No'];?></td>
                <td><?php echo $rows['declaration_date'];?></td>
                <td><?php echo $rows['vat_return_type'];?></td>
                <td><?php echo $rows['tax_period'];?></td>
                <td><?php echo $rows['name_of_registerd_organization_or_tax_payer'];?></td>
                <td><?php echo $rows['vat_registration_number'];?></td>
                <td><?php echo $rows['agent_TIN'];?></td>
                <td><?php echo $rows['organization_TIN'];?></td>
              

               
                <td class="action_btn"><a href="detail.php?detail=<?php echo $rows['id']; ?>"> <i class="fas fa-info-circle"></i></a></td>
                <!-- <td class="action_btnn"><a href="manage_account.php?manger_id=<?php echo $rows['customer_id']; ?>" > <i class="fas fa-print"></i></a></td> -->
              
               
               
                
            </tr>
                
            </td>   
             </tr> 
            <?php
            }
            ?>
            </table>
        </div>
        </body>
        </html>


