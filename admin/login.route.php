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
    $_SESSION["admin_id"]=$row["admin_id"];

$url= "admin.dashboard.php";
echo '<script type="text/javascript">';
echo 'window.location.href="'.$url.'";';
echo '</script>';
echo '<noscript>';
echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
echo '</noscript>'; exit;
  }


} else {
  $myurl="login.php";
  echo '<script type ="text/JavaScript">';  
echo 'alert("you have entered wrong credentials")';  
echo 'window.location.href="'.$myurl.'";';
echo '</script>';
echo '<noscript>';
echo '<meta http-equiv="refresh" content="0;url='.$myurl.'" />';
echo '</script>'; 

    // header("Location : http://localhost/foodapp/admin/login.php");

}
$conn->close();
?>