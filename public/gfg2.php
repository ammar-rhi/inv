<?php

// Get the user id
$phone = $_REQUEST['phone'];

// Database connection
$con = mysqli_connect("localhost", "root", "", "gfg");

if ($phone !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($con, "SELECT first_name,last_name,company,b_add,gstin FROM userdata1 WHERE phone='$phone'");

	$row = mysqli_fetch_array($query);

	// Get the first name
	

	// Get the first name
	$first_name = $row["first_name"];
    $last_name = $row["last_name"];
	$company = $row["company"];
	$b_add = $row["b_add"];
	$gstin = $row["gstin"];
    

   
}

// Store it in a array
$result = array("$first_name","$last_name","$company", "$b_add","$gstin");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
