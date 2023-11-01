<?php
//include("auth.php");
require('conn.php');
$phone=$_REQUEST['phone'];
$query = "SELECT * from userdata1 where phone='".$phone."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$phone=$_REQUEST['phone'];

$first_name =$_REQUEST['first_name'];
$last_name =$_REQUEST['last_name'];
$company =$_REQUEST['company'];
$b_add =$_REQUEST['b_add'];
$gstin =$_REQUEST['gstin'];
$submittedby = $_SESSION["first_name"];
$update="update userdata1 set first_name='".$first_name."',
last_name='".$last_name."', company='".$company."', b_add='".$b_add."',
gstin='".$gstin."',

submittedby='".$submittedby."' where phone='".$phone."'";
mysqli_query($conn, $update) or die(mysqli_error($conn));
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="phone" type="hidden" value="<?php echo $row['phone'];?>" />
<p><input type="text" name="first_name" placeholder="Enter Name" 
required value="<?php echo $row['first_name'];?>" /></p>
<p><input type="text" name="last_name" placeholder="Enter Name" 
required value="<?php echo $row['last_name'];?>" /></p>
<p><input type="text" name="company" placeholder="Enter Name" 
required value="<?php echo $row['company'];?>" /></p>
<p><input type="text" name="b_add" placeholder="Enter Age" 
required value="<?php echo $row['b_add'];?>" /></p>
<p><input type="text" name="gstin" placeholder="Enter Name" 
required value="<?php echo $row['gstin'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>