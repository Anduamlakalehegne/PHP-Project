
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
     <?php
     $query="SELECT * FROM customer";
     $res= mysqli_query($conn,$query);
     $cou= mysqli_num_rows($res);
     ?>
     <?php
     $query="SELECT * FROM regr_officer";
     $result= mysqli_query($conn,$query);
     $count= mysqli_num_rows($result);
     ?>
      
      <?php
     $query="SELECT * FROM news";
     $results= mysqli_query($conn,$query);
     $counts= mysqli_num_rows($results);
     ?>
     <div class="cards">
        <div class="card-single">
       
            <div>
            <h1><?php echo "$count"?></h1>
                <span>Officers</span>
            </div>
            <div>
                <span class="fa fa-user"></span>
            </div>
        </div>

       
        <div class="card-single">
            <div>
                <h1><?php echo "$cou"?></h1>
                <span>Customer</span>
            </div>
            <div>
                <span class="fa fa-user"></span>
                    </div>
            </div>

        <div class="card-single">
       
       <div>
       <h1><?php echo "$counts"?></h1>
           <span>Posted News</span>
       </div>
       <div>
           <span class="fa fa-file"></span>
       </div>
   </div>
 
        
        
            
      

        
</body>
</html>