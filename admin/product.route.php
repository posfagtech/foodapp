<?php
session_start();
include "../config/config.php";
if($_SESSION['admin_id']){
    $adminid=$_SESSION['admin_id'];
    $productname = htmlspecialchars($_POST['productname']);
    $productprice = htmlspecialchars($_POST['productprice']);
    $productdescrb = htmlspecialchars($_POST['productdescription']);
    $_SESSION['feedback']="" ;
    $myfiles=$_FILES["productimage"]["name"];
        if(isset($_POST['imgupload'])){
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($myfiles);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES['productimage']['tmp_name']);
        if($check !== false){
              $_SESSION['feedback']="File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
              header("location: add_product.php");
            }else{
              $_SESSION['feedback']="File is not an image";
              header("location: add_product.php");
                $uploadOk = 0;
                 }

              // Check file size
        if($_FILES["productimage"]["size"] > 500000){
        $_SESSION['feedback']="Sorry, your file is too large.";
        header("location: add_product.php");
        $uploadOk = 0;

        } 
             // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        $_SESSION['feedback']="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        header("location: add_product.php");
        $uploadOk = 0;

        }
            // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $_SESSION['feedback']="Sorry, your file was not uploaded. this may be because
            your file is too large and note that JPG, JPEG and PNG are allowed";
            header("location: add_product.php");
        
        // if everything is ok, try to upload file
            } else {
                $sql= "INSERT INTO admin_product (product_name,product_price,product_description,product_image1,admin_id)
                value('$productname','$productprice',' $productdescrb','$target_file','$adminid')";
                if($conn->query($sql)){
                        echo "new product added successfully";
                        $_SESSION['mysqlmessage']="new product added successfully";
                    }else{
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
                    };

                if (move_uploaded_file($_FILES["productimage"]["tmp_name"], $target_file)) {
                    $_SESSION['feedback']= "The file ". htmlspecialchars( basename( $_FILES["productimage"]["name"])). " has been uploaded.";
                    header("location: add_product.php");
           
                       
             } else {
            $_SESSION['feedback']="Sorry, there was an error uploading your file.";
            header("location: add_product.php");

        }
        }
  
      
    }

};



?>