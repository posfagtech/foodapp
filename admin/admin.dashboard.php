<?php 
session_start();
include "../config/config.php";
$success=$_SESSION["success"];
if($success==$_SESSION["success"]){
   $name= $_SESSION["admin_name"];
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
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
             <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light"><?php echo $name ?></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="" id="addproduct">Add Products</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="product.veiw.php" id="viewproduct">view Product</a>
                     <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">Events</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-danger p-3" href="logout.php">Logout</a>
                </div>
            </div> 
             <!-- Page content wrapper -->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                 <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle"> Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- < Page content> -->
                 <div class="container-fluid myproduct" id="product" style="display:"> 
                    <h1 class="mt-4">Add your new product Here</h1>
                   
                    <div id="login-page" class="row">
                     <div class="col s12 z-depth-4 card-panel"> 
                    <form class="login form" action="product.route.php" method="post" enctype="multipart/form-data"> 
                    <div class="form-group" style="color:red">
                        <label for="productname" >Product Name</label>
                        <input type="text" class="form-control" name="productname" placeholder="Enter Product Name">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group" style="color:red">
                        <label for="productprice">Product Price</label>
                        <input type="text" class="form-control" name="productprice" placeholder="Enter the product price">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group" style="color:red">
                        <label for="comment">Description:Please give details of your product</label>
                        <textarea class="form-control" rows="5" name="productdescription"> </textarea>
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




