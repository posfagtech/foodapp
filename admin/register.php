<!-- require "config.php"; -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>AdminRegister</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Form Validation</h2>
  <p>In this example, we use <code>.needs-validation</code>, which will add the validation effect AFTER the form has been submitting (if there's anything missing).</p>
  <p>Try to submit this form before filling out the input fields, to see the effect.</p>
  <div class="card" style="width:500px">
  <form action="regprocess.php" class="needs-validation p-4 ml-3 bg-success" novalidate  method="post">
    <div class="form-group">
      <label for="uname">Full Name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Name" name="adminname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Username" name="adminemail" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Phone:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter your valid number" name="adminnumber" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Choose Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="adminpswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Comfirm Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="adminpswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<?php
$fname= $_POST["adminname"];
$emil=  $_POST["adminemail"];
$num=  $_POST["adminnumber"];
$pswd= $_POST["adminpswd"];
echo $fname;


$conn = new mysqli($servername, $username, $password,$dbname);


  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }
$sql = "INSERT INTO admin_table (admin_name, admin_email, admin_phone, admin_password) 
VALUES ($fname,$emil,$num,$pswd)";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo  mysqli_error($conn);
  };


// };
?>

</body>
</html>
