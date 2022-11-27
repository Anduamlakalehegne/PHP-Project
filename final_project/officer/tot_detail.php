<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detail.css">
    <title>View detail</title>
</head>
<body>
    

                
 <hr>
                               
    <?php 
                                
        include('config.php');
        include("dashboard.php");
        if(isset($_GET['detail']))
        $id=$_GET['detail'];
        $query=mysqli_query($conn,"SELECT * from tot_declaration where id ='$id' ");
        $rows=mysqli_fetch_array($query);
?>                                                 
        <div class="containerr"style="margin-top:1200px ">
            <div class="titlee" >Tax Payer Information</div>
            <div class="contentt">
            <form action="#" method="POST" autocomplete="off">
                <div class="user-detailss">
                  <div class="input-boxx">
                    <span class="details"><h4>TIN_No</h4></span>
                    <input type="text"  value="<?php echo $rows['TIN_NO']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>name_of_registerd_orgainization_or_tax_payer Date</h4></span>
                    <input  value="<?php echo $rows['name_of_registerd_orgainization_or_tax_payer']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>tax_registaration_number</h4></span>
                    <input value="<?php echo $rows['tax_registaration_number']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>document_number</h4></span>
                    <input  value="<?php echo $rows['document_number']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Region</h4></span>
                    <input   value="<?php echo $rows['region']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Zone</h4></span>
                    <input   value="<?php echo $rows['zone']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Kebele</h4></span>
                    <input value="<?php echo $rows['kebele']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>pnumber</h4></span>
                    <input value="<?php echo $rows['pnumber']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Name of tax collector office</h4></span>
                    <input value="<?php echo $rows['name_of_tax_collector_office']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Payment period</h4></span>
                    <input value="<?php echo $rows['payment_period']; ?>" readonly>
                  </div>
              </form>
            </div>
          </div>
        <?php}?>




        <div class="containerr"style="margin-top:-100px ">
            <div class="titlee" > Detail Information</div>
            <div class="contentt">
            <form action="#" method="POST" autocomplete="off">
                <div class="user-detailss">
                  <div class="input-boxx">
                    <span class="details"><h4>Type of item or service</h4></span>
                    <input type="text"  value="<?php echo $rows['type_of_item_or_service']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Taxable incomes</h4></span>
                    <input  value="<?php echo $rows['taxable_incomes']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Types of item or service</h4></span>
                    <input value="<?php echo $rows['types_of_item_or_service']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Taxable income</h4></span>
                    <input  value="<?php echo $rows['taxable_income']; ?>" required>
                  </div>
              </form>
            </div>
          </div>
        <?php}?>






        <div class="containerr"style="margin-top:-100px ">
            <div class="titlee" >Turn Over Tax Calculation</div>
            <div class="contentt">
            <form action="#" method="POST" autocomplete="off">
                <div class="user-detailss">
                  <div class="input-boxx">
                    <span class="details"><h4>Total two percent turnover taxable income</h4></span>
                    <input type="text"  value="<?php echo $rows['total_two_percent_turnover_taxable_income']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Total ten percent turnover taxable income</h4></span>
                    <input  value="<?php echo $rows['total_ten_percent_turnover_taxable_income']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Two percent turnover tax</h4></span>
                    <input value="<?php echo $rows['two_percent_turnover_tax']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Ten percent turnover tax</h4></span>
                    <input  value="<?php echo $rows['ten_percent_turnover_tax']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Total</h4></span>
                    <input   value="<?php echo $rows['total']; ?>" required>
                  </div>
              </form>
            </div>
          </div>
        <?php}?>




        <div class="containerr"style="margin-top:-100px ">
            <div class="titlee" >Proof Of Authenticity</div>
            <div class="contentt">
            <form action="#" method="POST" autocomplete="off">
                <div class="user-detailss">
                
                  <div class="input-boxx">
                    <span class="details"><h4>Full name</h4></span>
                    <input   value="<?php echo $rows['full_name']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Date</h4></span>
                    <input type="text"  value="<?php echo $rows['date']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Office name</h4></span>
                    <input type="text"  value="<?php echo $rows['office_name']; ?>" required>
                  </div>
                  <div class="buttonn">
                <a href="manage_tax_declaration.php"><input type="" class="back" name="submit" value="Back"></a>
                </div>
              </form>
            </div>
          </div>
        <?php}?>
                  
              </form>
            </div>
          </div>
        <?php}?>






        
        
        
   
</body>
</html>