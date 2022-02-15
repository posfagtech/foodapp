<?php
session_start();
include "../config/config.php";
// echo $_SESSION['admin_id'];
if(isset($_GET['id'])){
    $id=$_GET["id"];
    $sql= "SELECT * FROM admin_product WHERE $id=product_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $productname= $row["product_name"];
            $productprice= $row["product_price"];
            $productdescription= $row["product_description"];
            $_SESSION['productid']=$row['product_id'];

            
          }
 
    

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dashboard</title> 
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
    <body>
     
             <!-- Page content wrapper -->
            <div id="page-content-wrapper">
                <!-- < Page content> -->
                 <div class="container-fluid myproduct" id="product" style="display:"> 
                    <h1 class="mt-4">Edit Product</h1>
                   
                    <div id="login-page" class="row">
                     <div class="col s12 z-depth-4 card-panel"> 
                    <form class="login form" action="product.update.php" method="post" enctype="multipart/form-data"> 
                    <div class="form-group" style="color:red">
                        <label for="productname" >Product Name</label>
                        <input type="text" class="form-control" name="productname" value="<?php echo $productname ?>" placeholder="Enter Product Name">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group" style="color:red">
                        <label for="productprice">Product Price</label>
                        <input type="text" class="form-control" value="<?php echo $productprice?>" name="productprice" placeholder="Enter the product price">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group" style="color:red">
                        <label for="comment">Description:Please give details of your product</label>
                        <textarea class="form-control"  rows="5" name="productdescription"><?php echo htmlspecialchars($productdescription)?></textarea>
                    </div>
                    <br>
                    <div class="container">
                    <input  type='file' name="productimage" style="color:red"/>
                    <!-- <img id="blah" src="image/default.png" alt="your image" style="width:30%;" /> -->
                    </div>
                    <button type="" name="imgupload" class="btn btn-success">upload image</button>
                           <br><br><br>
                           <hr>
                    <button type="submit" class=" form-control btn btn-primary">upload product</button>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- <script src="jquery-3.5.1.min.js"></script> -->

    </body>
</html>
<?php 
    }else{
        echo "cannot find any product to edit";
    }
}else{
    echo "erro";
}
?>



