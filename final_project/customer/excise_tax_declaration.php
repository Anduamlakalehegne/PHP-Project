
<?php
require 'config.php';
include("dashboard.php");
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $TIN_No = $_POST["TIN_No"];
  $declaration_date = $_POST["declaration_date"];
  $excise_tax_registraion_number = $_POST["excise_tax_registraion_number"];
  $tax_period = $_POST["tax_period"];
  $name_of_organization_or_tax_payer = $_POST["name_of_organization_or_tax_payer"];
  $agent_TIN = $_POST["agent_TIN"];
  $organization_TIN = $_POST["organization_TIN"];
  $schedule = $_POST["schedule"];
  $excise_tax_on_taxable_goods = $_POST["excise_tax_on_taxable_goods"];
  $excise_tax_credit_for_the_month = $_POST["excise_tax_credit_for_the_month"];
  $net_amount_to_be_paid = $_POST["net_amount_to_be_paid"];
  $dates = $_POST["dates"];
  $amount_of_sales_for_the_month = $_POST["amount_of_sales_for_the_month"];
  $type_of_product = $_POST["type_of_product"];
  $quantity = $_POST["quantity"];
  $declaration_number = $_POST["declaration_number"];
  $excise_tax_credit_forwared_frome_previus_month = $_POST["excise_tax_credit_forwared_frome_previus_month"];
  $excise_tax_amount_paid_on_input = $_POST["excise_tax_amount_paid_on_input"];
  $excise_tax_credit_avilable_for_next_month = $_POST["excise_tax_credit_avilable_for_next_month"];
  $purchase_invoice = $_POST["purchase_invoice"];
  $seller_TIN = $_POST["seller_TIN"];
  $types_of_product = $_POST["types_of_product"];
  $quantitys = $_POST["quantitys"];
  $value = $_POST["value"];
  $excise_tax = $_POST["excise_tax"];
  $fullname = $_POST["fullname"];
  $detes = $_POST["detes"];
  $office_name = $_POST["office_name"];
  $TIN_No = $_POST["TIN_No"];
  $TIN_No = $_POST["TIN_No"];
  
  $registerdby = $_SESSION["customer_id"];



  $duplicate = mysqli_query($conn, "SELECT * FROM excise_tax_declaration WHERE TIN_No = '$TIN_No'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('TIN NO Already exit'); </script>";
  }
  else{
      $query = "INSERT INTO excise_tax_declaration (TIN_No, declaration_date, excise_tax_registraion_number, tax_period, name_of_organization_or_tax_payer, 
       agent_TIN, organization_TIN, schedule, excise_tax_on_taxable_goods, excise_tax_credit_for_the_month, net_amount_to_be_paid, 
       dates, amount_of_sales_for_the_month, type_of_product, quantity, declaration_number, excise_tax_credit_forwared_frome_previus_month, 
       excise_tax_amount_paid_on_input, excise_tax_credit_avilable_for_next_month, purchase_invoice, seller_TIN, types_of_product, quantitys,
       value, excise_tax, fullname, detes, office_name, customer_id ) 
      VALUES ('$TIN_No','$declaration_date','$excise_tax_registraion_number','$tax_period','$name_of_organization_or_tax_payer',
      '$agent_TIN','$organization_TIN','$schedule','$excise_tax_on_taxable_goods','$excise_tax_credit_for_the_month',
      '$net_amount_to_be_paid','$dates','$amount_of_sales_for_the_month','$type_of_product', '$quantity' , '$declaration_number',
      '$excise_tax_credit_forwared_frome_previus_month', '$excise_tax_amount_paid_on_input', '$excise_tax_credit_avilable_for_next_month',
       '$purchase_invoice', '$seller_TIN', '$types_of_product', '$quantitys', '$value', '$excise_tax', '$fullname', '$detes', '$office_name', '$date', $registerdby)";
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
</head>
<body>
   
<div class="container" >
<div class="ww"><b>Excise Tax Declaration</b></div>
      <div class="progress-bar">
    
        <div class="step">
          <p>Tax Payer Information</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Monthly Off-Set For Exise Tax </p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Excise Tax Paid On Row Material</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Proof Of Authenticity</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form action="#" method="POST" autocomplete="off">
          <div class="page slide-page">
          <div class="titles">PAGE 1 OF 4</div>
            
          <div class="field">
              <div class="label">TIN_NO/የግብር መለያ ቁትር</div>
              <input type="number" name="TIN_No" placeholder="" required>
            </div>
            <div class="field">
              <div class="label">DECLARATION DATE/የምዝገባ ቀን</div>
              <input type="date" name="declaration_date"  placeholder="" required >
            </div>
            <div class="field">
              <div class="label">EXCISE TAX REGISTRATION NUMBER</div>
              <input type="number" name="excise_tax_registraion_number" placeholder="" required >
            </div>
            <div class="field">
              <div class="label" >TAX PERIOD</div>
              <input type="date" name="tax_period" placeholder="" required >
            </div>
            <div class="field">
              <div class="label">NAME OF ORGANIZATION/TAX PAYER</div>
              <input type="text" name="name_of_organization_or_tax_payer" placeholder="" required >
            </div>
            <div class="field">
              <div class="label">AGENT_TIN</div>
              <input type="number" name="agent_TIN" placeholder="" required >
            </div>
            <div class="field">
              <div class="label">ORGANIZATION TIN NO</div>
              <input type="number" name="organization_TIN" placeholder="" required >
            </div>
            <div class="field">
            <div class="label">SELECT SCHEDULE</div>
            <select name="schedule" class="select" placeholder="select the schedule" >
                <option value="schedule A" name="andu">Schedule A</option>
                <option value="schedule B" name="nandu">Schedule B</option>
                <option value="schedule C" name="anndu">Schedule C</option>
            </select>
            </div>
            <br>
            <br>
            <br>
            <div class="titles">EXISE TAX DECLARATION</div>
            <div class="field">
              <div class="label">EXCISE TAX ON TAXABLE GOODS</div>
              <input type="number" name="excise_tax_on_taxable_goods" placeholder="" required >
            </div>
            <div class="field">
              <div class="label">EXCISE TAX CREDIT FOR THE MONTH</div>
              <input type="number" name="excise_tax_credit_for_the_month" placeholder="" required >
            </div>
            <div class="field">
              <div class="label">NET AMOUNT TO BE PAID</div>
              <input type="number" name="organization_TIN" placeholder="" required >
            </div>
            <div class="field" >
              <input  id="display" type="text" name="organization_TIN" placeholder="" required >
            </div>

            
            <div class="field">
              <button class="firstNext next" >Next</button>
            </div>
          </div>





          <div class="page">
            <div class="field">
              <div class="label">DATE</div>
              <input type="date" name="dates" placeholder=" " >
            </div>       
            <div class="field">
              <div class="label">AMOUNT OF SALES FOR MONTH</div>
              <input type="number" name="amount_of_sales_for_the_month" placeholder="">
            </div>
            <div class="field">
              <div class="label">TYPE OF PRODUCT</div>
              <input type="text" name="type_of_product" placeholder="">
            </div>
            <div class="field">
              <div class="label">QUANTITY</div>
              <input type="number" name="quantity" placeholder="">
            </div>
            <div class="field">
              <div class="label">INVOICE/DECLARATION NUMBER</div>
              <input type="number" name="declaration_number" placeholder="">
            </div>
            <div class="field">
              <div class="label">EXISE TAX CREDIT FORWARD FROM PREVIOUS MONTH </div>
              <input type="number" name="excise_tax_credit_forwared_frome_previus_month" placeholder="">
            </div>
            <div class="field">
              <div class="label">EXISE TAX AMOUNT PAID ON INPUT </div>
              <input type="number" name="excise_tax_amount_paid_on_input" placeholder="">
            </div>
            <div class="field">
              <div class="label">EXCISE TAX CREDIT AVILABEL FOR NEXT MONTH</div>
              <input type="number" name="excise_tax_credit_avilable_for_next_month" placeholder="">
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
              <div class="label">Purchase Invoice/Declaration number</div>
              <input type="number" name="purchase_invoice" placeholder=" " >
            </div>
            <div class="field">
              <div class="label">Seller TIN</div>
              <input type="number" name="seller_TIN" placeholder="" >
            </div>
            <div class="field">
              <div class="label">Type of Product</div>
              <input type="text" name="types_of_product" placeholder=" " >
            </div>
            <div class="field">
              <div class="label">Quantity</div>
              <input type="number" name="quantitys" placeholder=" " >
            </div>
            <div  id="play" class="field">
              <div class="label">Value</div>
              <input type="number" name="value" placeholder=" " >
            </div>    
                    
            <div class="field">
              <div  class="label">Exise Tax</div>
              <input  name="excise_tax" type="number" placeholder=" " >
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
              <input type="text" name="fullname" placeholder="Enter your full name" required>
            </div>
            <div class="field">
              <div class="label">DATE</div>
              <input type="date" name="detes" placeholder="Enter the date " required>
            </div>
            <div class="titles">TAX REVENUE OFFICE</div>
            <div class="field">
              <div class="label">OFFOCE NAME</div>
              <input type="text" name="office_name" placeholder="Enter the name of tax revenue office  " required>
            </div>
            <div class="field">
              <div class="label">DATE</div>
              <input type="date" name="date" placeholder="Enter the date " required>
            </div>
           
            <div class="field btns">
              <button class="prev-3 prev">Previous</button>
              
            </div>

            <div class="field btnss">
              
              <button name="submit" type="submit" class="submit">Submit</button>
            </div>

        </form>
      </div>
    </div>
    <script src="script.js"></script>

        

        
        
</body>
</html>