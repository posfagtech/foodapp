<?php
require "config.php";
$fname= $_POST["adminname"];
$emil=  $_POST["adminemail"];
$num=  $_POST["adminnumber"];
$pswd= $_POST["adminpswd"];
echo $fname;


$conn = new mysqli($servername, $username, $password,$dbname);


  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }
$sql = "INSERT INTO admin_table (admin_name, admin_email, admin_phone, admin_password) 
VALUES ($fname,$emil,$num,$pswd)";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo  mysqli_error($conn);
  };


// };
?>