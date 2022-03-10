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
$logo =  htmlspecialchars($_POST['adminlogo']);


$conn = new mysqli($servername, $username, $password,$dbname);
  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }
$sql = "INSERT INTO admin_table (admin_name, admin_secondname, admin_email, admin_phone,admin_password, admin_location,store_name,admin_country,admin_countrycode,admin_logo) 
VALUES ('$fname','$lname','$email','$num','$pswd','$location', '$shopname','$country','$countrycode','$logo')";

  if (mysqli_query($conn, $sql)) {
    echo '
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




