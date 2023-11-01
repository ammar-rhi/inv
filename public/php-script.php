<?php
include("conn.php");

if(!empty(isset($_POST['phone'])) && isset($_POST['phone'])){

   $phonet= $_POST['phone'];
   checkphone($conn, $phone);
  
}


function checkEmail($conn, $phone){

  $query = "SELECT phone FROM userdata1 WHERE phone='$phone'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    echo "<span style='color:red'>This phone number is alredy exists </span>";
  }
}