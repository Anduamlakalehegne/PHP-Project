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
        $query=mysqli_query($conn,"SELECT * from vat_declaration where customer_id ='$id' ");
        $rows=mysqli_fetch_array($query);



        if(isset($_POST["submit"])){
            $TIN_No = $_POST["TIN_No"];
            $declaration_date = $_POST["declaration_date"];
            $vat_return_type = $_POST["vat_return_type"];
            $tax_period = $_POST["tax_period"];
            $name_of_registerd_organization_or_tax_payer = $_POST["name_of_registerd_organization_or_tax_payer"];
            $vat_registration_number = $_POST["vat_registration_number"];
            $agent_TIN = $_POST["agent_TIN"];
            $organization_TIN = $_POST["organization_TIN"];
            $schedule = $_POST["schedule"];
            $taxable_sales = $_POST["taxable_sales"];
            $zero_rated_sales = $_POST["zero_rated_sales"];
            $tax_exempt_sales = $_POST["tax_exempt_sales"];
            $services_subject_to_reverse_taxation = $_POST["services_subject_to_reverse_taxation"];
            $tax_adjustments_with_debet_for_suppliers = $_POST["tax_adjustments_with_debet_for_suppliers"];
            $tax_adjustments_with_credit_for_suppliers = $_POST["tax_adjustments_with_credit_for_suppliers"];
            $output_sales = $_POST["output_sales"];
            $total_sales = $_POST["total_sales"];
            $local_purchase_capital_assets = $_POST["local_purchase_capital_assets"];
            $imported_capital_assets_purchase = $_POST["imported_capital_assets_purchase"];
            $purchase_with_no_VAT_or_unclaimed_input = $_POST["purchase_with_no_VAT_or_unclaimed_input"];
            $input_vat = $_POST["input_vat"];
            $total_capital_assets = $_POST["total_capital_assets"];
            $local_purchase_input = $_POST["local_purchase_input"];
            $imported_purchase_input = $_POST["imported_purchase_input"];
            $general_expense_input_purchase = $_POST["general_expense_input_purchase"];
            $purchas_with_no_VAT_or_unclaimed_input = $_POST["purchas_with_no_VAT_or_unclaimed_input"];
            $deductible_on_VAT_teverse_taxation = $_POST["deductible_on_VAT_teverse_taxation"];
            $tax_adjustment_with_debet_not_for_buyers = $_POST["tax_adjustment_with_debet_not_for_buyers"];
            $tax_adjustment_with_credit_not_for_buyers = $_POST["tax_adjustment_with_credit_not_for_buyers"];
            $total_input = $_POST["total_input"];
            $vat_on_government_voucher = $_POST["vat_on_government_voucher"];
            $VAT_due_for_month = $_POST["VAT_due_for_month"];
            $VAT_credit_for_yhe_month = $_POST["VAT_credit_for_yhe_month"];
            $credit_carried_forward_from_previus_month = $_POST["credit_carried_forward_from_previus_month"];
            $amount_of_VAT_to_be_paid = $_POST["amount_of_VAT_to_be_paid"];
            $credit_available_for_carry_forward = $_POST["credit_available_for_carry_forward"];
            
            $date = date("Y-m-d");
          
            $query="SELECT * FROM customer where customer_id= '".$_SESSION["customer_id"]."'";
            $res= mysqli_query($conn,$query);
            $row1=mysqli_fetch_assoc($res);
          
            $a=$row1['customer_id'];
          
            $query2="SELECT * FROM vat_declaration where customer_id= '$a'";
            $ress= mysqli_query($conn,$query2);
            $rows=mysqli_fetch_assoc($ress);
              $dd=$rows['tax_period'];
              $tin=$rows['TIN_No'];
           
            if($dd == $tax_period && $tin ==  $TIN_No){
              echo
              "<script> alert('These month Already paid'); </script>";
            }
            else{
          
              $registerdby = $_SESSION["customer_id"];
          
                $query = "INSERT INTO vat_declaration (TIN_No, declaration_date, vat_return_type, tax_period, name_of_registerd_organization_or_tax_payer, 
                vat_registration_number,agent_TIN, organization_TIN, schedule	, taxable_sales, zero_rated_sales, tax_exempt_sales, services_subject_to_reverse_taxation, 
                tax_adjustments_with_debet_for_suppliers,tax_adjustments_with_credit_for_suppliers,output_sales, total_sales, local_purchase_capital_assets, 
                imported_capital_assets_purchase, purchase_with_no_VAT_or_unclaimed_input,input_vat, total_capital_assets, local_purchase_input, 
                imported_purchase_input, general_expense_input_purchase, purchas_with_no_VAT_or_unclaimed_input,
                deductible_on_VAT_teverse_taxation,tax_adjustment_with_debet_not_for_buyers,
                tax_adjustment_with_credit_not_for_buyers, total_input, vat_on_government_voucher, VAT_due_for_month, VAT_credit_for_yhe_month, 
                credit_carried_forward_from_previus_month, amount_of_VAT_to_be_paid, credit_available_for_carry_forward, customer_id) 
                VALUES ('$TIN_No', '$date','$vat_return_type','$tax_period','$name_of_registerd_organization_or_tax_payer','$vat_registration_number','$agent_TIN',
                '$organization_TIN', '$schedule	','$taxable_sales','$zero_rated_sales','$tax_exempt_sales','$services_subject_to_reverse_taxation','$tax_adjustments_with_debet_for_suppliers',
                '$tax_adjustments_with_credit_for_suppliers','$output_sales','$total_sales','$local_purchase_capital_assets','$imported_capital_assets_purchase',
                '$purchase_with_no_VAT_or_unclaimed_input','$input_vat','$total_capital_assets','$local_purchase_input','$imported_purchase_input',
                '$general_expense_input_purchase','$purchas_with_no_VAT_or_unclaimed_input',
                '$deductible_on_VAT_teverse_taxation','$tax_adjustment_with_debet_not_for_buyers',
                '$tax_adjustment_with_credit_not_for_buyers','$total_input','$vat_on_government_voucher','$VAT_due_for_month','$VAT_credit_for_yhe_month',
                '$credit_carried_forward_from_previus_month','$amount_of_VAT_to_be_paid','$credit_available_for_carry_forward','$registerdby')";
                mysqli_query($conn, $query);
                echo
                "<script> alert('Registration Successful'); </script>";
            }
          }
          ?>

        




                                               
        <div class="containerr"style="margin-top:1400px ">
            <div class="titlee" >Vat Declaration</div>
            <div class="contentt">
            <form action="#" method="POST" autocomplete="off">
                <div class="user-detailss">
                  <div class="input-boxx">
                    <span class="details"><h4>TIN_No</h4></span>
                    <input type="text" name="TIN_No"  value="<?php echo $_POST['TIN_No']; ?>" >
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Declaration Date</h4></span>
                    <input name="declaration_date"   value="<?php echo $rows['declaration_date']; ?>" >
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Vat return type</h4></span>
                    <input name="vat_return_type"  value="<?php echo $rows['vat_return_type']; ?>" >
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Tax period</h4></span>
                    <input name="tax_period"   value="<?php echo $rows['tax_period']; ?>">
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Name of registerd organization or tax payer</h4></span>
                    <input name="name_of_registerd_organization_or_tax_payer"   value="<?php echo $rows['name_of_registerd_organization_or_tax_payer']; ?>" readonly>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Vat registration number</h4></span>
                    <input name="vat_registration_number"  value="<?php echo $rows['vat_registration_number']; ?>" >
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Agent TIN</h4></span>
                    <input name="agent_TIN"  value="<?php echo $rows['agent_TIN']; ?>" >
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Organization TIN</h4></span>
                    <input name="organization_TIN"  value="<?php echo $rows['organization_TIN']; ?>" >
                  </div>
                  <?php}?>
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
                    <input name="taxable_sales" type="text"  value="<?php echo $rows['taxable_sales']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Declaration Date</h4></span>
                    <input name="zero_rated_sales" value="<?php echo $rows['zero_rated_sales']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Tax exempt sales</h4></span>
                    <input name="tax_exempt_sales" value="<?php echo $rows['tax_exempt_sales']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Services subject to reverse taxation</h4></span>
                    <input  name="services_subject_to_reverse_taxation" value="<?php echo $rows['services_subject_to_reverse_taxation']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Tax adjustments with debet for suppliers</h4></span>
                    <input name="tax_adjustments_with_debet_for_suppliers"  value="<?php echo $rows['tax_adjustments_with_debet_for_suppliers']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Tax adjustments with credit for suppliers</h4></span>
                    <input name="tax_adjustments_with_credit_for_suppliers"  value="<?php echo $rows['tax_adjustments_with_credit_for_suppliers']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Output sales</h4></span>
                    <input name="output_sales" value="<?php echo $rows['output_sales']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Total sales</h4></span>
                    <input name="total_sales" value="<?php echo $rows['total_sales']; ?>" required>
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
                    <input name="local_purchase_capital_assets" type="text"  value="<?php echo $rows['local_purchase_capital_assets']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Imported capital assets purchase</h4></span>
                    <input  name="imported_capital_assets_purchase" value="<?php echo $rows['imported_capital_assets_purchase']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Purchase with no VAT or unclaimed input</h4></span>
                    <input name="purchase_with_no_VAT_or_unclaimed_input" value="<?php echo $rows['purchase_with_no_VAT_or_unclaimed_input']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Input vat</h4></span>
                    <input name="input_vat"  value="<?php echo $rows['input_vat']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Total capital assets</h4></span>
                    <input name="total_capital_assets"   value="<?php echo $rows['total_capital_assets']; ?>" required>
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
                    <input name="local_purchase_input"   value="<?php echo $rows['local_purchase_input']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Imported purchase input</h4></span>
                    <input name="imported_purchase_input" type="text"  value="<?php echo $rows['imported_purchase_input']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>General expense input purchase</h4></span>
                    <input name="general_expense_input_purchase" type="text"  value="<?php echo $rows['general_expense_input_purchase']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Purchas with no VAT or unclaimed input</h4></span>
                    <input name="purchas_with_no_VAT_or_unclaimed_input" type="text"  value="<?php echo $rows['purchas_with_no_VAT_or_unclaimed_input']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Deductible on VAT teverse taxation</h4></span>
                    <input name="deductible_on_VAT_teverse_taxation" type="text"  value="<?php echo $rows['deductible_on_VAT_teverse_taxation']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Tax adjustment with debet not for buyers</h4></span>
                    <input name="tax_adjustment_with_debet_not_for_buyers"   value="<?php echo $rows['tax_adjustment_with_debet_not_for_buyers']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Tax adjustment with credit not for buyers</h4></span>
                    <input name="tax_adjustment_with_credit_not_for_buyers" value="<?php echo $rows['tax_adjustment_with_credit_not_for_buyers']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Total input</h4></span>
                    <input name="total_input"  value="<?php echo $rows['total_input']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Vat on government voucher</h4></span>
                    <input name="vat_on_government_voucher" value="<?php echo $rows['vat_on_government_voucher']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>VAT due for month</h4></span>
                    <input name="VAT_due_for_month"  value="<?php echo $rows['VAT_due_for_month']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>VAT credit for yhe month</h4></span>
                    <input name="VAT_credit_for_yhe_month" value="<?php echo $rows['VAT_credit_for_yhe_month']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Credit carried forward from previus month</h4></span>
                    <input name="credit_carried_forward_from_previus_month" value="<?php echo $rows['credit_carried_forward_from_previus_month']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Amount of VAT to be paid</h4></span>
                    <input name="amount_of_VAT_to_be_paid" value="<?php echo $rows['amount_of_VAT_to_be_paid']; ?>" required>
                  </div>
                  <div class="input-boxx">
                    <span class="details"><h4>Credit available for carry forward</h4></span>
                    <input name="credit_available_for_carry_forward" value="<?php echo $rows['credit_available_for_carry_forward']; ?>" required>
                  </div>
                  
                  <div class="buttonn">
                <a href="manage_tax_declaration.php"><input type="" class="back" name="submit" value="Back"></a>
                </div>
              </form>
            </div>
          </div>
        <?php}}?>
            
                  
              </form>
            </div>
          </div>
        <?php}?>






        
        
        
   
</body>
</html>