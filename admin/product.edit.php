<?php
session_start();
include "../config/config.php";
// echo $_SESSION['admin_id'];
// if($success===$_SESSION["success"]){
// }
$name= $_SESSION["admin_name"];
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
            $image = $row['product_image1'];
            
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
                    
                    
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
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
                                <i class="mdi mdi-face rounded-circle"></i> <?php echo $name;?>
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
                                href="gift.php" aria-expanded="false">
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
             <!-- Page content wrapper -->
                <div id="page-content-wrapper">
                    <!-- < Page content> -->
                    <div class="container-fluid myproduct" id="product"> 
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
                        <div class="container row">
                        <div class="p-3" id="preview1">
                            <img src="<?php echo $image;?>"  width="300px" height="auto" alt="<?php echo $image;?>" />                            
                        </div><br>
                        <input  type='file' name="productimage" id="image1" style="color:red" accept=".jpg, .gif, .jpeg, .png" />
                        <!-- <img id="blah" src="image/default.png" alt="your image" style="width:30%;" /> -->
                        </div>
                        <button type="submit" name="imgupload" class="btn mx-auto btn-block btn-success">upload image</button>
                        <!-- <button type="submit" class=" form-control btn btn-primary">upload product</button> -->
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>



        <script src="js/scripts.js"></script>
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
        function imagePreview1(fileInput) {
            if (fileInput.files && fileInput.files[0]) {
                var fileReader = new FileReader();
                fileReader.onload = function (event) {
                    $('#preview1').html('<img src="'+event.target.result+'" width="300px" height="auto" />');
                };
                fileReader.readAsDataURL(fileInput.files[0]);
            }
        }
        $("#image1").change(function () {
            imagePreview1(this);
        });
    </script>
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



