<?php
session_start();
include '../config/config.php';
$id= $_SESSION['product_id'];
    if(isset($_POST["submit"])){
        $sql="SELECT admin_id FROM admin_product  WHERE product_id=$id";
        $result = $conn->query($sql);
         while($row = $result->fetch_assoc()){
                $_SESSION['admin_id']= $row["admin_id"]; 
                // echo $admin_id;
                // echo "fetch successfully";
            } 
            
         $adminid=$_SESSION['admin_id'];
        $id= $_SESSION['product_id'];
        $email = htmlspecialchars($_POST['buyeremail']);
        $num =   htmlspecialchars($_POST['buyerphone']);
        $location =   htmlspecialchars($_POST['buyerlocation']);
        $message = htmlspecialchars($_POST['buyermessage']);

        $sql2 = "INSERT INTO order_table (product_id,admin_id,buyer_location,buyer_phone,buyer_email,buyer_message) VALUES 
        ('$id','$admini'd,'$location',$num,'$email','$message')";
        if (mysqli_query($conn, $sql2)) {
            header('location: ordercomplete.php');
        } else {
            echo  mysqli_error($conn);

                // session_start();
                // $_SESSION["error"]=true;
                // $errormessage="Email or Password not correct";
                // header("location:chat.php?message=$errormessage");
              }
        };
// }
    ?>