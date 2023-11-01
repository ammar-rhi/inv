<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "gfg");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
        $s_id = $_REQUEST['s_id'];
		$phone = $_REQUEST['phone'];
		$user_id = $_REQUEST['user_id'];
        $first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
        $sname = $_REQUEST['sname'];
		$scost = $_REQUEST['scost'];
		
		
		
	
		
		// Performing insert query execution
		// here our table name is college
		/*$sql = "INSERT INTO ser_order VALUES ('$s_id','$phone','$user_id','$first_name',
			'$last_name','$sname','$scost')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$s_id\n$phone \n$user_id\n $first_name\n "
				. "$last_name\n$sname\n$scost\n");
		} //else{
			//echo "ERROR: Hush! Sorry $sql. "
			//	. mysqli_error($conn);
		//}
		else{
			echo "<h3>Id is already used."
			. " These phone number already registered"
			. " </h3>";

		}
		
		// Close connection
		mysqli_close($conn);/** */
		$sname = $_REQUEST['sname'];
$query_login = "SELECT sname FROM services WHERE sname='$sname';";
$sql = "INSERT INTO services VALUES ('$sname','$scost')";
$result_login = mysqli_query($conn,$query_login);
$anything_found = mysqli_num_rows($result_login);

       //check if the username already exists

if($anything_found>0)
    {
    echo "Sorry, that Service name is already there. Please choose another.\n";
   }
   elseif(mysqli_query($conn, $sql)){
    echo "Insert the data\n";
    
   }
   else{
    echo "Something went wrong";
   }
   mysqli_close($conn);
		?>
        <a href ="ser_order.html">
			<button>Go to Service Creation</button></a>
			<a href="ser_detail.php">
			<button>View Service Order Details</button></a>
	</center>
</body>

</html>
