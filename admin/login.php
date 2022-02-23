<?php
if(isset($_GET['message'])){
  $msg = $_GET['message'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
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
<p class="center">Please fill in your credentials to login.</p>



  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form method="post" action="login.route.php" class="login-form" id="form">
        <p class="center" style="color:red; background:white; padding:20px"><?php if(!empty($msg)){echo $msg;}?></p>
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text"> Login Here</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input name="email" id="username" type="email" placeholder="Email">
            <label for="mail" class="center-align"></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input name="password" id="password" type="password" placeholder="Email">
            <label for="password"></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <!-- <i class="mdi-action-lock-outline prefix"></i>
            <input name="password" id="password" type="password" placeholder="Email"> -->
            <input type="checkbox" placeholder="Remember Me" name="checked" id="checked" />
            <label for="checked"> Remember Me</label>
          </div>
        </div> <br> <br>
        <div class="row mt-5">
			<a href="javascript:void(0);" onclick="document.getElementById('form').submit();" class="btn waves-effect blue col s12">Login</a>
          </div>
          <style>
            .float-right{
              float: right;
            }
          </style>
          <div class="float-right">
            <a href="forgetpassword.php">Forget Password?</a>
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
