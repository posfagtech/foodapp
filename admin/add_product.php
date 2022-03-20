<?php 
session_start();
include "../config/config.php";
$success=$_SESSION["success"];
if($success==$_SESSION["success"]){
   $name= $_SESSION["admin_name"];
}

$id = $_SESSION["admin_id"];
$query = "SELECT * FROM admin_table WHERE admin_id ='$id' and  admin_name='$name'";
$result = $conn->query($query);


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="noindex,nofollow" />
        <title>Admin Dashboard</title> 
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
   <!-- Custom CSS -->
   <link href="./css/chartist.min.css" rel="stylesheet">
    <link href="./css/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./css/style.min.css" rel="stylesheet" />
    </head>
    <body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    
                    
                    <a class="navbar-brand" href="admin.dashboard.php">
                        <b class="logo-icon">
                            <style>
                                .logo{
                                    width: 50px;
                                    height: 50px;
                                    border-radius: 10px;
                                }
                            </style>
                            <?php 
                            $querysL = "SELECT * FROM admin_table WHERE admin_id ='$id'";
                            $resultl = $conn->query($querysL);
                            if($resultl){
                                // output data of each row
                                while($rowsl = mysqli_fetch_assoc($resultl)){
                                    $logo = $rowsl['admin_logo'];

                                    if(!empty($logo)){
                                        echo '<img src="uploads/logo/'.$logo.'" class="logo" alt="logo" />';
                                    }else{
                                        echo '<i class="fa fa-user"></i>';
                                    }
                                }
                            
                            
                            }?>
                           
                        </b>
                        <span class="logo-text">
                            <?php echo $name;?>
                        </span>
                    </a>
                    
                    
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="mdi mdi-menu"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item search-box"> 
                        </li>
                    </ul>
                    
                    <!-- Right side toggle and nav items -->
                    
                    <ul class="navbar-nav float-end">
                        
                        <!-- User profile and search -->
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-list"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./profile.php"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                    My Balance</a> -->
                                <a class="dropdown-item" href="./logout.php">
                                     <i class="mdi mdi-logout"></i>
                                <span
                                    class="hide-menu">Logout</span>
                                </a>
                            </ul>
                        </li>
                        
                        <!-- User profile and search -->
                        
                    </ul>
                </div>
            </nav>
        </header>
        
        <!-- End Topbar header -->
        
        
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="admin.dashboard.php" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span
                                    class="hide-menu">Dashboard</span>
                                </a>
                        </li>
                        <li class="sidebar-item active"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="./add_product.php" aria-expanded="false">
                                <i class="mdi mdi-plus"></i>
                                    <span class="hide-menu">Add Product</span>
                                </a>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="product.veiw.php" aria-expanded="false">
                                <i class="mdi mdi-heart-outline me-1"></i>
                                <span
                                    class="hide-menu">View Products</span>
                                </a>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="orders_view.php" aria-expanded="false">
                                <i class="mdi mdi-eye-outline me-1"></i>
                                <span
                                    class="hide-menu">Orders</span>
                                </a>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="./profile.php" aria-expanded="false">
                                <i class="ti-user"></i>
                                <span
                                    class="hide-menu">Profile</span>
                                </a>
                        </li>
                        <!-- <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="starter-kit.html" aria-expanded="false">
                                <i class="mdi mdi-file"></i>
                                <span
                                    class="hide-menu">Blank</span>
                                </a>
                        </li> -->
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="./logout.php" aria-expanded="false">
                                <i class="mdi mdi-logout"></i>
                                <span
                                    class="hide-menu">Logout</span>
                                </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        
        
        <!-- Page wrapper  -->
        
        <div class="page-wrapper">
            
            <!-- Bread crumb and right sidebar toggle -->
            
            <div class="page-breadcrumb">
                <!-- < Page content> -->
                <div class="container-fluid myproduct" id="product"> 
                <?php
                // session_start();
                if(isset($_SESSION['feedback'])){
                echo '<p class="text-danger"> '.$_SESSION["feedback"].' </p>';
            }
                ?>
                    <h1 class="mt-4">Add your new product Here</h1>
               
                    <div id="login-page" class="row">
                     <div class="col s12 z-depth-4 card-panel"> 
                    <form class="login form" action="product.route.php" method="post" enctype="multipart/form-data"> 
                    <div class="form-group" style="color:red">
                        <label for="productname" >Product Name</label>
                        <input type="text" class="form-control" name="productname" placeholder="Enter Product Name" required />
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group" style="color:red">
                        <label for="productprice">Product Price</label>
                        <input type="text" class="form-control" name="productprice" placeholder="Enter the product price" required />
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group" style="color:red">
                        <label for="comment">Description:</label>
                        <textarea class="form-control" rows="5" name="productdescription" placeholder="Please give details of your product"  maxlength="100" required></textarea>
                    </div>
                    <br>
                    <div class="container">
                    <input accept=".jpg, .jpeg, .png, .gif" type='file' name="productimage" style="color:red" required/>
                    <!-- <img id="blah" src="image/default.png" alt="your image" style="width:30%;" /> -->
                    </div>
                    <button type="submit" name="imgupload" class="btn btn-success mt-5 mx-auto text-white mx-auto d-block">Upload Product</button>
                    <!-- <input type="submit" value="Upload Product" class=""/> -->
                           <br><br><br>
                           <hr>
                    <!-- <button type="submit" class=" form-control btn btn-primary">upload product</button> -->
                    </form>
                    </div>
                    </div>
                </div>
            </div>
            
            <!-- End Container fluid  -->
            
            
            <!-- footer -->
            
            <!-- <footer class="footer text-center">
                All Rights Reserved Designed and Developed by <a
                    href="https://www..com">Leadcodegiants</a>.
            </footer> -->
            
            <!-- End footer -->
            
        </div>
    </div>
        <!-- End Page wrapper  -->
        
    </div>
        
        <!-- Bootstrap core JS-->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script> -->
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- <script src="jquery-3.5.1.min.js"></script> -->
        
        <script src="./js/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="./js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="./js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="./js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="./js/chartist.min.js"></script>
    <script src="./js/chartist-plugin-tooltip.min.js"></script>
    <script src="./js/dashboard.js"></script>
<script>

imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
};

$(document).ready(function(){
   $("#addproduct").click(function(){
    $(".myproduct").show();
 });
 
//  $("#viewproduct").click(function()){
//     $(".myproduct").hide();
//   });

});
</script>
    </body>
</html>




