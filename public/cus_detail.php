<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gfg";
	
// connect the database with the server
$conn = new mysqli($servername,$username,$password,$dbname);
	
	// if error occurs
	if ($conn -> connect_errno)
	{
	echo "Failed to connect to MySQL: " . $conn -> connect_error;
	exit();
	}

	$sql = "select * from userdata1";
	$result = ($conn->query($sql));
	//declare array to store the data of database
	$row = [];

	if ($result->num_rows > 0)
	{
		// fetch all data from db into array
		$row = $result->fetch_all(MYSQLI_ASSOC);
	}
?>

<!DOCTYPE html>
<html>
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
<style>
	td,th {
		border: 1px solid black;
		padding: 10px;
		margin: 5px;
		text-align: center;
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
  height: 30px;
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
nav{
  background: #fff;
}
.side_navbar{
  padding: 1px;
  display: flex;
  flex-direction: column;
}
.side_navbar span{
  color: gray;
  margin: 1rem 3rem;
  font-size: 12px;
}
.side_navbar a{
  width: 100%;
  padding: 0.8rem 3rem;
  font-weight: 500;
  font-size: 15px;
  color: rgb(100, 100, 100);
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
</style>


<body class="mt32">
    <div class="container">
    <br>
      <a href="create_cus.html" >
        <button><b>BACK</b></button></a>
        <style>
         button {
  align-items: center;
  background-color: #fee6e3;
  border: 2px solid #111;
  border-radius: 8px;
  box-sizing: border-box;
  color: #111;
  cursor: pointer;
  display: flex;
  font-family: Inter,sans-serif;
  font-size: 16px;
  height: 30px;
  justify-content: center;
  line-height: 24px;
  max-width: 100%;
  padding: 0 25px;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

button:after {
  background-color: #111;
  border-radius: 5px;
  content: "";
  display: block;
  height: 25px;
  left: 0;
  width: 100%;
  position: absolute;
  top: -2px;
  transform: translate(8px, 8px);
  transition: transform .2s ease-out;
  z-index: -1;
}

button:hover:after {
  transform: translate(0, 0);
}

button:active {
  background-color: #ffdeda;
  outline: 0;
}

button:hover {
  outline: 0;
}

@media (min-width: 768px) {
  button {
    padding: 0 20px;
  }
}
        body {
            width: 1300px;
            font-family: sans-serif;
            line-height: 1.5;
            padding: 0 16px;
        }
  
        h1 {
            margin-bottom: 0;
        }
          </style>
        <h3>
            <span>Customer Detail</span>
            <input type="search" placeholder="Search..." class="form-control search-input" data-table="customers-list"/>
        </h3>
        <style>
          input[type=search]
          {
            height:30px;
            border-radius:20px;
            
            box-shadow:#1f0e0d;
          }
          input[type=search]:hover{
                    box-shadow: inset 0 0 0 2px #fff,
            0 0 0 4px #fff,
            3px -3px 5px #3a3b3b, 
            -3px 3px 5px #3a3b3b;}
          </style>
      <!--  <table class="table table-striped mt32 customers-list">
            <thead>
			<tr>
               
                <th>Phone</th>
                
                <th>First name</th>
                <th>Last Name</th>
                <th>Company Name</th>
                <th>Billing Address</th>
                <th>GSTIN</th>
                <th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
               
               
			</tr>
		</thead>
		<tbody>
			<?php
			if(!empty($row))
			foreach($row as $rows)
			{
			?>
			<tr>
                
                <td><?php echo $rows['phone']; ?></td>
                
                <td><?php echo $rows['first_name']; ?></td>
               
                <td><?php echo $rows['last_name']; ?></td>
                <td><?php echo $rows['company']; ?></td>
                <td><?php echo $rows['b_add']; ?></td>
               
                <td><?php echo $rows['gstin']; ?></td>
                <td>
                <a href="edit.php?phone=<?php echo $row["phone"]; ?>">Edit</a>
                </td>
                <td>
                <a href="delete.php?phone=<?php echo $row["phone"]; ?>">Delete</a>    
                </td>
        </tr>
<?php $count++; } ?>
               
               


		
		
		</tbody>
	</table>-->
  <table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Serial No</strong></th>

<th><strong>Phone</strong></th>
<th><strong>First name</strong></th>
<th><strong>Last Name</strong></th>
<th><strong>Company</strong></th>
<th><strong>Billing Address</strong></th>
<th><strong>GSTIN</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from userdata1;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["phone"]; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["company"]; ?></td>
<td align="center"><?php echo $row["b_add"]; ?></td>
<td align="center"><?php echo $row["gstin"]; ?></td>
<td align="center">
<a href="edit.php?phone=<?php echo $row["phone"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?phone=<?php echo $row["phone"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
            </div>
    <script>
        (function(document) {
            'use strict';

            var TableFilter = (function(myArray) {
                var search_input;

                function _onInputSearch(e) {
                    search_input = e.target;
                    var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                    myArray.forEach.call(tables, function(table) {
                        myArray.forEach.call(table.tBodies, function(tbody) {
                            myArray.forEach.call(tbody.rows, function(row) {
                                var text_content = row.textContent.toLowerCase();
                                var search_val = search_input.value.toLowerCase();
                                row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                            });
                        });
                    });
                }

                return {
                    init: function() {
                        var inputs = document.getElementsByClassName('search-input');
                        myArray.forEach.call(inputs, function(input) {
                            input.oninput = _onInputSearch;
                        });
                    }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') {
                    TableFilter.init();
                }
            });

        })(document);
    </script>
</body>
</html>

<?php
	mysqli_close($conn);
?>
