
<?php
require 'config.php';
include("dashboard.php");
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $TIN_NO = $_POST["TIN_NO"];
  $name_of_registerd_orgainization_or_tax_payer = $_POST["name_of_registerd_orgainization_or_tax_payer"];
  $tax_registaration_number = $_POST["tax_registaration_number"];
  $document_number = $_POST["document_number"];
  $region = $_POST["region"];
  $zone = $_POST["zone"];
  $kebele = $_POST["kebele"];
  $pnumber = $_POST["pnumber"];
  $name_of_tax_collector_office = $_POST["name_of_tax_collector_office"];
  $payment_period = $_POST["payment_period"];
  $type_of_item_or_service = $_POST["type_of_item_or_service"];
  $taxable_incomes = $_POST["taxable_incomes"];
  $types_of_item_or_service = $_POST["types_of_item_or_service"];
  $taxable_income = $_POST["taxable_income"];
  $total_two_percent_turnover_taxable_income = $_POST["total_two_percent_turnover_taxable_income"];
  $total_ten_percent_turnover_taxable_income = $_POST["total_ten_percent_turnover_taxable_income"];
  $two_percent_turnover_tax = $_POST["two_percent_turnover_tax"];
  $ten_percent_turnover_tax = $_POST["ten_percent_turnover_tax"];
  $total = $_POST["total"];
  $full_name = $_POST["full_name"];
  $date = $_POST["date"];
  $office_name = $_POST["office_name"];
  $dates = $_POST["dates"];




  $duplicate = mysqli_query($conn, "SELECT * FROM tot_declaration WHERE TIN_NO = '$TIN_NO'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('TIN NO Already exit'); </script>";
  }
  else{

   $query=mysqli_query($conn,"SELECT * from response where customer_id = '".$_SESSION["customer_id"]."' ");
  $rows=mysqli_fetch_array($query);
    
  $officer_id = $rows['officer_id'];
 
    $registerdby = $_SESSION["customer_id"];

      $query = "INSERT INTO tot_declaration (TIN_NO, name_of_registerd_orgainization_or_tax_payer, tax_registaration_number, document_number, 
      region, zone,kebele, pnumber, name_of_tax_collector_office, payment_period, type_of_item_or_service, taxable_incomes, 
      types_of_item_or_service, taxable_income, total_two_percent_turnover_taxable_income,total_ten_percent_turnover_taxable_income,
      two_percent_turnover_tax,ten_percent_turnover_tax, total , full_name, date, office_name, dates, customer_id, officer_id) 
      VALUES ('$TIN_NO','$name_of_registerd_orgainization_or_tax_payer','$tax_registaration_number','$document_number',
      '$region','$zone','$kebele','$pnumber','$name_of_tax_collector_office','$payment_period','$type_of_item_or_service','$taxable_incomes',
      '$types_of_item_or_service','$taxable_income', '$total_two_percent_turnover_taxable_income' , '$total_ten_percent_turnover_taxable_income',
      '$two_percent_turnover_tax', '$ten_percent_turnover_tax', '$total', '$full_name', '$date', '$office_name', '$dates','$registerdby','$officer_id')";
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
                else if(document.getElementById('noto').value == "") {
                    alert ('Please enter the Date');
                    document.getElementById('noto').style.borderColor = "red";
                    document.usertable.noto.focus();
                    return false; 
                }

                else if(document.getElementById('trn').value == "") {
                    alert ('Please enter vat return type');
                    document.getElementById('trn').style.borderColor = "red";
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
        
              if(document.getElementById('full').value == "") {
                    alert ('Please enter Local purchase input');
                    document.getElementById('full').style.borderColor = "red";
                    document.usertable.full.focus();
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
         
          else {
              return true;
          }
      }
      
 </script>              
           
</head>
<body>
   
<div class="container" >
<div class="ww"><b>Turn Over Tax/TOT Declaration</b></div>
      <div class="progress-bar">
    
        <div class="step">
          <p>TAX PAYER INFORMATION</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>DETALIL INFORMATION</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>TURNOVER TAX CALCULATION</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>PROOF OF AUTHENTICITY</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form action="#" method="POST" autocomplete="off" name="usertable">
          <div class="page slide-page">
          <div class="titles">PAGE 1 OF 4</div>
            
          <div class="field">
              <div class="label">TIN_NO/</div>
              <input id="TIN_No" type="number" name="TIN_NO" placeholder="" >
              
            </div>
            <div class="field">
              <div class="label">NAME OF REGISTERD ORGANIZATION/TAX PAYER</div>
              <input id="noto" type="text" name="name_of_registerd_orgainization_or_tax_payer" placeholder="" >
            </div>
            <div class="field">
              <div class="label">TAX REGISTRATION NUMBER</div>
              <input id="trn" type="number" name="tax_registaration_number" placeholder=""  >
            </div>
            <div class="field">
              <div class="label">DOCUMENT NUMBER</div>
              <input type="number" name="document_number" placeholder="" >
            </div>
            <div class="field">
              <div class="label" >REGION</div>
              <input type="text" name="region" placeholder="" >
            </div>         
            <div class="field">
              <div class="label">ZONE</div>
              <input type="text" name="zone" placeholder="" >
            </div>
            <div class="field">
              <div class="label">KEBELE</div>
              <input type="number" name="kebele" placeholder="" >
            </div>
            <div class="field">
              <div class="label">PHONE NUMBER</div>
              <input type="number" name="pnumber" placeholder="" >
            </div>
            <div class="field">
              <div class="label">NAME OF TAX COLLECTOR OFFICE</div>
              <input type="text" name="name_of_tax_collector_office" placeholder="" >
            </div>
            <div class="field">
              <div class="label">PAYMENT PERID</div>
              <input type="DATE" name="payment_period" placeholder="" >
            </div>
            
            <div class="field">
            <button onclick="return one();" type = "submit" class="firstNext next" >Next</button>
            </div>
          </div>





          <div class="page">
          <div class="titles"><h3> IDENTIFY 2% AND 10% TERNOVER PAID GOODS AND SERVICES</h3></div>
          <div class="titles">2% TURNOVER TAX PAYMENT</div>
            <div class="field">
              <div class="label">TYPE OF ITEM OR SERVICE</div>
              <input type="text" name="type_of_item_or_service" placeholder=" " >
            </div>       
            <div class="field">
              <div class="label">TAXABLE INCOME</div>
              <input type="number" name="taxable_incomes" placeholder="">
            </div>
            <div class="titles">10% TURNOVER TAX PAYMENT</div>
            <div class="field">
              <div class="label">TYPE OF ITEM OR SERVICE</div>
              <input type="text" name="types_of_item_or_service" placeholder="">
            </div>
            <div class="field">
              <div class="label">TAXABLE INCOME</div>
              <input type="number" name="taxable_income" placeholder="">
            </div>
            
            <div class="field btns">
              <button class="prev-1 prev">Previous</button>
              
            </div>
            <div class="field btns">
              
              <button class="next-1 next">Next</button>
            </div>
          </div>




          <div class="page">
          <div class="titles">PAGE 3 OF 4</div>
            <div class="field">
              <div class="label">TOTAL 2% TURNOVER TAXABLE INCOME</div>
              <input type="number" name="total_two_percent_turnover_taxable_income" placeholder=" " >
            </div>
            <div class="field">
              <div class="label">TOTAL 10% TURNOVER TAXABLE INCOME</div>
              <input type="number" name="total_ten_percent_turnover_taxable_income" placeholder=" " >
            </div>
            <div class="field">
              <div class="label">2% TURNOVER TAX</div>
              <input type="number" name="two_percent_turnover_tax" placeholder=" " >
            </div>
            <div class="field">
              <div class="label">10% TURNOVER</div>
              <input type="number" name="ten_percent_turnover_tax" placeholder=" " >
            </div>
            <div  id="play" class="field">
              <div class="label">TOTAL</div>
              <input type="number" name="total" placeholder="" >
            </div>    
                    
            <div class="field">
              <div id="display" class="label">input_vat</div>
              <input  id="display" type="number" placeholder=" " >
            </div> 
            <div class="field btns">
              <button class="prev-2 prev">Previous</button>
              
            </div>
            <div class="field btnS">
              <button class= "next-2 next" name="submit"  >Next</button>
            </div>
          </div>




          <div class="page">
          <div class="titles">PAGE 4 OF 4</div>
          <div class="titles"> 
          <h3>I certify that the above notice and all the information provided are complete and accurate. <br> 
              I understand that providing false information is punishable <br> by both tax laws and criminal law</h3></div>
              <div class="titles">TAX PAYER</div>
              <div class="field">
              <div class="label">FULL NAME</div>
              <input id="full" type="text" name="full_name" placeholder="" required>
            </div>
            <div class="field">
              <div class="label">DATE</div>
              <input type="date" name="date" placeholder="" required>
            </div>
            <div class="titles">TAX REVENUE OFFICE</div>
            <div class="field">
              <div class="label">NAME</div>
              <input type="text" name="office_name" placeholder="  " required>
            </div>
            <div class="field">
              <div class="label">DECLARED BY</div>
              <input type="date" name="dates" placeholder=" " required>
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

          



        </form>
      </div>
    </div>
    <script src="script.js"></script>

        

        
        
</body>
</html>