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

    
<div class="table_responsive" style="margin-top:350px;">
<div>
       <h2> Tax Declarations</h2>
   </div>
        <table>
        <tr>
            <th style="height:50px; background-color: #00bcd4"; colspan="11"; ><h2>View Users</h2></th>
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
            <th> Officer Id</th>
            <th> Detail</th> 
          
            
        </tr>

        <?php
           

            $query2="SELECT * FROM vat_declaration where customer_id= '".$_SESSION["customer_id"]."'";
            $ress= mysqli_query($conn,$query2);
            while($rows=mysqli_fetch_assoc($ress)){
            
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
                <td><?php echo $rows['agent_TIN'];?></td>
                <td><?php echo $rows['officer_id'];?></td>
              

               
                <td class="action_btn"><a href="new1.php?detail=<?php echo $rows['id']; ?>"> <i class="fas fa-info-circle"></i></a></td>
                
                <?php
                
                
                ?>
               
                
            </tr>
                
            </td>   
             </tr> 
            <?php
            }
            ?>

            </table>
        </div>

<div class="table_responsive" style="margin-top:10px ";>
<div>
       <h2> Tot Declarations</h2>
   </div>
        <table>
        <tr>
            <th style="height:50px; background-color: #00bcd4"; colspan="11"; ><h2>View Users</h2></th>
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
            <th> Detail</th> 
          
            
        </tr>
     


        <?php
           

            $query2="SELECT * FROM tot_declaration where customer_id= '".$_SESSION["customer_id"]."'";
            $ress= mysqli_query($conn,$query2);
            while($rows=mysqli_fetch_assoc($ress)){
            
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
              
                <td class="action_btn"><a href="tot_detail.php?detail=<?php echo $rows['id']; ?>"> <i class="fas fa-info-circle"></i></a></td>
                
                <?php
                
                
                ?>
               
                
            </tr>
                
            </td>   
             </tr> 
            <?php
            }
            ?>
 </table>
        </div>

<div class="table_responsive" style="margin-top:10px; margin-bottom:80px;">
<div>
       <h2> Tax Declarations</h2>
   </div>
        <table>
        <tr>
            <th style="height:50px; background-color: #00bcd4"; colspan="11"; ><h2>View Users</h2></th>
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
            <th> Officer Id</th>
            <th> Detail</th> 
          
            
        </tr>
     


        <?php
           

            $query2="SELECT * FROM excise_tax_declaration where customer_id= '".$_SESSION["customer_id"]."'";
            $ress= mysqli_query($conn,$query2);
            while($rows=mysqli_fetch_assoc($ress)){
            
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
                <td><?php echo $rows['agent_TIN'];?></td>
                <td><?php echo $rows['officer_id'];?></td>
              

               
                <td class="action_btn"><a href="new1.php?detail=<?php echo $rows['id']; ?>"> <i class="fas fa-info-circle"></i></a></td>
                
                <?php
                
                
                ?>
               
                
            </tr>
                
            </td>   
             </tr> 
            <?php
            }
            ?>







</body>
     </html>   

     
