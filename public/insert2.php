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
        $inv_id = $_REQUEST['inv_id'];
		$phone = $_REQUEST['phone'];
		
        $first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
    $company = $_REQUEST['company'];
		$b_add = $_REQUEST['b_add'];
		$gstin = $_REQUEST['gstin'];
		$sname = $_REQUEST['sname'];
		$scost = $_REQUEST['scost'];
        $pname = $_REQUEST['pname'];
		$prate = $_REQUEST['prate'];
		$pquan = $_REQUEST['pquan'];
		
		
	
		
		// Performing insert query execution
		// here our table name is college
		/*$sql = "INSERT INTO orders VALUES ('$inv_id','$phone','$user_id','$first_name',
			'$last_name','$b_add','$gstin','$sname','$scost','$pname','$prate','$pquan')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Order Data stored in a database successfully.</h3>";

			echo nl2br("\nInvoice Id:$inv_id\nPhone:$phone \nCustomer Id:$user_id\n First Name:$first_name\n "
				. "Last Name:$last_name\nBilling Addresss:$b_add\nGSTIN:$gstin\n Service name:$sname\nService Cost:$scost\nProduct Name:$pname\nProduct Quantity:$pquan\nProduct rate:$prate\n");
		} //else{
			//echo "ERROR: Hush! Sorry $sql. "
			//	. mysqli_error($conn);
		//}
		else{
			echo "<h3>Id is already used."
			. " These Inovoice ID already registered"
			. " </h3>";

		}
		
		// Close connection
		mysqli_close($conn);/** */
    $inv_id = $_REQUEST['inv_id'];
$query_login = "SELECT inv_id FROM orders WHERE inv_id='$inv_id';";
$sql = "INSERT INTO orders VALUES ('$inv_id','$phone','$first_name',
'$last_name','$company','$b_add','$gstin','$sname','$scost','$pname','$prate','$pquan')";
$result_login = mysqli_query($conn,$query_login);
$anything_found = mysqli_num_rows($result_login);

       //check if the username already exists

if($anything_found>0)
    {
    echo "Sorry, that INVOICE NUMBER is already exist. Please choose another.\n";
   }
   elseif(mysqli_query($conn, $sql)){
    echo "Insert the data : YOUR INVOICE ID:'$inv_id'\n";
    
   }
   else{
    echo "Something went wrong";
   }
   mysqli_close($conn);
		?>
    <br><br>
        <a href ="index1.html">
			<button>Go to Invoice Creation</button></a>
			<a href="ord_detail.php">
			<button>View Order Details</button></a>
      <a href="index1.html">
			<button>Back</button></a>
			<h2>Remember your Invoice ID</h2>
			<a href="generate.html">
			<button>Generate Invoice</button></a>
	</center>
	</div>
	<style>
     body {
            width: 1300px;
            font-family: sans-serif;
            line-height: 1.5;
            padding: 0 16px;
        }
  
        h1 {
            margin-bottom: 0;
        }

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
  position: relative;
  background-color: #c2fbd7;
  border-radius: 100px;
  box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
  color: green;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  margin-left: 250px;;
}
button:hover{
  box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
  transform: scale(1.05) rotate(-1deg);
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
  background: #B993D6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #B993D6, #B993D6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #B993d6, #B993D6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


}
.header{
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 60px;
  padding: 20px;
  background: #51e3e3;
  border-radius: 25px;
  margin-top: 20px;
  margin-bottom: 20px;
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
  border-radius: 25px;
  box-shadow: inset 0 0 0 3px #51e3e3,
            0 0 0 4px #51e3e3,
            3px -3px 15px #3a3b3b, 
            -3px 3px 15px #3a3b3b;
}
.side_navbar{
 
  padding: 1px;
  display: flex;
  flex-direction: column;
}
.side_navbar span{
  color:white;
  font-weight: bold;
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
  animation: ease-in-out;
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
