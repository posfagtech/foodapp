<?php
session_start();
include "../config/config.php";
// echo $_SESSION['admin_id'];
if(isset($_GET['id'])){
    $id=$_GET["id"];
    // $seller=$_GET["seller"];
    // $sql= "SELECT * FROM admin_product WHERE $id=product_id";
    // $sql="SELECT * FROM admin_product,admin_table
    //  WHERE admin_id=admin_product.admin_id and product_id= $id";


$sql="SELECT * FROM admin_product p JOIN admin_table a ON (p.admin_id= a.admin_id) WHERE p.product_id= $id";
    $result = $conn->query($sql);
    // if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $productname= $row["product_name"];
            $productprice= $row["product_price"];
            $adminid=$row["admin_id"];
            $productdescription= $row["product_description"];
            $_SESSION['productid']=$row['product_id'];
            $_SESSION['adminid']=$row['admin_id'];
            $productimage=$row['product_image1'];
            $kitchename=$row['store_name'];

            
          }
 
    

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../admin/image/favico.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!"><img src="../admin/image/logo.png" class="rounded" alt="Cinque Terre" width="304" height="95"> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" style="color:rgb(237,127,18)"  data-bs-toggle="dropdown" aria-expanded="false">Choose country</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Nigeria Food</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Ghana Food</a></li>
                                <li><a class="dropdown-item" href="#!">Congo Food</a></li>
                                <li><a class="dropdown-item" href="#!">zimbabwe Food</a></li>
                                <li><a class="dropdown-item" href="#!">Turkish Food</a></li>


                            </ul>
                        </li>
                    </ul>
                    <!-- pop over start -->
                    <form class="d-flex">
                    <a href="../admin/admin.register.php" type="button" class="btn"  style="background:rgb(237,127,18); color:white" data-bs-target="#myModal">
                    <i class="bi-cart-fill me-1"></i>
                         Become a seller 
                    </a>
   
                 </form> 
             </nav>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../admin/<?php echo $productimage?> " alt="..." /></div>
                    <div class="col-md-6" style="background:rgb(237,127,18); color:white">
                        <div class="display-6 fw-bolder" style="background:rgb(237,127,18); color:white"><?php echo $kitchename?></div>
                        <h1 class="small mb-1"><?php echo $productname?></h1>
                        <div class="fs-5 mb-5">
                            <!-- <span class="text-decoration-line-through"><?php echo   $product_price?></span> -->
                            <span><i>TL</i><?php echo  $productprice?></span>
                        </div>
                        <hr>
                        <p class="lead"><?php echo  $productdescription?>
                            <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p> -->
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <a href="../chat/index.php"  class="btn btn-outline-dark bg-success text-white flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Chat Seller
                            </a>
                        </div>
                    </div>
                </div>
            </div>


<!-- ihdihishadihsaihai -->
<section class="py-5 bg-light">
<h2 class="fw-bolder mb-4">Others Foods from this seller</h2>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $adminid=$_SESSION['adminid'] ;
                $product_id= $_SESSION['adminid'];
                //  $sql= "SELECT * FROM admin_product WHERE $id= 12";
                $sql= "SELECT * FROM admin_product WHERE admin_id= $adminid";
                $result = $conn->query($sql);
                //  $result = $conn->query($sql);
        foreach($result as $row){
           $_SESSION['product_name'] = $row["product_name"];
           $_SESSION['product_image'] = $row["product_image1"];
           $_SESSION['product_description'] = $row["product_description"];
           $_SESSION['product_price'] = $row["product_price"];

        //    $_SESSION['locaion'] = $row["admin_location"];
        //    $_SESSION['storename'] = $row["store_name"];
           $_SESSION['product_id'] = $row["product_id"];
        //    $_SESSION['admin_id']= $row['admin_id'];
        // }
?>
   
                    <div class="col mb-5">
                        <div class="card h-40">
                            <!-- Sale badge-->
                            <div class="badge text-white position-absolute"  style="top: 0.5rem; right: 0.5rem; background:rgb(237,127,18)">
                             <?php 
                            //  echo ucfirst($storename)
                             ?> 
                        </div>
                            <!-- Product image-->
                            <img class="card-img-top" src="../admin/<?php echo$_SESSION['product_image'] ?>" alt="..." width="50" height="170" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $_SESSION['product_name']?></h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- <img src="../admin/image/location.jpg" height="50px" /><?php echo $locaion?><br> -->
                                    <!-- Product price-->
                                    <span class="text-muted"><i>TL</i><?php echo $_SESSION['product_price']?></span>
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-success mt-auto" href="shop.php?id=<?php echo $product_id?>">Contact Seller</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- anotehr one -->

                    <!-- ennnd -->
           
                           
                           
                  <?php
                };
                ?>
                </div>
            </div>
        </section>
            <!-- dcdihsaicsaichsia -->
        </section>
        <!-- Related items section-->
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; FoodHut.online 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php
    };

?>