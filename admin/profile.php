<?php 
session_start();
error_reporting(0);
include "../config/config.php";
$success=$_SESSION["success"];
if($success==$_SESSION["success"]){
   $name= $_SESSION["admin_name"];
   $uid = $_SESSION["admin_id"];
   $query = "SELECT * FROM `admin_table` WHERE `admin_id`='$uid'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        while($row = mysqli_fetch_assoc($result)){
            $user_id = $row['admin_id'];
            $username = $row['admin_name'];
            $image = $row['admin_logo'];
            $email = $row['admin_email'];
            $password = $row['admin_password'];
            $age = $row['store_name'];
            $mobile = $row['admin_phone'];
            $loc = $row['admin_location'];
        }
    }else{
        header("location: ./login.php");
    }
}

if (isset($_POST['update'])) {
    # code...
    $target_dir = "uploads/";
    $fn = $_POST['fname'];
    $sn = $_POST['sName'];
    $pa = $_POST['pass'];
    $loca = $_POST['location'];
    $ma = $_POST['mail'];
    $mob = $_POST['mobile'];
    $userId = $_POST['userid'];
    $imgs =  $_FILES['photo']['name'];
    $timg = $_FILES['photo']['tmp_name'];
    // $countfile = count($_FILES['photo']['name']);
    if (!empty($imgs)) {

        // $fullname = $fn ." ".$sn;
        # code...
        $updates = "UPDATE `admin_table` SET `admin_name`='$fn',`admin_email`='$ma',`admin_password`='$pa',`admin_phone`='$mob',`admin_location`='$loca',`store_name`='$sn',`admin_logo`='$imgs' WHERE `admin_id`='$userId'";
        // $update = "UPDATE `admin_table` SET `admin_name`='',`store_name`='',`admin_password`='',`admin_location`='',`admin_email`='', `admin_logo`='', `admin_phone`='' WHERE ";

        $result = mysqli_query($conn, $updates);
        if(unlink('./uploads/logo/', $image)){
            if (move_uploaded_file($timg, 'uploads/logo/'.$imgs)) {
                // $both = $target_dir . $img;
                
                $msg = "<p class='text-success text-center'>Profile Update</p>";
                $_SESSION['feedback']=$msg;
                header('location: ./profile.php');
            }else{
                $msg = "<p class='text-danger text-center'>Profile not Update</p>";
                $_SESSION['feedback']=$msg;
                header('location: ./profile.php');
            }
        }
        
    }else{
        // $fullname = $fn ." ".$sn;
        // $updates = "UPDATE `admin_table` SET `admin_name`='$fn',`store_name`='$sn',`admin_password`='$pa',`admin_location`='$loca',`admin_email`='$ma', `admin_phone`='$mob' WHERE `admin_id`='$us'";
        $update = "UPDATE `admin_table` SET `admin_name`='$fn',`admin_email`='$ma',`admin_password`='$pa',`admin_phone`='$mob',`admin_location`='$loca',`store_name`='$sn' WHERE `admin_id`='$userId'";

        $result = mysqli_query($conn, $update);
        // move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
        if ($result) {

            $msg = "<p class='text-success text-center'>Profile Update, But Image not Uploaded.</p>";
            $_SESSION['feedback']=$msg;
            header('location: ./profile.php');
        }else{
            $msg = "<p class='text-danger text-center'>Profile not Update</p>";
            $_SESSION['feedback']=$msg;
            header('location: ./profile.php');
        }
    }
    
}

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
                        <!-- Logo icon -->
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
                            $querysL = "SELECT * FROM admin_table WHERE admin_id ='$uid'";
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
                        <li class="sidebar-item active"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="admin.dashboard.php" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span
                                    class="hide-menu">Dashboard</span>
                                </a>
                        </li>
                        <li class="sidebar-item"> 
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
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Profile</h1> 
                    </div>
                    <div class="col-6">
                        <div class="text-end upgrade-btn">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- End Container fluid  -->
            <div class="container-fluid">
                <!-- Table -->
                
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">Update your Profile.</h4>
                                        <h5 class="card-subtitle">Users <?php echo $name;?></h5>
                                    </div>
                                   
                                </div>
                                <!-- title -->
                                <div class="table-responsive">
                                   <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <?php if (!empty($_SESSION['feedback'])) {
                    # code...
                    echo $_SESSION['feedback'];
                }?>
                <div class="card-body">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <div class="p-3" id="preview1">
                                <img src="./uploads/logo/<?php echo $image;?>"  width="300px" height="auto" alt="logo" />                            
                            </div><br>
                            <label class="small mb-1" for="inputUsername">Logo</label>
                            <input  type='file' name="photo" id="image1" style="color:red" accept=".jpg, .gif, .jpeg, .png" />
                            <input class="form-control" name="userid" type="hidden" value="<?php echo $user_id;?>" />
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Full name</label>
                                <input class="form-control" id="inputFirstName" type="text" name="fname" placeholder="Enter your first name" value="<?php echo $username;?>">
                            </div>
                           <!-- Form Group (birthday)-->
                           <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Store Name</label>
                                <input class="form-control" id="inputBirthday" type="text" name="sName" placeholder="Enter your Store Name" value="<?php echo $age;?>">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Password</label>
                                <input class="form-control" id="inputOrgName" type="text" name="pass" placeholder="Enter your organization name" value="<?php echo $password; ?>" />
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Location</label>
                                <input class="form-control" id="inputLocation" type="text" name="location" placeholder="Enter your location" value="<?php echo $loc;?>">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <!-- <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" name="mail" placeholder="Enter your email address" value="<?php echo $email?>">
                        </div> -->
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" name="mobile" type="tel" placeholder="Enter your phone number" value="<?php echo $mobile;?>">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" type="email" name="mail" placeholder="Enter your email address" value="<?php echo $email?>">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <input class="btn btn-primary" type="submit" name="update" value="Save changes" />
                    </form>
                </div>
            </div>
            
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




