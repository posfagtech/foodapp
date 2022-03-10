<?php
include "../config/config.php";
if(isset($_POST['sendCode'])){
  $mail = $_POST['email'];

//   Getting users info from DB if correct 
  $query ="SELECT `admin_email`FROM `admin_table` WHERE `admin_email`='$mail'";
  $result = $conn->query($query);
  if($result->num_rows >0){
      // output data of each row
    $row = $result->fetch_assoc();
    if($row['admin_email'] == $mail){
        $msg = "<p class='text-success'>Message sent to your mail, Please check. </p>";
    }
  }else{
    $msg = "<p class='text-danger'>Email address not registered, please register. </p>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Forget Password</title>

  <!-- Favicons-->
  <link rel="icon" href="image/favico.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css1/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css1/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css1/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css1/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js1/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="blue">
<!-- <p class="center">Please fill in your credentials to login.</p> -->

<style>
    .text-danger{
        color:red;
    }
    .bg-secondary{
        background-color: #999000;
        padding: 10%;
        border-radius: 50%;
        width: 50%;
        color: #fff !important;
    }
    .text-success{
        color: green;
    }
</style>

  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="login-form" id="form">
        <p class="center" style="color:red; background:white; padding:20px"><?php echo @$msg;?></p>
        <div class="row">
            <center>
                <h2 class="bg-secondary">
                    <i class="mdi-social-person-outline prefix"></i>
                </h2>
            </center>
          <div class="input-field col s12 center">
            <p class="center login-form-text"> Forget Password.</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
          <i class="mdi-communication-email prefix"></i>
            <input name="email" id="username" type="email" placeholder="Email"/>
            <label for="mail" class="center-align"></label>
          </div>
        </div>
         <br>
        <div class="row mt-5">
			<input type="submit" name="sendCode" class="btn waves-effect blue col s12" value="Send Code" />
            
          </div>
          <style>
            .float-right{
              float: right;
            }
          </style>
          <div class="float-right">
            <a href="forgetpassword.php">Login to your account</a>
          </div>
		  		<div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small">New here?<a href="admin.register.php">Register Now!</a></p>
          </div>         
        </div>
        </div>


      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="js1/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js1/materialize.min.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js1/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js1/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js1/custom-script.js"></script>

</body>
</html>
