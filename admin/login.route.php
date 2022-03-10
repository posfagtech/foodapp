<?php
include "../config/config.php";
$email = htmlspecialchars($_POST['adminemail']);
$password = htmlspecialchars($_POST['adminpassword']); 


$sql = "SELECT * FROM admin_table WHERE admin_email ='$email' and  admin_password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
    $row = $result->fetch_assoc();
    if($row["admin_email"]=$email && $row["admin_password"]=$password){
      session_start();
          $_SESSION["admin_id"]=$row["admin_id"];
          $_SESSION["admin_name"]=$row["admin_name"];
          $_SESSION["admin_phone"]=$row["admin_phone"];
          $_SESSION["success"]="login successful";
          header("location:admin.dashboard.php");
      } 
  }else{
    session_start();
    $_SESSION["error"]=true;
    $errormessage="Email or Password not correct";
    header("location:login.php?message=$errormessage");
  }



$conn->close();
 ?>
