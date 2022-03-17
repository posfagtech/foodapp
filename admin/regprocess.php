<?php
include '../config/config.php';
$fname = htmlspecialchars($_POST['adminfirstname']);
$lname = htmlspecialchars($_POST['adminlastname']);
$email = htmlspecialchars($_POST['adminemail']);
$num =   htmlspecialchars($_POST['adminnumber']);
$countrycode = htmlspecialchars($_POST['admincountrycode']);
$location =   htmlspecialchars($_POST['adminlocation']);
$country = htmlspecialchars($_POST['admincountry']);
$shopname = htmlspecialchars($_POST['adminshop']);
$pswd =  htmlspecialchars($_POST['adminpassword']);
$logo =  htmlspecialchars($_FILES['adminlogo']['name']);
$tlogo = $_FILES['adminlogo']['tmp_name'];


$conn = new mysqli($servername, $username, $password,$dbname);
  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }
$sql = "INSERT INTO admin_table (admin_name, admin_secondname, admin_email, admin_phone,admin_password, admin_location,store_name,admin_country,admin_countrycode,admin_logo) 
VALUES ('$fname','$lname','$email','$num','$pswd','$location', '$shopname','$country','$countrycode','$logo')";

  if (mysqli_query($conn, $sql)) {
    move_uploaded_file($tlogo, 'uploads/logo/'.$logo);
    echo '
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Redirect</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../admin/image/favico.png" />
        <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"rel="stylesheet"/>
        
 </head>
    <div class="spinner-grow text-success" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>


      <p>Web page redirects after 5 seconds.</p>

<script>

setTimeout(function(){
  window.location.href = "login.route.php";
}, 5000);
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>

</body>
</html>';

    // header("Location: login.php");
  } else {
    echo  mysqli_error($conn);
  };


// };
?>




