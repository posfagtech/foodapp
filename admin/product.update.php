<?php
session_start();
include "../config/config.php";
$productid=$_SESSION['productid'];
$productname = htmlspecialchars($_POST['productname']);
$productprice = htmlspecialchars($_POST['productprice']);
$productdescrb = htmlspecialchars($_POST['productdescription']);
$sql = "UPDATE admin_product SET product_name='$productname', product_price='$productprice', product_description='$productdescrb' WHERE product_id=$productid";

if ($conn->query($sql) === TRUE) {
//   echo "Record updated successfully";
header('location:product.edit.php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();?>