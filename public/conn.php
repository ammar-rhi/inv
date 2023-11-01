<?php
$path = str_replpace('www','',getcwd());
system('"'.$path.'mysql\bin\mysqld.exe"');
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "gfg";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}

$sqlquery = "INSERT INTO table VALUES
	('John', 'Doe', 'john@example.com')"

if($conn->query($sqlquery) === TRUE) {
	echo "record inserted successfully";
} else {
	//echo "Error: " . $sql . "<br>" . $conn->error;
	echo "These Data is enter already";
}
?>