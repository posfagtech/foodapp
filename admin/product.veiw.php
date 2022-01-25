<?php 
session_start();
include "../config/config.php";
// echo $_SESSION['admin_id'];
if($_SESSION['admin_id']){
    $adminid=$_SESSION['admin_id'];
    $sql= "SELECT * FROM admin_product WHERE $adminid=admin_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container row">
<?php
foreach($result as $row){
           $_SESSION['product_name'] = $row["product_name"];
           $_SESSION['product_image'] = $row["product_image1"];
           $_SESSION['product_description'] = $row["product_description"];
          //  header("location:  viewproduct.php");
?>
  
  <div class="card col-4" style="width:400px">
    <img class="card-img-top" src="<?php echo $_SESSION['product_image'] ?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title text-danger">Tl &np <?php echo $row['product_price'] ?></h4>
      <p class="card-text"><?php echo $_SESSION['product_description'] ?></p>
      <a href="#" class="btn btn-primary stretched-link">Add to cart</a>
    </div>
  </div>
</div>
</body>
</html>

  <?php  
      }
     
    } else{
      echo "0 results";

    }

  }
    $conn->close();

?>