<?php 
session_start();
include "../config/config.php";
// echo $_SESSION['admin_id'];
if($_SESSION['admin_id']){
    $adminid=$_SESSION['admin_id'];
    $sql= "SELECT * FROM admin_product WHERE $adminid='admin_id'";
    $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
      // output data of each row
    //   while($row = $result->fetch_assoc()) {
        foreach($result as $row) {
            echo '<strong>Per room amount:  </strong>'.$row['product_name'];
        };
        //   echo $row['product_name'];
        // $_SESSION["admin_id"]=$row["admin_id"];
    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// };

// } else {

//    echo "Error: " . $result . "<br>" . $conn->error;;
// };
};



?>