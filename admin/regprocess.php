<?php
include '../config/config.php';
$fname = htmlspecialchars($_POST['adminname']);
$email = htmlspecialchars($_POST['adminemail']);
$num =   htmlspecialchars($_POST['adminnumber']);
$pswd =  htmlspecialchars($_POST['adminpswd']);


$conn = new mysqli($servername, $username, $password,$dbname);


  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }
$sql = "INSERT INTO admin_table (admin_name, admin_email, admin_phone,admin_password) 
VALUES ('$fname','$email','$num','$pswd')";

  if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
    header("Location: login.php");
  } else {
    echo  mysqli_error($conn);
  };


// };
?>