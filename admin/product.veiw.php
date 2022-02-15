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
  <title>view product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/7462836d2c.js" crossorigin="anonymous"></script>
</head>
<body>
<button type="button"  href="admin.dashboard.php" class="btn btn-danger float-right">
<a href="admin.dashboard.php"  class="text-white">Back</a></button>
<br><br>
<div class="container">
  <div class="card-columns">
  <?php
foreach($result as $row){
           $_SESSION['product_name'] = $row["product_name"];
           $_SESSION['product_image'] = $row["product_image1"];
           $_SESSION['product_description'] = $row["product_description"];
           $_SESSION['product_id'] = $row["product_id"];
           $id=$_SESSION['product_id'];



          //  header("location:  viewproduct.php")

?>

  <div class="card" style="height:auto" >
  <a href="product.delete.php?id=<?php echo $row['product_id'];?>" onClick="return confirm('Are you sure you want to delete?')">
  <i class='fas fa-window-close float-right' name="delete" style='font-size:48px;color:red'></i></a>
    <img class="card-img-top" src="<?php echo $_SESSION['product_image'] ?>" alt="Card image" style="width:100%; height:200px">
    <div class="card-body">
      <h4 class="card-title text-danger"><b>$</b> <?php echo $row['product_price'] ?></h4>
      <p class="card-text"><?php echo $_SESSION['product_description'] ?></p>
      <span>product id:<?php echo $_SESSION['product_id'] ?> </span>
      <a class="btn btn-success" href="product.edit.php?id=<?php echo $row['product_id'];?>">Edit</a>
    </div>

  </div>


<?php
}

// echo '<a href="admin.dashboard.php" class="btn btn-primary stretched-link">upload another product</a>';
     
    } else{?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
  <center>
      <div class="container">
      <img class="img-responsive align-center" src="image/foodempty.png" alt="Chania" width="460" height="345"> 
      <div class="alert alert-danger">
      <strong>Opps!!!</strong> You have not upload any product.
      </div>
      <a href="admin.dashboard.php" class="btn btn-primary stretched-link">upload product</a>
      </div>
    </center>
   <?php };
    ?>

  </div>
</div>
</body>
</html>

  <?php  
     

  }else{

  }
    $conn->close();

?>

