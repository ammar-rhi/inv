<?php

// Get the user id
$pname = $_REQUEST['pname'];

// Database connection
$con = mysqli_connect("localhost", "root", "", "gfg");

if ($pname !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($con, "SELECT prate,pquan FROM productdata1 WHERE pname='$pname';
	");

	$row = mysqli_fetch_array($query);

	// Get the first name
//	$pquan = $row["pquan"];

	// Get the first name
	$prate = $row["prate"];
	$pquan = $row["pquan"];
   
    

   
}

// Store it in a array
$result =  array("$prate","$pquan");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
