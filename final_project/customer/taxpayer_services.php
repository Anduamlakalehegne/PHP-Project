
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
    <title>Admin page</title>
</head>
<body>
<main>  
    
    

    <div class="cards" >
        <div class="card-single" id="one">
            <div>
               
            <a href="vat_declaration.php"><span>VAT Declaration</span></a>
            </div>
            <div>
                <span class="fa fa-file"></span>
                    </div>
            </div>
        <div class="card-single" id="two">
       
            <div>
      
            <a href="tot.php"> <span>TOT Declaration</span></a>
            </div>
            <div>
                <span class="fa fa-file"></span>
            </div>
        </div>
        <div class="card-single" id="two">
       
       <div>
 
       <a href="excise_tax_declaration.php"> <span>Excise Tax Declaration</span></a>
       </div>
       <div>
           <span class="fa fa-file"></span>
       </div>
   </div>
        <div class="card-single" style="background-color: #fff;">
       
       <div class="display">

       <a class="display" href="null_tax.php"><span>Unfild Null VAT</span></a>
       </div>
       <div>
           <span class="display" class="fa fa-file"></span>
       </div>
       
   </div>


   
</main>


        
</body>
</html>
