<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin1.css">
    <title>View detail</title>
</head>
<body>
    

                
 <hr>
                               
    <?php 
                                
        include('config.php');
        include("dashboard.php");
        if(isset($_GET['detail']))
        $id=$_GET['detail'];
        $query=mysqli_query($conn,"SELECT * from vat_declaration where id ='$id' ");
        $rows=mysqli_fetch_array($query);
?>                                                 
        <div class="containerr"style="margin-top:1400px ">
            <div class="titlee" >Vat Declaration</div>
            <div class="contentt">
            <form action="#" method="POST" autocomplete="off">
                <div class="user-detailss">
                  <div class="input-boxx">
                    <span class="details"><h4>TIN_No</h4></span>
                    <input type="text"  value="<?php echo $rows['TIN_No']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Declaration Date</h4></span>
                    <input  value="<?php echo $rows['declaration_date']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Vat return type</h4></span>
                    <input value="<?php echo $rows['vat_return_type']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Tax period</h4></span>
                    <input  value="<?php echo $rows['tax_period']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Name of registerd organization or tax payer</h4></span>
                    <input   value="<?php echo $rows['name_of_registerd_organization_or_tax_payer']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Vat registration number</h4></span>
                    <input   value="<?php echo $rows['vat_registration_number']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Agent TIN</h4></span>
                    <input value="<?php echo $rows['agent_TIN']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Organization TIN</h4></span>
                    <input value="<?php echo $rows['organization_TIN']; ?>" readonly>
                  </div>
              </form>
            </div>
          </div>
        <?php}?>




        <div class="containerr"style="margin-top:-100px ">
            <div class="titlee" > Computation Of Output TAX</div>
            <div class="contentt">
            <form action="#" method="POST" autocomplete="off">
                <div class="user-detailss">
                  <div class="input-boxx">
                    <span class="details"><h4>TIN No</h4></span>
                    <input type="text"  value="<?php echo $rows['taxable_sales']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Declaration Date</h4></span>
                    <input  value="<?php echo $rows['zero_rated_sales']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Tax exempt sales</h4></span>
                    <input value="<?php echo $rows['tax_exempt_sales']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Services subject to reverse taxation</h4></span>
                    <input  value="<?php echo $rows['services_subject_to_reverse_taxation']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Tax adjustments with debet for suppliers</h4></span>
                    <input   value="<?php echo $rows['tax_adjustments_with_debet_for_suppliers']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Tax adjustments with credit for suppliers</h4></span>
                    <input   value="<?php echo $rows['tax_adjustments_with_credit_for_suppliers']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Output sales</h4></span>
                    <input value="<?php echo $rows['output_sales']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Total sales</h4></span>
                    <input value="<?php echo $rows['total_sales']; ?>" required>
                  </div>
                  
              </form>
            </div>
          </div>
        <?php}?>






        <div class="containerr"style="margin-top:-100px ">
            <div class="titlee" >Capital Asset Purchase</div>
            <div class="contentt">
            <form action="#" method="POST" autocomplete="off">
                <div class="user-detailss">
                  <div class="input-boxx">
                    <span class="details"><h4>Local purchase capital assets</h4></span>
                    <input type="text"  value="<?php echo $rows['local_purchase_capital_assets']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Imported capital assets purchase</h4></span>
                    <input  value="<?php echo $rows['imported_capital_assets_purchase']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Purchase with no VAT or unclaimed input</h4></span>
                    <input value="<?php echo $rows['purchase_with_no_VAT_or_unclaimed_input']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Input vat</h4></span>
                    <input  value="<?php echo $rows['input_vat']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Total capital assets</h4></span>
                    <input   value="<?php echo $rows['total_capital_assets']; ?>" required>
                  </div>
              </form>
            </div>
          </div>
        <?php}?>




        <div class="containerr"style="margin-top:-100px ">
            <div class="titlee" >Non Capital Asset Purchase</div>
            <div class="contentt">
            <form action="#" method="POST" autocomplete="off">
                <div class="user-detailss">
                
                  <div class="input-boxx">
                    <span class="details"><h4>Local purchase input</h4></span>
                    <input   value="<?php echo $rows['local_purchase_input']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Imported purchase input</h4></span>
                    <input type="text"  value="<?php echo $rows['imported_purchase_input']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>General expense input purchase</h4></span>
                    <input type="text"  value="<?php echo $rows['general_expense_input_purchase']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Purchas with no VAT or unclaimed input</h4></span>
                    <input type="text"  value="<?php echo $rows['purchas_with_no_VAT_or_unclaimed_input']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Deductible on VAT teverse taxation</h4></span>
                    <input type="text"  value="<?php echo $rows['deductible_on_VAT_teverse_taxation']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Tax adjustment with debet not for buyers</h4></span>
                    <input  value="<?php echo $rows['tax_adjustment_with_debet_not_for_buyers']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Tax adjustment with credit not for buyers</h4></span>
                    <input value="<?php echo $rows['tax_adjustment_with_credit_not_for_buyers']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Total input</h4></span>
                    <input  value="<?php echo $rows['total_input']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Vat on government voucher</h4></span>
                    <input   value="<?php echo $rows['vat_on_government_voucher']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>VAT due for month</h4></span>
                    <input   value="<?php echo $rows['VAT_due_for_month']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>VAT credit for yhe month</h4></span>
                    <input value="<?php echo $rows['VAT_credit_for_yhe_month']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Credit carried forward from previus month</h4></span>
                    <input value="<?php echo $rows['credit_carried_forward_from_previus_month']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Amount of VAT to be paid</h4></span>
                    <input value="<?php echo $rows['amount_of_VAT_to_be_paid']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Credit available for carry forward</h4></span>
                    <input value="<?php echo $rows['credit_available_for_carry_forward']; ?>" required>
                  </div>
                  
                  <div class="buttonn">
                <a href="tax_declarations.php"><input type="" class="back" name="submit" value="Back"></a>
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