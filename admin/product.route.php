<?php
session_start();
include "../config/config.php";
if($_SESSION['admin_id']){
    $adminid=$_SESSION['admin_id'];
    $productname = htmlspecialchars($_POST['productname']);
    $productprice = htmlspecialchars($_POST['productprice']);
    $productdescrb = htmlspecialchars($_POST['productdescription']);
    $productimage = htmlspecialchars($_POST['productimage']); 
     

    if(isset($_POST['imgupload'])){
        // $file = $_FILES[$productimage];
        
        $fileName = $_FILES[$productimage]['name'];
        print_r($file);
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES[$productimage]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    

    }


//     $sql= "INSERT INTO admin_product (product_name,product_price,product_description,product_image1,admin_id)
//     value('$productname','$productprice',' $productdescrb','$productimage','$adminid')";
           
//             if($conn->query($sql)){
//                 echo "new product added successfully";
//             }else{
//                 echo "Error: " . $sql . "<br>" . $conn->error;
//             mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//             };



// }else{
//  echo "wrong way";
// };
};



?>