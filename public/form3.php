

<?php

// Initialize the session
//require_once 'conn.php';
	
// Store the submitted data sent
// via POST method, stored

// Temporarily in $_POST structure.
$ServiceID = $_POST['s_id'];
$conn = mysqli_connect("localhost", "root", "", "gfg");
$sql = "SELECT phone, first_name, last_name, sname, scost FROM ser_order WHERE service_id = $ServiceID";

$orderResult = $conn->query($sql);
$orderData = $orderResult->fetch_array();


$phone = $orderData[0];
$first_name = $orderData[1];
$last_name = $orderData[2]; 
$sname = $orderData[3];
$scost = $orderData[4];


echo $phone;
echo $first_name;
echo $last_name;
echo $sname;
echo $scost;





$table = '<style>
.star img {
    visibility: visible;
}</style>
<table align="center" cellpadding="0" cellspacing="0" style="width: 100%;border:1px solid black;margin-bottom: 10px;">
               <tbody>
                  <tr>
                     <td colspan="5" style="text-align:center;color: red;text-decoration: underline;    font-size: 25px;">TAX INVOICE</td>
                  </tr>
                  <tr>
                     <td rowspan="8" colspan="2" style="border-left:1px solid black;" background-image="logo.jpg"><img src="/logo.jpg" alt="logo" width="250px;"></td>
                     <td colspan="3" style=" text-align: right;">ORIGINAL</td>
                  </tr>
                  <tr>
                     <td colspan="3" style=" text-align: right;">DUPLICATE</td>
                  </tr>
                  <tr>
                     <td colspan="3" style=" text-align: right;color: red;font-style: italic;font-weight: 600;text-decoration: underline;font-size: 25px;">IMS</td>
                  </tr>
                  <tr>
                     <td colspan="3" style=" text-align: right;">Nr. Your First Address,</td>
                  </tr>
                  <tr>
                     <td colspan="3" style=" text-align: right;">Cityname,Pincode</td>
                  </tr>
                  <tr>
                     <td colspan="3" style=" text-align: right;">Tele: 1234567890,1478523690.</td>
                  </tr>
                  <tr>
                     <td colspan="3" style=" text-align: right;">Email: email0@email.co.in</td>
                  </tr>
                  
                  <tr>
                     <td colspan="3" style=" text-align: right;color: blue;text-decoration: underline;">email0@email.co.in</td>
                  </tr>
                  <tr>
                     <td colspan="2" style="padding: 0px;vertical-align: top;border-right:1px solid black;">
                        <table align="left" cellpadding="0" cellspacing="0" style="border: thin solid black; width: 100%">
                           <tbody>
                              <tr>
                                 <td style="width: 74px;vertical-align: top;color: red;" rowspan="3">TO, </td>
                                 <td style="border-bottom-style: solid; border-bottom-width: thin; border-bottom-color: red">&nbsp;'.$sname.'</td>
                              </tr>
                              <tr>
                                 <td style="border-bottom-style: solid; border-bottom-width: thin; border-bottom-color: black">&nbsp;</td>
                              </tr>
                              <tr>
                                 <td style="border-bottom-style: solid; border-bottom-width: thin; border-bottom-color: black">&nbsp;</td>
                              </tr>
                           </tbody>
                        </table>
                        <table align="left" cellspacing="0" style="width: 100%; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-width: thin; border-bottom-width: thin; border-left-width: thin; border-right-color: black; border-bottom-color: black; border-left-color: black;">
                           <tbody>
                              <tr>
                                 <td style=" border-bottom-style: solid; border-bottom-width: thin; border-bottom-color: red;color: red;">G.S.T.IN :'.$scost.'</td>
                                 <td style="border-left-style: solid; border-left-width: thin; border-left-color: black; border-bottom-style: solid; border-bottom-width: thin; border-bottom-color: red;color: red;">Mobile No: '.$phone.'</td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                     <td style="padding: 0px;vertical-align: top;" colspan="3">
                        <table align="left" cellpadding="0" cellspacing="0" style="width: 100%">
                           <tbody>
                              <tr>
                                 <td style="border-bottom-style: solid;border-bottom-width: thin;border-bottom-color: black;border-top: 1px solid black;border-right: 1px solid black;color: red;">Bill No : .</td>
                              </tr>
                              <tr>
                                 <td style="border-bottom-style: solid;border-bottom-width: thin;border-bottom-color: black;border-right: 1px solid black;    color: red;">Date: '.$last_name.'</td>
                              </tr>
                              <tr>
                                 <td style="border-bottom-style: solid;border-bottom-width: thin;border-bottom-color: black;height: 52px;border-right: 1px solid black;    color: red;">G.S.T.IN: lorem ipsum</td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
                  <tr>
                     <td style="width: 123px;text-align: center;background-color: black;color: white;border-right: 1px solid white;border-left: 1px solid black;border-bottom: 1px solid black;-webkit-print-color-adjust: exact;">D.C.NO<br>
                        &amp;DATE
                     </td>
                     <td style="width: 50%;text-align: center;border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-top-width: thin;border-right-width: thin;border-bottom-width: thin;border-top-color: black;border-right-color: white;border-bottom-color: black;color: white;background-color: black;-webkit-print-color-adjust: exact;">Description Of Goods</td>
                     <td style="width: 150px;text-align: center;border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-top-width: thin;border-right-width: thin;border-bottom-width: thin;border-top-color: black;border-right-color: #fff;border-bottom-color: black;background-color: black;color: white;-webkit-print-color-adjust: exact;">Qty.</td>
                     <td style="width: 150px;text-align: center;border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-top-width: thin;border-right-width: thin;border-bottom-width: thin;border-top-color: black;border-right-color: #fff;border-bottom-color: black;background-color: black;color: white;-webkit-print-color-adjust: exact;">Rate&nbsp; Rs.<br>
                        Ps
                     </td>
                     <td style="width: 150px;text-align: center;border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-top-width: thin;border-right-width: thin;border-bottom-width: thin;border-top-color: black;border-right-color: black;border-bottom-color: black;color: white;background-color: black;-webkit-print-color-adjust: exact;">Amount&nbsp; Rs.<br>
                        &nbsp;Ps
                     </td>
                  </tr>';
                
                $table.= '
                  <tr style="border-bottom: 1px solid black;">
                     <td style="border-left: 1px solid black;border-right: 1px solid black;height: 27px;"></td>
                     <td style="border-left: 1px solid black;height: 27px;"></td>
                     <td style="border-left: 1px solid black;height: 27px;"></td>
                     <td style="width: 149px;border-right-style: solid;border-bottom-style: solid;border-right-width: thin;border-bottom-width: thin;border-right-color: black;border-bottom-color: #000;background-color: black;color: white;padding-left: 5px;-webkit-print-color-adjust: exact;">Total</td>
                     <td style="width: 218px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-top-width: thin; border-right-width: thin; border-bottom-width: thin; border-top-color: black; border-right-color: black; border-bottom-color: black;">'.$scost.'</td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-top: 1px solid black;border-bottom: 1px solid black;border-left: 1px solid black;padding: 5px;">Feed back:'.$scost.'</td>
                     <td rowspan="2" style="border-bottom: 1px solid black;width: 199px;color: white;background-color: black;padding-left: 5px;-webkit-print-color-adjust: exact;">S.G.S.T. 9%</td>
                     <td rowspan="2" style="border-bottom: 1px solid black;width: 288px;border-right: 1px solid black;">'.$scost.'</td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-bottom: 1px solid black;width: 859px;border-left: 1px solid black;padding: 5px;">Branch:- branch Address</td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-bottom: 1px solid black;border-left: 1px solid black;padding: 5px;">Bank IFSC CODE:- 78945612301</td>
                     <td rowspan="2" style="border-bottom: 1px solid black;width: 149px;background-color: black;color: white;padding-left: 5px;-webkit-print-color-adjust: exact;">C.G.S.T. 9%</td>
                     <td rowspan="2" style="width:218px;border-bottom: 1px solid black;border-right: 1px solid black;">'.$scost.'
                     </td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-bottom: 1px solid black;border-left: 1px solid black;padding: 5px;">AC. HO. Name:- Comapany Name</td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-bottom: 1px solid black;border-left: 1px solid black;padding: 5px;">AC.NO. :- lorem ipsum</td>
                     <td style="border-bottom: 1px solid black;background-color: black;color: white;padding: 5px;-webkit-print-color-adjust: exact;">I.G.S.T. 18%</td>
                     <td style="border-bottom: 1px solid black;border-right: 1px solid black;">'.$scost.'</td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-left: 1px solid black;border-bottom: 1px solid black;color: red;padding: 5px;">Amount in words</td>
                     <td style="border-bottom: 1px solid #fff;background-color: black;color: white;padding: 5px;-webkit-print-color-adjust: exact;">G. Total</td>
                     <td style="border-bottom: 1px solid black;border-right: 1px solid;">'.$scost.'</td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-left: 1px solid black;border-bottom: 1px solid black;padding: 5px;border-right: 1px solid black;">* Subject to lorem ipsum             <span style="float: right;"> E.&amp;.O.E.</span></td>
                     <td rowspan="2" colspan="2" style="vertical-align: bottom;padding: 5px;color: red;border-right: 1px solid black;text-align: center;">for, Company Name</td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-left: 1px solid black;padding-left: 5px;border-right: 1px solid black;">
                        * Intrest will be charged upon all acounts 
                        <p style="margin: 0px;">remaning unpaid after due date</p>
                     </td>
                  </tr>
               </tbody>
            </table>';
$conn->close();

echo $table;
?>
<!-- Form for other details-->
