<?php
session_start();
include "../config/config.php";
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']); 

$sql = "SELECT * FROM admin_table WHERE admin_email ='$email' || admin_password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    // echo "id: " . $row["admin_id"]. " - Name: " . $row["admin_name"]. " " . $row["admin_email"]. "<br>";
    // echo "Welcome". $row["admin_name"];
    $_SESSION["admin_id"]=$row["admin_id"];
    header ("location : admin.dashboard.php");
  }
} else {
  echo "You have eneter wrong credentials";
}
$conn->close();
?>