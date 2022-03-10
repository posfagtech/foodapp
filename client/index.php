<?php 
session_start();
include "../config/config.php";
// $sql= "SELECT  FROM admin_product,admin_table limit 4";
$sql="SELECT product_id,product_name,product_description,
product_price,product_image1,
 store_name, admin_location
FROM admin_product p JOIN admin_table a ON a.admin_id=p.admin_id LIMIT 12";
$result = $conn->query($sql);
// echo mysqli_error($sql);
// while($row = mysqli_fetch_array($result)) {



// echo $row;
if ($result->num_rows > 0){
    // echo "number of rows: " . $result->num_rows;
 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FOODHUT</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../admin/image/favico.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style2.css" rel="stylesheet" />

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
        <!-- Header-->
  
        <header class="py-5"  
        style="background-image:linear-gradient(5deg, rgb(237,127,18), rgba(000, 0, 120, 0.3)), url('../admin/image/food2.jpg');
            height: 60vh; width:100%; background-size:cover";>
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h4 class="display-4">The fastest and easy place to <br> connect with a food seller</h4>
                    <!-- <img src="../admin/image/food2.jfif" class="rounded-circle" alt="Cinque Terre" width="304" height="236">  -->
                    <p class="lead fw-normal text-white-100 mb-0">Find the best kitchen in town,Search for restaurants in your area!</b></p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                 <?php 
        foreach($result as $row){
           $product_name = $row["product_name"];
           $product_price = $row["product_price"];
           $product_image = $row["product_image1"];
           $product_description = $row["product_description"];
           $locaion = $row["admin_location"];
           $storename = $row["store_name"];
           $product_id = $row["product_id"];
        //    $admin_id= $row['admin_id'];

?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge text-white position-absolute"  style="top: 0.5rem; right: 0.5rem; background:rgb(237,127,18)">
                            <?php echo ucfirst($storename)?></div>
                            <!-- Product image-->
                            <img class="card-img-top" src="../admin/<?php echo $product_image?>" alt="..." width="50" height="170" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $product_name?></h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <img src="../admin/image/location.jpg" height="50px" /><?php echo $locaion?><br>
                                    <!-- Product price-->
                                    <span class="text-muted"><i>TL</i><?php echo $product_price?></span>
                                    
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
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; foodhot 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <!-- <script src="bootstrap.bundle.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php
                };
                ?>