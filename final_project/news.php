<?php
include('config.php');

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
         <h1>Read News</h1>
         <br>
             <?php
                $date = date("Y-m-d");
                $news = "SELECT * FROM news";
                 $result = mysqli_query($conn, $news);
                while ($row = mysqli_fetch_assoc($result)) {
                 $title = $row["posted_date"];
                $content = $row["news_content"];
                $posted_by = $row["posted_by"];
                $email = $row["email"]
             ?>
                    <div class="card ">
                        <div class="card-header">
                        Posted Date: <?php  echo $title ?>     
                         </div>
                        <div class="card-body">
                        Content: <br/> <?php echo $content ?>
                        </div>
                         <div class="card-footer">
                             Posted by: <?php echo $posted_by ?>
                        </div>
                        <div class="card-footer">
                             Email: <?php echo $email ?>
                        </div>
                        
                        
                    </div>
                    <br>
                    <br>
                  
                                <?php
                           

                            }
                            
                            
                            ?>
                          
                            
                            <a class="" style=" margin-top: 10px" href="index.php"><h5>Back</h5></a>
                       
     </div>
                        </body>
                        </html>
    