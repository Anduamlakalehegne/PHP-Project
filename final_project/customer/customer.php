<?php
include('config.php');
include('dashboard.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/adminn.css">
    <title>Customer page</title>
</head>
<body>
<main>  
     <?php
     $query="SELECT * FROM vat_declaration where customer_id= '".$_SESSION["customer_id"]."'";
     $res= mysqli_query($conn,$query);
     $cou= mysqli_num_rows($res);
     ?>
     <?php
     $query="SELECT * FROM tot_declaration where customer_id= '".$_SESSION["customer_id"]."'";
     $results= mysqli_query($conn,$query);
     $counts= mysqli_num_rows($results);
     ?>
      <?php
     $query="SELECT * FROM excise_tax_declaration where customer_id= '".$_SESSION["customer_id"]."'";
     $resul= mysqli_query($conn,$query);
     $coun= mysqli_num_rows($resul);
     ?>
    

        <main>  
    
    

    <div class="cards" style="margin-top:-50px" >
        <div class="card-single" id="one">
            <div>
               <h1><?php echo "$cou"?></h1>
               <span>Vat Declarations</span>
               </div>
            <div>
               <span class="fa fa-file"></span>
            </div>
            </div>

        <div class="card-single" id="two">
       
        <div>
               <h1><?php echo "$counts"?></h1>
               <span>Tot Declarations</span>
               </div>
            <div>
               <span class="fa fa-file"></span>
            </div>
            </div>

        <div class="card-single" id="two">
      <div>
               <h1><?php echo "$coun"?></h1>
               <span>Exise Tax Declarations</span>
               </div>
            <div>
               <span class="fa fa-file"></span>
            </div>
            </div>

        <div class="card-single" style="background-color: #fff;">
       
       <div class="display">

       <div>
               <h1><?php echo "$counts"?></h1>
               <span>Vat Declarations</span>
               </div>
            <div>
               <span class="fa fa-user"></span>
            </div>
            </div>

   
</main>

        
    </div>

        
</body>
</html>