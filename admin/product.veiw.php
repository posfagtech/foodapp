<?php 
session_start();
include "../config/config.php";
// echo $_SESSION['admin_id'];
$success=$_SESSION["success"];

if($_SESSION['admin_id']){
    $adminid=$_SESSION['admin_id'];
    $sql= "SELECT * FROM admin_product WHERE $adminid=admin_id";
    $result = $conn->query($sql);
    if($success==$_SESSION["success"]){
      $name= $_SESSION["admin_name"];
   }
    if ($result->num_rows > 0){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>view product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
   <!-- Custom CSS -->
   <link href="./css/chartist.min.css" rel="stylesheet">
    <link href="./css/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./css/style.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/7462836d2c.js" crossorigin="anonymous"></script>
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
                    
                <style>
        .logo {
  width: 50px;
  height: 50px;
  border-radius: 10px;
}
    </style>
                <a class="navbar-brand" href="admin.dashboard.php">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <?php 
                        // $name= $_SESSION["admin_name"];
                        $uid = $_SESSION["admin_id"];
                        $querys = "SELECT * FROM admin_table WHERE admin_id ='$uid'";
                        $resultL = $conn->query($querys);
                        if($resultL){
                            // output data of each row
                            while($rowL = mysqli_fetch_assoc($resultL)){
                                $logo = $rowL['admin_logo'];

                                if(!empty($logo)){
                                    echo ' <img class="logo" src="./uploads/logo/'.$logo.'" alt="'.$logo.'" />';
                                }else{
                                    echo '<i class="fa fa-user"></i>';
                                }
                            }
                        
                        }
                        ?>
                        
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
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="add_product.php" aria-expanded="false">
                                <i class="mdi mdi-plus"></i>
                                    <span class="hide-menu">Add Product</span>
                                </a>
                        </li>
                        <li class="sidebar-item active"> 
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
        <div class="page-wrapper">
            
            <!-- Bread crumb and right sidebar toggle -->
            
            <div class="page-breadcrumb">

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

  <div class="card" style="height:auto;" >
    <img class="card-img-top" src="<?php echo $_SESSION['product_image'] ?>" alt="Card image" style="width:100%; height:200px">
    <div class="card-body">
      <div class="row">
      <h4 class="card-title col-6 text-danger"><b></b> <?php echo $row['product_name'] ?></h4>
      <h4 class="card-title col-6 text-danger"><b>$</b> <?php echo $row['product_price'] ?></h4>
      </div>
      <p class="card-text"><?php echo $_SESSION['product_description'] ?></p>
      <!-- <span>product id:<?php echo $_SESSION['product_id'] ?> </span> -->
    </div>
    <div class="card-footer">
    <a class="btn btn-success" href="product.edit.php?id=<?php echo $row['product_id'];?>">Edit</a>
    <a href="product.delete.php?id=<?php echo $row['product_id'];?>" onClick="return confirm('Are you sure you want to delete?')">
  <i class='fas fa-window-close float-right' name="delete" style='font-size:48px;color:red;float:right;'></i></a>
    </div>
  </div>


<?php
}

// echo '<a href="admin.dashboard.php" class="btn btn-primary stretched-link">upload another product</a>';
     
    } else{?>
  </div>
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
</div>
</body>
</html>

  <?php  
     

  }else{

  }
    $conn->close();

?>

