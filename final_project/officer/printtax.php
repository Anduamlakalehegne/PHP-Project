<?php
include("config.php");
include("dd.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = mysqli_query($conn,"SELECT * FROM vat_declaration WHERE id=$id");
    if (mysqli_num_rows($query) > 0) {
  $row = mysqli_fetch_assoc($query);
  $TIN_No = $row["TIN_No"];
  $declaration_date = $row["declaration_date"];
  $vat_return_type = $row["vat_return_type"];
  $tax_period = $row["tax_period"];
  $name_of_registerd_organization_or_tax_payer = $row["name_of_registerd_organization_or_tax_payer"];
  $vat_registration_number = $row["vat_registration_number"];
  $agent_TIN = $row["agent_TIN"];
  $organization_TIN = $row["organization_TIN"];
  $schedule = $row["schedule"];
  $taxable_sales = $row["taxable_sales"];
  $zero_rated_sales = $row["zero_rated_sales"];
  $tax_exempt_sales = $row["tax_exempt_sales"];
  $services_subject_to_reverse_taxation = $row["services_subject_to_reverse_taxation"];
  $tax_adjustments_with_debet_for_suppliers = $row["tax_adjustments_with_debet_for_suppliers"];
  $tax_adjustments_with_credit_for_suppliers = $row["tax_adjustments_with_credit_for_suppliers"];
  $output_sales = $row["output_sales"];
  $total_sales = $row["total_sales"];
  $local_purchase_capital_assets = $row["local_purchase_capital_assets"];
  $imported_capital_assets_purchase = $row["imported_capital_assets_purchase"];
  $purchase_with_no_VAT_or_unclaimed_input = $row["purchase_with_no_VAT_or_unclaimed_input"];
  $input_vat = $row["input_vat"];
  $total_capital_assets = $row["total_capital_assets"];
  $local_purchase_input = $row["local_purchase_input"];
  $imported_purchase_input = $row["imported_purchase_input"];
  $general_expense_input_purchase = $row["general_expense_input_purchase"];
  $purchas_with_no_VAT_or_unclaimed_input = $row["purchas_with_no_VAT_or_unclaimed_input"];
  $deductible_on_VAT_teverse_taxation = $row["deductible_on_VAT_teverse_taxation"];
  $tax_adjustment_with_debet_not_for_buyers = $row["tax_adjustment_with_debet_not_for_buyers"];
  $tax_adjustment_with_credit_not_for_buyers = $row["tax_adjustment_with_credit_not_for_buyers"];
  $total_input = $row["total_input"];
  $vat_on_government_voucher = $row["vat_on_government_voucher"];
  $VAT_due_for_month = $row["VAT_due_for_month"];
  $VAT_credit_for_yhe_month = $row["VAT_credit_for_yhe_month"];
  $credit_carried_forward_from_previus_month = $row["credit_carried_forward_from_previus_month"];
  $amount_of_VAT_to_be_paid = $row["amount_of_VAT_to_be_paid"];
  $credit_available_for_carry_forward = $row["credit_available_for_carry_forward"];
   $registered_by =$row["customer_id"];
        

        $officer_query = mysqli_query($conn,"SELECT * FROM customer WHERE customer_id = $registered_by");
        $rows = mysqli_fetch_assoc($officer_query);
        $rows["first_name"];
        $rows["last_name"];
        $rows["region"];
        $rows["zone"];
        $rows["kebele"];
        $rows["pnumber"];

    }
} else {
    header("location: manage_tax_declaration.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Officer print birth certificate page</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/stylein.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
        <style>
            .certificate{
                background: url(../img/certificate.png);
                border: 3px #000033 groove;
            }
        </style>
        <script>
            function printCertificate() {
                var content = document.getElementById("certificate").outerHTML;
                var window1 = window.open('', 'Print', 'height=700,width=1000');
                window1.document.write("<html><head>\n\
                <title>Print Certificate</title>\n\
                <link href='../css/bootstrap.min.css' rel='stylesheet' type='text/css'/>\n\
                <style>\n\
                    .certificate{\n\
                    background: url(../img/certificate.png);\n\
                    border: 3px #000033 groove;\n\
                }\n\
                </style>\n\
                </head>\n\n\
                <body>");
                window1.document.write(content);
                window1.document.write("</body></html>");
                window1.document.close();
                window1.focus();
                window1.print();
            }
        </script>
    </head>
    <body>
        <div class="col-lg-10">
    <div class="section" style="margin-top:1100px;margin-left:150px;">
            <div class="container">
                <div class="row">
                    <div class="text-end">
                        <button class="btn btn-primary" onclick="printCertificate()">Print</button>
                        
                    </div>

                    <div class="certificate" id="certificate">
                        <div class="row" style="padding: 55px">
                            
                            <div class="col-lg-12 text-end" >
                                <b>Date</b> <?php echo "$declaration_date" ?>
                            </div>
                            <div class="col-lg-12 text-center">
                                <img src="../img/Ethiopian Flag.png" alt="" height="50px"/>
                            </div>
                            <div class="col-lg-12 text-center">
                                <h3>Ethiopian Revenue and Customs Authority</h3>
                                <h3>Vat Declaration</h3>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-9">
                            Declaration Date: <b ><?php echo "$declaration_date" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            First Name: <b ><?php echo  $rows["first_name"]; ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            Last Name: <b ><?php echo   $rows["last_name"]; ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            TIN No: <b ><?php echo "$TIN_No" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            Region: <b ><?php echo   $rows["region"]; ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            Zone: <b ><?php echo   $rows["zone"]; ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            Kebele: <b ><?php echo   $rows["kebele"]; ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            Phone Number: <b ><?php echo   $rows["pnumber"]; ?></b>
                                <br>
                                <br>
                            </div>  
                            <div class="col-lg-6">
                            Name of Registerd Organization or Tax Payer: <b ><?php echo "$name_of_registerd_organization_or_tax_payer" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            Vat Rreturn Type: <b ><?php echo "$vat_return_type" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            Vat Registration Rumber: <b ><?php echo "$vat_registration_number" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                               Agent TIN: <b ><?php echo "$agent_TIN" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                                Organization TIN: <b ><?php echo "$organization_TIN" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            Schedule: <b ><?php echo "$schedule" ?></b>
                                <br>
                                <br>
                            </div>
    
                           
                            <div class="col-lg-12">
                                Signature <b>_____________________</b>
                            </div>
                        </div>
                    </div> 
                    </div>
                    <br>
                    <br>
                    <br>



                    <div class="col-lg-12"> 
                    <div class="certificate" id="certificate">
                        <div class="row" style="padding: 55px">
                            
                            <div class="col-lg-12 text-end">
                                <b>Date</b> <?php echo "$declaration_date" ?>
                            </div>
                            <div class="col-lg-12 text-center">
                                <img src="../img/Ethiopian Flag.png" alt="" height="50px"/>
                            </div>
                            <div class="col-lg-12 text-center">
                                <h3></h3>
                                <h3></h3>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            taxable_sales: <b class="underline"><?php echo "$taxable_sales" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            zero_rated_sales: <b class="underline"><?php echo "$zero_rated_sales" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            tax_exempt_sales: <b class="underline"><?php echo "$tax_exempt_sales" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            services_subject_to_reverse_taxation: <b class="underline"><?php echo "$services_subject_to_reverse_taxation" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            tax_adjustments_with_debet_for_suppliers: <b class="underline"><?php echo "$tax_adjustments_with_debet_for_suppliers" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            tax_adjustments_with_credit_for_suppliers: <b class="underline"><?php echo "$tax_adjustments_with_credit_for_suppliers" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            output_sales: <b class="underline"><?php echo "$output_sales" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            total_sales: <b class="underline"><?php echo "$total_sales" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            local_purchase_capital_assets: <b class="underline"><?php echo "$local_purchase_capital_assets" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            imported_capital_assets_purchase: <b class="underline"><?php echo "$imported_capital_assets_purchase" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            general_expense_input_purchase: <b class="underline"><?php echo "$general_expense_input_purchase" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            purchas_with_no_VAT_or_unclaimed_input: <b class="underline"><?php echo "$purchas_with_no_VAT_or_unclaimed_input" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            deductible_on_VAT_teverse_taxation: <b class="underline"><?php echo "$deductible_on_VAT_teverse_taxation" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            tax_adjustment_with_debet_not_for_buyers: <b class="underline"><?php echo "$tax_adjustment_with_debet_not_for_buyers" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            tax_adjustment_with_debet_not_for_buyers: <b class="underline"><?php echo "$tax_adjustment_with_debet_not_for_buyers" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            tax_adjustment_with_credit_not_for_buyers: <b class="underline"><?php echo "$tax_adjustment_with_credit_not_for_buyers" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            total_input: <b class="underline"><?php echo "$total_input" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            vat_on_government_voucher: <b class="underline"><?php echo "$vat_on_government_voucher" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            VAT_due_for_month: <b class="underline"><?php echo "$VAT_due_for_month" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            VAT_credit_for_the_month: <b class="underline"><?php echo "$VAT_credit_for_yhe_month" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                                Middle Name: <b class="underline"><?php echo "$credit_carried_forward_from_previus_month" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            amount_of_VAT_to_be_paid: <b class="underline"><?php echo "$amount_of_VAT_to_be_paid" ?></b>
                                <br>
                                <br>
                            </div>
                            <div class="col-lg-6">
                            credit_available_for_carry_forward: <b class="underline"><?php echo "$credit_available_for_carry_forward" ?></b>
                                <br>
                                <br>
                            </div>
                            
                            
                           
                           
                            <div class="col-lg-12">
                                Signature <b>_____________________</b>
                            </div>
                        </div>
                    </div> 
                    </div>

                </div>
            </div>
        </div>
    <script src="../js/script.js"></script>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>