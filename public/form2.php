

<?php

// Initialize the session
//require_once 'conn.php';
	
// Store the submitted data sent
// via POST method, stored

// Temporarily in $_POST structure.
$InvoiceID = $_POST['inv_id'];
$conn = mysqli_connect("localhost", "root", "", "gfg");
$sql = "SELECT phone, first_name, last_name,company,b_add,gstin, sname,scost,pname, prate, pquan FROM orders WHERE inv_id = $InvoiceID";
$result_login = mysqli_query($conn,$sql);
$anything_found = mysqli_num_rows($result_login);
if($anything_found===0)
    {
    echo "Sorry, that INVOICE NUMBER is not there.\n";
   }
   else{
$orderResult = $conn->query($sql);
$orderData = $orderResult->fetch_array();


$phone = $orderData[0];
$first_name = $orderData[1];
$last_name = $orderData[2];
$company = $orderData[3]; 
$b_add = $orderData[4];
$gstin = $orderData[5];
$sname = $orderData[6]; 
$scost = $orderData[7]; 
$pname = $orderData[8];
$prate = $orderData[9];
$pquan = $orderData[10]; 

/*echo $phone;
echo $first_name;
echo $last_name;
echo $b_add;
echo $gstin;
echo $sname;
echo $scost;
echo $pname;
echo $prate;
echo $pquan;
*/


$table = '   <style>
body{
    background-color: #F6F6F6; 
    margin: 0;
    padding: 0;
}
h1,h2,h3,h4,h5,h6{
    margin: 0;
    padding: 0;
}
p{
    margin: 0;
    padding: 0;
}
.container{
    width: 80%;
    margin-right: auto;
    margin-left: auto;
}
.brand-section{
   background-color: #0d1033;
   padding: 10px 40px;
}
.logo{
    width: 50%;
}

.row{
    display: flex;
    flex-wrap: wrap;
}
.col-6{
    width: 50%;
    flex: 0 0 auto;
}
.text-white{
    color: #fff;
}
.company-details{
    float: right;
    text-align: right;
}
.body-section{
    padding: 16px;
    border: 1px solid gray;
}
.heading{
    font-size: 20px;
    margin-bottom: 08px;
}
.sub-heading{
    color: #262626;
    margin-bottom: 05px;
}
table{
    background-color: #fff;
    width: 100%;
    border-collapse: collapse;
}
table thead tr{
    border: 1px solid #111;
    background-color: #f2f2f2;
}
table td {
    vertical-align: middle !important;
    text-align: center;
}
table th, table td {
    padding-top: 08px;
    padding-bottom: 08px;
}
.table-bordered{
    box-shadow: 0px 0px 5px 0.5px gray;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}
.text-right{
    text-align: end;
}
.w-20{
    width: 20%;
}
.float-right{
    float: right;
}
</style>
</head>
<body>

<div class="container">
<div class="brand-section">
    <div class="row">
        <div class="col-6">
            <h1 class="text-white">RH Infos</h1>
        </div>
        <div class="col-6">
            <div class="company-details">
                <p class="text-white"></p>
                <p class="text-white">Kuniyamuthur</p>
                <p class="text-white">+91 70109 72090</p>
            </div>
        </div>
    </div>
</div>

<div class="body-section">
    <div class="row">
        <div class="col-6">
            <h2 class="heading">Invoice No.:'.$InvoiceID.'</h2>
          <!--  <p class="sub-heading">Tracking No. fabcart2025 </p>
            <p class="sub-heading">Order Date: 20-20-2021 </p>
            <p class="sub-heading">Email Address: customer@gfmail.com </p>-->
        </div>
        <div class="col-6">
          <b>  <p class="sub-heading">Name : '.$first_name. ' '.$last_name.' </p></b>
            <b><p class="sub-heading">Address : ' .$b_add.'  </p></b>
           <b> <p class="sub-heading">Phone Number : ' .$phone.' </p></b>
          <b>  <p class="sub-heading">Company name : ' .$company.'  </p></b>
        </div>
    </div>
</div>

<div class="body-section">
    <h3 class="heading">Ordered Items</h3>
    <br>
    <table class="table-bordered">
        <thead>
            <tr>
                <th>Product</th>
                <th class="w-20">Price</th>
                <th class="w-20">Quantity</th>
               <!-- <th class="w-20">Grandtotal</th>-->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$pname.'</td>
                <td>'.$prate.'</td>
                <td>'.$pquan.'</td>
               <!-- <td>10</td>-->
            </tr>
           <!-- <tr>
                <td colspan="3" class="text-right">Sub Total</td>
                <td> 10.XX</td>
            </tr>
            <tr>
                <td colspan="3" class="text-right">Tax Total %1X</td>
                <td> 2</td>
            </tr>
            <tr>
                <td colspan="3" class="text-right">Grand Total</td>
                <td> 12.XX</td>
            </tr>-->
        </tbody>
    </table>
    <div class="body-section">
    <h3 class="heading">Service Items</h3>
    <br>
    <table class="table-bordered">
        <thead>
            <tr>
                <th>Service</th>
                <th class="w-20">Service Cost</th>
                <!-- <th class="w-20">Quantity</th>
                <th class="w-20">Grandtotal</th>-->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$sname.'</td>
                <td>'.$scost.'</td>
                <!--  <td>'.$pquan.'</td>
              <td>10</td>-->
            </tr>
           <!-- <tr>
                <td colspan="3" class="text-right">Sub Total</td>
                <td> 10.XX</td>
            </tr>
            <tr>
                <td colspan="3" class="text-right">Tax Total %1X</td>
                <td> 2</td>
            </tr>
            <tr>
                <td colspan="3" class="text-right">Grand Total</td>
                <td> 12.XX</td>
            </tr>-->
        </tbody>
    </table>
    <br>
    <h3 class="heading">Payment Status: Paid</h3>
    <h3 class="heading">Payment Mode: Cash on Delivery</h3>
</div>

<div class="body-section">
    <p>&copy; Copyright 2021 - rhinfos. All rights reserved. 
        <a href="www.rhinfos.com" class="float-right"></a>
    </p>
</div>      
</div>      
</table>'
;

$conn->close();

echo $table;
   }
   
?>
<script>
    window.print();
    </script>

<!-- Form for other details-->
