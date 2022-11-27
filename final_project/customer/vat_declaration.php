
<?php
require 'config.php';
include("dashboard.php");
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
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
  $dd="";
  $tin="";
             
  $query="SELECT * FROM vat_declaration where customer_id= '".$_SESSION["customer_id"]."'";
  $result= mysqli_query($conn,$query);
  
 while($rows=mysqli_fetch_assoc($result)){  
  $dd=$rows['tax_period'];
  $tin=$rows['TIN_No'];
 }
 
  if($dd == $date || $tin ==  $TIN_No){
    echo
    "<script> alert('These month Already declared'); </script>";
  }

else{

  $query=mysqli_query($conn,"SELECT * from customer where customer_id = '".$_SESSION["customer_id"]."' ");
  $rows=mysqli_fetch_array($query);
  $officer_id = $rows['officer_id'];
 
    $registerdby = $_SESSION["customer_id"];

      $query = "INSERT INTO vat_declaration (TIN_No, declaration_date, vat_return_type, tax_period, name_of_registerd_organization_or_tax_payer, 
      vat_registration_number,agent_TIN, organization_TIN, schedule	, taxable_sales, zero_rated_sales, tax_exempt_sales, services_subject_to_reverse_taxation, 
      tax_adjustments_with_debet_for_suppliers,tax_adjustments_with_credit_for_suppliers,output_sales, total_sales, local_purchase_capital_assets, 
      imported_capital_assets_purchase, purchase_with_no_VAT_or_unclaimed_input,input_vat, total_capital_assets, local_purchase_input, 
      imported_purchase_input, general_expense_input_purchase, purchas_with_no_VAT_or_unclaimed_input,
      deductible_on_VAT_teverse_taxation,tax_adjustment_with_debet_not_for_buyers,
      tax_adjustment_with_credit_not_for_buyers, total_input, vat_on_government_voucher, VAT_due_for_month, VAT_credit_for_yhe_month, 
      credit_carried_forward_from_previus_month, amount_of_VAT_to_be_paid, credit_available_for_carry_forward, customer_id, officer_id) 
      VALUES ('$TIN_No', '$date','$vat_return_type','$date','$name_of_registerd_organization_or_tax_payer','$vat_registration_number','$agent_TIN',
      '$organization_TIN', '$schedule	','$taxable_sales','$zero_rated_sales','$tax_exempt_sales','$services_subject_to_reverse_taxation','$tax_adjustments_with_debet_for_suppliers',
      '$tax_adjustments_with_credit_for_suppliers','$output_sales','$total_sales','$local_purchase_capital_assets','$imported_capital_assets_purchase',
      '$purchase_with_no_VAT_or_unclaimed_input','$input_vat','$total_capital_assets','$local_purchase_input','$imported_purchase_input',
      '$general_expense_input_purchase','$purchas_with_no_VAT_or_unclaimed_input',
      '$deductible_on_VAT_teverse_taxation','$tax_adjustment_with_debet_not_for_buyers',
      '$tax_adjustment_with_credit_not_for_buyers','$total_input','$vat_on_government_voucher','$VAT_due_for_month','$VAT_credit_for_yhe_month',
      '$credit_carried_forward_from_previus_month','$amount_of_VAT_to_be_paid','$credit_available_for_carry_forward','$registerdby', '$officer_id')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
  }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/style1.css">

    <title>Customer page</title>


    <script type="text/javascript">
      
      function one() {
                var letter = /^[A-Za-z]+$/;
                var number = /^[0-9]+$/;
                var length = '10';
                var minlength = '3';
                var date = /\d{4}-\d{2}-\d{2}/;
                var decimalnum = /^\d+\.\d{0,2}$/;
                var emailvalidate = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
             

               if (document.getElementById('TIN_No').value == "") {
                    alert ('Please Enter Your TIN NO');
                    document.getElementById('TIN_No').style.borderColor = "red";
                    document.usertable.TIN_No.focus();
                    return false; 
                }
                else if(document.getElementById('date').value == "") {
                    alert ('Please enter the Date');
                    document.getElementById('date').style.borderColor = "red";
                    document.usertable.date.focus();
                    return false; 
                }

                else if(document.getElementById('vrt').value == "") {
                    alert ('Please enter vat return type');
                    document.getElementById('vrt').style.borderColor = "red";
                    document.usertable.vrt.focus();
                    return false; 
                }
                
                else if(document.getElementById('oname').value == "") {
                    alert ('Please enter the organization or tax payer name');
                    document.getElementById('oname').style.borderColor = "red";
                    document.usertable.oname.focus();
                    return false; 
                }
               
                else if(document.getElementById('vrn').value == "") {
                    alert ('Please enter vat registartion number');
                    document.getElementById('vrn').style.borderColor = "red";
                    document.usertable.vrn.focus();
                    return false; 
                }
                
                else if(document.getElementById('agent_tin').value == "") {
                    alert ('Please Enter Agent TIN  ');
                    document.getElementById('agent_tin').style.borderColor = "red";
                    document.usertable.agent_tin.focus();
                    return false; 
                }
               
                else if(document.getElementById('org_tin').value == "") {
                    alert ('Please enater Organization TIN');
                    document.getElementById('org_tin').style.borderColor = "red";
                    document.usertable.org_tin.focus();
                    return false; 
                }
                
               else {
                   return true;
               }
           }
           function two() {
                var letter = /^[A-Za-z]+$/;
                var number = /^[0-9]+$/;
                var length = '10';
                var minlength = '3';
                var date = /\d{4}-\d{2}-\d{2}/;
                var decimalnum = /^\d+\.\d{0,2}$/;
                var emailvalidate = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;



              if(document.getElementById('taxable_sales').value == "") {
                    alert ('Please enter Taxable Sales');
                    document.getElementById('taxable_sales').style.borderColor = "red";
                    document.usertable.taxable_sales.focus();
                    return false; 
                }
               
                else if(document.getElementById('zrs').value == "") {
                    alert ('Please enter zero rated sales');
                    document.getElementById('zrs').style.borderColor = "red";
                    document.usertable.zrs.focus();
                    return false; 
                }
                
                else if(document.getElementById('tes').value == "") {
                    alert ('Please enter Tax exempt sales');
                    document.getElementById('tes').style.borderColor = "red";
                    document.usertable.tes.focus();
                    return false; 
                }
               
                else if(document.getElementById('sstrt').value == "") {
                    alert ('Please enter service subjects to reverse taxation ');
                    document.getElementById('sstrt').style.borderColor = "red";
                    document.usertable.sstrt.focus();
                    return false; 
                }
               
                else if(document.getElementById('tawdfs').value == "") {
                    alert ('Please enter tax adustment with debet for suppliers');
                    document.getElementById('tawdfs').style.borderColor = "red";
                    document.usertable.tawdfs.focus();
                    return false; 
                }
               
                else if(document.getElementById('tawcfs').value == "") {
                    alert ('Please enter tax adustment with debet for suppliers');
                    document.getElementById('tawcfs').style.borderColor = "red";
                    document.usertable.tawcfs.focus();
                    return false; 
                }
               
                else if(document.getElementById('output_sales').value == "") {
                    alert ('Please enter Output sales');
                    document.getElementById('output_sales').style.borderColor = "red";
                    document.usertable.output_sales.focus();
                    return false; 
                }
                
                else if(document.getElementById('total_sales').value == "") {
                    alert ('Please enter Total sales');
                    document.getElementById('total_sales').style.borderColor = "red";
                    document.usertable.total_sales.focus();
                    return false; 
                }
              
          else {
              return true;
          }
      }
      function three() {
                var letter = /^[A-Za-z]+$/;
                var number = /^[0-9]+$/;
                var date = /\d{4}-\d{2}-\d{2}/;
           
              if(document.getElementById('lpca').value == "") {
                    alert ('Please enter Local purchase capital assets');
                    document.getElementById('lpca').style.borderColor = "red";
                    document.usertable.lpca.focus();
                    return false; 
                }
                
                else if(document.getElementById('icap').value == "") {
                    alert ('Please enter Imported capital asset purchase');
                    document.getElementById('icap').style.borderColor = "red";
                    document.usertable.icap.focus();
                    return false; 
                }
                
                else if(document.getElementById('pwnv').value == "") {
                    alert ('Please enter Purchase with no vat');
                    document.getElementById('pwnv').style.borderColor = "red";
                    document.usertable.pwnv.focus();
                    return false; 
                }
               
                else if(document.getElementById('input_vat').value == "") {
                    alert ('Please enter Input vat ');
                    document.getElementById('input_vat').style.borderColor = "red";
                    document.usertable.input_vat.focus();
                    return false; 
                }
               
                else if(document.getElementById('tca').value == "") {
                    alert ('Please enter Total capital asset');
                    document.getElementById('tca').style.borderColor = "red";
                    document.usertable.tca.focus();
                    return false; 
                }
               
                else if(document.getElementById('taxable_sales').value == "") {
                    alert ('Please enter tax adustment with debet for suppliers');
                    document.getElementById('taxable_sales').style.borderColor = "red";
                    document.usertable.taxable_sales.focus();
                    return false; 
                }
              
          else {
              return true;
          }
      }

      function four() {
                var letter = /^[A-Za-z]+$/;
                var number = /^[0-9]+$/;
                var date = /\d{4}-\d{2}-\d{2}/;
        
              if(document.getElementById('lpi').value == "") {
                    alert ('Please enter Local purchase input');
                    document.getElementById('lpi').style.borderColor = "red";
                    document.usertable.lpi.focus();
                    return false; 
                }
                
                else if(document.getElementById('ipi').value == "") {
                    alert ('Please enter Imported putchase input');
                    document.getElementById('ipi').style.borderColor = "red";
                    document.usertable.ipi.focus();
                    return false; 
                }
                
                else if(document.getElementById('geip').value == "") {
                    alert ('Please enter General expense input purchase');
                    document.getElementById('geip').style.borderColor = "red";
                    document.usertable.geip.focus();
                    return false; 
                }
               
                else if(document.getElementById('pwnv').value == "") {
                    alert (' Please enter Purchase with no vat');
                    document.getElementById('pwnv').style.borderColor = "red";
                    document.usertable.pwnv.focus();
                    return false; 
                }


               
                else if(document.getElementById('dovtt').value == "") {
                    alert ('Please enter Deductive on VAT reverse taxation');
                    document.getElementById('dovtt').style.borderColor = "red";
                    document.usertable.dovtt.focus();
                    return false; 
                }
               
                else if(document.getElementById('tawdnfb').value == "") {
                    alert ('Please enter Tax adustment with debet not for buyers');
                    document.getElementById('tawdnfb').style.borderColor = "red";
                    document.usertable.tawdnfb.focus();
                    return false; 

                }else if(document.getElementById('tawcnfb').value == "") {
                    alert ('Please enter Tax adustment with credit not for buyers');
                    document.getElementById('tawcnfb').style.borderColor = "red";
                    document.usertable.tawcnfb.focus();
                    return false; 
                }
               
                else if(document.getElementById('total_input').value == "") {
                    alert ('Please enter Total input');
                    document.getElementById('total_input').style.borderColor = "red";
                    document.usertable.total_input.focus();
                    return false; 
                }
                else if(document.getElementById('vogv').value == "") {
                    alert ('Please enter Vat on government voucher');
                    document.getElementById('vogv').style.borderColor = "red";
                    document.usertable.vogv.focus();
                    return false; 
                }
                else if(document.getElementById('vdfm').value == "") {
                    alert ('Please enter Vat due for month');
                    document.getElementById('vdfm').style.borderColor = "red";
                    document.usertable.vdfm.focus();
                    return false; 
                }
                else if(document.getElementById('vcftm').value == "") {
                    alert ('Please enter Vat credit for the month');
                    document.getElementById('vcftm').style.borderColor = "red";
                    document.usertable.vcftm.focus();
                    return false; 
                }
                else if(document.getElementById('crffom').value == "") {
                    alert ('Please enter credit ceried forward from preius month');
                    document.getElementById('crffom').style.borderColor = "red";
                    document.usertable.crffom.focus();
                    return false; 
                }
    
                else if(document.getElementById('aovtp').value == "") {
                    alert ('Please enter Amount of vat to be paid');
                    document.getElementById('aovtp').style.borderColor = "red";
                    document.usertable.aovtp.focus();
                    return false; 
                }
                else if(document.getElementById('cafcf').value == "") {
                    alert ('Please enter credit avilable for carry forward');
                    document.getElementById('cafcf').style.borderColor = "red";
                    document.usertable.cafcf.focus();
                    return false; 
                }
              
              
          else {
              return true;
          }
      }
        
 </script>              
           
</head>
<body>
   
<div class="container" >

    <div class="ww"><b>VAT DECLARATION</b></div>
      <div class="progress-bar">
    
        <div class="step">
          <p>VAT DECLARATION</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>COMPUTATION OF OUTPUT TAX</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>CAPITAL ASSET PURCHASE</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>NON CAPITAL ASSET PURCHASE</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      
      </div>
      <div class="form-outer">
        <form action="#" method="POST" autocomplete="off" name="usertable" >
          <div class="page slide-page">
          <div class="titles">PAGE 1 OF 4</div>
            
            <div class="field">
              <div class="label">TIN_NO/</div>
              <input  id="TIN_No" type="number" name="TIN_No" placeholder="Enter TIN_No" required>
            </div>
            <div class="field">
              <div class="label">DECLARATION DATE/</div>
              <input id="date" type="date" name="declaration_date" required>
            </div>
            <div class="field">
              <div class="label">VAT RETURN TYPE</div>
              <input  id="vrt" type="text" name="vat_return_type" >
            </div>
            <div class="field">
              <div class="label" >TAX PERIOD</div>
              <input type="date" name="tax_period"  >
            </div>
            <div class="field">
              <div class="label">NAME OF ORGANIZATION/TAX PAYER</div>
              <input id="oname" type="text" name="name_of_registerd_organization_or_tax_payer" " >
            </div>
            <div class="field">
              <div class="label">VAT REGISTRATION NUMBER</div>
              <input id="vrn" type="number" name="vat_registration_number" >
            </div>
            <div class="field">
              <div class="label">AGENT_TIN</div>
              <input id="agent_tin" type="number" name="agent_TIN"  >
            </div>
            <div class="field">
              <div class="label">ORGANIZATION TIN NO</div>
              <input id="org_tin" type="number" name="organization_TIN"  >
            </div>
            <div class="field">
            <div class="label">SELECT SCHEDULE</div>
            <select name="schedule" class="select" placeholder="select the schedule" >
                <option value="schedule A" name="andu">Schedule A</option>
                <option value="schedule B" name="nandu">Schedule B</option>
                <option value="schedule C" name="anndu">Schedule C</option>
            </select>
            </div>
            <div class="field" >
              <input id="display"  name="organization_TIN" placeholder="Enter your organization TIN No" >
            </div>
            
            <div class="field">
              <button onclick="return one();" type = "submit" class="firstNext next" >Next</button>
            </div>

          </div>
    
          <div class="page">
          <div class="titles">PAGE 2 OF 4</div>
            <div class="field">
              <div class="label">TAXABLE SALES</div>
              <input id="taxable_sales" type="number" name="taxable_sales" placeholder="Enter your taxable sales " >
            </div>
            <div class="field">
              <div class="label">ZERO RATED SALES</div>
              <input id="zrs" type="number" name="zero_rated_sales" placeholder="Enter your zero rated sales " >
            </div>
            <div class="field">
              <div class="label">TAX EXEMPT SALES</div>
              <input id="tes" type="number" name="tax_exempt_sales" placeholder="Enter your tax exempt sales " >
            </div>
            <div class="field">
              <div class="label">SERVICES SUBJECT TO REVERSE TAXATION</div>
              <input id="sstrt" type="number" name="services_subject_to_reverse_taxation" placeholder="Enter your services subject to reverse taxation " >
            </div>
            <div class="field">
              <div class="label">TAX AJUSTMENTS WITH DEBET FOR SUPPLIERS</div>
              <input  id="tawdfs" type="number" name="tax_adjustments_with_debet_for_suppliers" placeholder="Enter your tax adjustments with debet for suppliers " >
            </div>
            <div class="field">
              <div class="label">TAX AJUSTMENTS WITH CREDIT FOR SUPPLIERS</div>
              <input id="tawcfs" type="number" name="tax_adjustments_with_credit_for_suppliers" placeholder="Enter your tax adjustments with credit for suppliers " >
            </div>
            <div class="field">
              <div class="label">OUTPUT SALES</div>
              <input id="output_sales" type="number" name="output_sales" placeholder="Enter your output sales " >
            </div>
            <div class="field">
              <div class="label">TOTAL SALES</div>
              <input id="total_sales" type="number" name="total_sales" placeholder="Enter your total_sales">
            </div>
            
            <div class="field btns">
              <button class="prev-1 prev">Previous</button>
              
            </div>
            <div class="field btns">
              
              <button  type = "submit" onclick="return two();" class="next-1 next">Next</button>
            </div>
          </div>

          <div class="page">
          <div class="titles">PAGE 3 OF 4</div>
            <div class="field">
              <div class="label">Lcal purchase capital assets</div>
              <input id="lpca" type="number" name="local_purchase_capital_assets" placeholder="Enter your local purchase capital assets ">
            </div>
            <div class="field">
              <div class="label">Imported capital assets purchase</div>
              <input id="icap" type="number" name="imported_capital_assets_purchase" placeholder="Enter your imported capital assets purchase " >
            </div>
            <div class="field">
              <div class="label">Purchase with no VAT or unclaimed input</div>
              <input id="pwnv" type="number" name="purchase_with_no_VAT_or_unclaimed_input" placeholder="Enter your purchase with no VAT or unclaimed input ">
            </div>
            <div class="field">
              <div class="label">Input vat</div>
              <input id="input_vat" type="number" name="input_vat" placeholder="Enter your input_vat " >
            </div>
            <div class="field">
              <div class="label">Total capital assets</div>
              <input id="tca" type="number" name="total_capital_assets" placeholder="Enter your total capital assets " >
            </div>            
            <div class="field">
              <div class="label">Taxable sales</div>
              <input id="taxable_sales" type="number" name="taxable_sales" placeholder="Enter your taxable sales ">
            </div> 
            <div class="field btns">
              <button class="prev-2 prev">Previous</button>
              
            </div>
            <div class="field btns">
              
              <button type = "submit" onclick="return three();" class="next-2 next">Next</button>
            </div>
          </div>

          <div class="page">
          <div class="titles">PAGE 4 OF 4</div>
            <div class="field">
              <div class="label">Local purchase input</div>
              <input id="lpi" type="number" name="local_purchase_input" placeholder="Enter your local purchase input " >
            </div>
            <div class="field">
              <div class="label">Imported purchase input</div>
              <input id="ipi" type="number" name="imported_purchase_input" placeholder="Enter your imported purchase input " >
            </div>
            <div class="field">
              <div class="label">General expense input purchase</div>
              <input id="geip" type="number" name="general_expense_input_purchase" placeholder="Enter your general expense input purchase ">
            </div>
            <div class="field">
              <div class="label">Purchas with no VAT or unclaimed input</div>
              <input id="pwnv" type="number" name="purchas_with_no_VAT_or_unclaimed_input" placeholder="Enter your purchas with no VAT or unclaimed input " >
            </div>
            <div class="field">
              <div class="label">Deductible on VAT reverse taxation</div>
              <input id="dovtt" type="number" name="deductible_on_VAT_teverse_taxation" placeholder="Enter your deductible on VAT teverse taxation " >
            </div>
            <div class="field">
              <div class="label">Tax adjustment with debet not for buyers</div>
              <input id="tawdnfb" type="number" name="tax_adjustment_with_debet_not_for_buyers" placeholder="Enter your taxable sales " >
            </div>
            <div class="field">
              <div class="label">Tax adjustment with credit not for buyers	</div>
              <input id="tawcnfb" type="number" name="tax_adjustment_with_credit_not_for_buyers	" placeholder="Enter your tax adjustment with credit not for buyers	 ">
            </div>
            <div class="field">
              <div class="label">Total_input</div>
              <input id="total_input" type="number" name="total_input" placeholder="Enter your total_input ">
            </div>
            <div class="field">
              <div class="label">Vat on government voucher</div>
              <input id="vogv" type="number" name="vat_on_government_voucher" placeholder="Enter your vat on government voucher " >
            </div>
            <div class="field">
              <div class="label">VAT due for month</div>
              <input id="vdfm" type="number" name="VAT_due_for_month" placeholder="Enter your VAT due for month " >
            </div>
            <div class="field">
              <div class="label">VAT_credit_for_yhe_month</div>
              <input id="vcftm" type="number" name="VAT_credit_for_yhe_month" placeholder="Enter your VAT credit for the_month " >
            </div>
            <div class="field">
              <div class="label">Credit carried forward from previus month</div>
              <input id="crffom" type="number" name="credit_carried_forward_from_previus_month" placeholder="Enter your credit carried forward from previus month " >
            </div>
            <div class="field">
              <div class="label">Amount of VAT to be paid</div>
              <input id="aovtp" type="number" name="amount_of_VAT_to_be_paid" placeholder="Enter your credit amount_of_VAT_to_be_paid " >
            </div>
            <div class="field">
              <div class="label">Credit available for carry forward</div>
              <input id="cafcf" type="number" name="credit_available_for_carry_forward" placeholder="Enter your credit_available_for_carry_forward ">
            </div>
            <div class="field btns">
              <button class="prev-3 prev">Previous</button>
              
            </div>
            <div class="field btns">
        
              <button name="submit" type="submit" class="submit"  onclick="return four();">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="script.js"></script>


    
</body>
</html>