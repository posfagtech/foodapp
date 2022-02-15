<?php
include "../config/config.php";
session_start();
$id = $_GET['id'];
$sql =" DELETE FROM admin_product WHERE product_id= $id";

if ($conn->query($sql) === TRUE) {
  // echo "Record deleted successfully";
  header('location: product.veiw.php');

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();




?>