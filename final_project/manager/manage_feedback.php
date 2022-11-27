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
    <title>News page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"  href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">

</head>
<body>

<div class="containerss">
         <h1>Feedbacks</h1>
         <br>
             <?php
                $date = date("Y-m-d");
                $news = "SELECT * FROM feedback";
                 $result = mysqli_query($conn, $news);
                while ($row = mysqli_fetch_assoc($result)) {
           
                $full_name = $row["full_name"];
                $email = $row["email"];
                $content = $row["content"];
                $date = $row["date"];
             ?>
                    <div class="card ">
                        
                        <div class="card-header">
                        Full name: <?php echo $full_name ?>
                        </div>
                        <div class="card-footer">
                         email:  <?php echo $email ?>
                        </div>
                         <div class="card-footer">
                         Content: <br/>  <?php echo $content ?>
                        </div>
                        <div class="card-footer">
                        Date: <?php echo $date ?>
                        </div>
                      
                        
                    </div>
                    <br>
                    <br>
                  
                                <?php
                           

                            }
                            
                            
                            ?>
                          
                            
                          
                       
     </div>
                        </body>
                        </html>
    