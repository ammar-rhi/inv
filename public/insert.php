<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
<header class="header">
		<div class="logo">
		  <a href="home.html">RH Infos</a>
		  <!--<div class="search_box">
			<input type="text" placeholder="Search EasyPay">
			<i class="fa-sharp fa-solid fa-magnifying-glass"></i>
		  </div>-->
		</div>
	
		<div class="header-icons">
		<!--  <i class="fas fa-bell"></i>-->
		  <div class="account">
			<i class="fas fa-user">   Admin</i>
		   
		  </div>
		</div>
	  </header>
	  <div class="container">
		<nav>
		  <div class="side_navbar">
			<span>Main Menu</span>
			<a href="home.html" class="active">Dashboard</a>
			<a href="create_cus.html">Add Customer</a>
			<a href="create_pro.html">Add Product</a>
			<a href="create_ser.html">Add Service</a>
			<a href="index1.html">Order</a>
			<a href="generate.html">Geenerate Invoice</a>
			 <span>Quick Link</span>
			<a href="cus_detail.php">Customer Detail</a>
			<a href="pro_detail.php">Product Detail</a>
			<a href="ser_detail.php">Service Detail</a>
			<a href="ord_detail.php">Order Detail</a>
			
		  </div>
		</nav>
	<center>
	<div class="output">
	
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
		$phone = $_REQUEST['phone'];
		$user_id = $_REQUEST['user_id'];
        $first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$b_add = $_REQUEST['b_add'];
		$gstin = $_REQUEST['gstin'];
		
		
		
	
		
		// Performing insert query execution
		// here our table name is college
		/*$sql = "INSERT INTO userdata1 VALUES ('$phone','$user_id','$first_name',
			'$last_name','$b_add','$gstin')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.</h3>";

			echo nl2br("\nPhone : $phone \nCustomer Id : $user_id\n First name : $first_name\n "
				. "Last Name : $last_name \nBilling Address : $b_add \nGSTIN : $gstin\n");
		} //else{
			//echo "ERROR: Hush! Sorry $sql. "
			//	. mysqli_error($conn);
		//}
		else{
			echo "<h3>Id is already used."
			. " These phone number already registered"
			. " </h3>";

		}
		/** */
    $sql = "SELECT phone from userdata1 where phone = '$phone'";
    if(mysqli_query($conn, $sql)){
      echo " Already Registered this number";
    }

		// Close connection
		mysqli_close($conn);
		?>
        <a href ="index1.html">
			<button>Go to Invoice Creation</button></a>
			<a href="cus_detail.php">
			<button>View Customer Details</button></a>
      <a href="create_cus.html">
			<button>Back</button></a>
	</center>
	</div>
	<style>
	h1{
		margin-right: 650px;
		padding: 10px;
	}
	.output{
		margin-right: 700px;
		padding: 10px;
	}
	{
		margin-right: 100px;
		display: inline-block;
        width: 150px;
        text-align: left;
	}
	input[type=text]{
		width:30%;
		  padding: 12px 20px;
     
		width: 75%;
         margin-left: 60px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
	}
	
button{
  background-color: #45a049;
  width:50%;
  border-radius: 25px;
  padding:10px;
  margin-left: 60px;
}
</style>
	<style>
    /*  import google fonts */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
*{
  margin: 0;
  padding: 0;
  border: none;
  outline: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body{
  background: rgb(219, 219, 219);
}
.header{
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 60px;
  padding: 20px;
  background: #fff;
}
.logo{
  display: flex;
  align-items: center;
}
.logo a{
  color: #000;
  font-size: 18px;
  font-weight: 600;
  margin: 2rem 8rem 2rem 2rem;
}
.search_box{
  display: flex;
  align-items: center;
}
.search_box input{
  padding: 9px;
  width: 250px;
  background: rgb(228, 228, 228);
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}
.search_box i{
  padding: 0.66rem;
  cursor: pointer;
  color: #fff;
  background: #000;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}
.header-icons{
  display: flex;
  align-items: center;
}
.header-icons i{
  margin-right: 2rem;
  cursor: pointer;
}
.header-icons .account{
  width: 130px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.header-icons .account img{
  width: 35px;
  height: 35px;
  cursor: pointer;
  border-radius: 50%;
}
.container{
  margin-top: 10px;
  display: flex;
  justify-content: space-between;
}

/* Side menubar section */
nav{
  background: #51e3e3;
}
.side_navbar{
  padding: 1px;
  display: flex;
  flex-direction: column;
}
.side_navbar span{
  color: white;
  font-weight:bold;
  margin: 1rem 3rem;
  font-size: 12px;
}
.side_navbar a{
  width: 100%;
  padding: 0.8rem 3rem;
  font-weight: 500;
  font-size: 15px;
  color: black;
}
.links{
  margin-top: 5rem;
  display: flex;
  flex-direction: column;
}
.links a{
  font-size: 13px;
}
.side_navbar a:hover{
  background: rgb(235, 235, 235);
}
.side_navbar .active{
  border-left: 2px solid rgb(100, 100, 100);
}

/* Main Body Section */
.main-body{
  width: 70%;
  padding: 1rem;
}
.promo_card{
  width: 100%;
  color: #fff;
  margin-top: 10px;
  border-radius: 8px;
  padding: 0.5rem 1rem 1rem 3rem;
  background: rgb(37, 37, 37);
}
.promo_card h1, .promo_card span, button{
  margin: 10px;
}
.promo_card button{
  display: block;
  padding: 6px 12px;
  border-radius: 5px;
  cursor: pointer;
}
.history_lists{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.row{
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 1rem 0;
}
table{
  background: #fff;
  padding: 1rem;
  text-align: left;
  border-radius: 10px;
}
table td, th{
  padding: 0.2rem 0.8rem;
}
table th{
  font-size: 15px;
}
table td{
  font-size: 13px;
  color: rgb(100, 100, 100);
}



/* Sidebar Section */
.sidebar{
  width: 15%;
  padding: 2rem 1rem;
  background: #fff;
}
.sidebar h4{
  margin-bottom: 1.0rem;
}
.sidebar .balance{
  display: flex;
  align-items: center;
  margin-bottom: 0.5rem;
}
.balance .icon{
  color: #fff;
  font-size: 20px;
  border-radius: 6px;
  margin-right: 1rem;
  padding: 1rem;
  background: rgb(37, 37, 37);
}
.balance .info h5{
  font-size: 16px;
}
.balance .info span{
  font-size: 14px;
  color: rgb(100, 100, 100);
}
.balance .info i{
  margin-right: 2px;
}
</style>
</body>

</html>
