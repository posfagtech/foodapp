<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
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
 <!-- Navigation-->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!"><img src="../admin/image/logo.png" class="rounded" alt="Cinque Terre" width="304" height="95"> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../client">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    
                    </ul>
                </nav>
<body>
 
<section class="h-100 h-custom gradient-custom-2">
<form  class="was-validated" action="regprocess.php" method="POST" enctype="multipart/form-data">

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: rgb(237,127,18);">General Infomation</h3>
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" name="adminfirstname"id="form3Examplev2" class="form-control form-control-lg" required />
                        <label class="form-label" for="form3Examplev2">First name</label>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                         </div>
                          </div>
                            <div class="col-md-6 mb-4 pb-2">
                              <div class="form-outline">
                              <input type="text" name="adminlastname" id="form3Examplev3" class="form-control form-control-lg" required />
                            <label class="form-label" for="form3Examplev3">Last name</label>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                           </div>
                           </div>
                  </div>
                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="form3Examplev4" name="adminshop" class="form-control form-control-lg" required />
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                      <label class="form-label" for="form3Examplev4">kitchen Name</label>
                      
                    </div>
                  </div>

                 <div class="row"> 
              
                    <br>
                    <div>
                      <br>
                    <label for="formFileLg" class="form-label">upload your logo or picture</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file" name="adminlogo" accept=".jpg, .png, .jpeg" />
                  </div>
                    <div class="mb-4 pb-2">
                    <br>
                    <div class="input-group form-outline" mb-3>
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control form-control-lg" id="password" name="adminpassword" placeholder="Password (8 characters minimum)" minlength="8" required>
                                <span class="input-group-text"><i class="far fa-eye-slash" id="togglePassword"></i></span>
                                <label class="form-label" for="form3Examplev4">Choose Password</label>
                                <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                              </div>
                  </div>
                  </div>

                </div>
              </div>
              <!-- contact details -->
              <div class="col-lg-6 bg-dark text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Contact Details</h3>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" name="adminlocation" id="form3Examplea2" name="" class="form-control form-control-lg" required/>
                      <label class="form-label" for="form3Examplea2">kitchen Location</label>
                    </div>
                  </div>

                  
                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" name="admincountry" id="form3Examplea6" class="form-control form-control-lg" required/>
                      <label class="form-label" for="form3Examplea6">Your citizenship</label>
                      <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" name="admincountrycode" id="form3Examplea7" class="form-control form-control-lg" required />
                        <label class="form-label" for="form3Examplea7">Code +</label>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>

                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="number" name="adminnumber" id="form3Examplea8" class="form-control form-control-lg" required />
                        <label class="form-label" for="form3Examplea8">Phone Number</label>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="form-outline form-white">
                      <input type="email" name="adminemail" id="form3Examplea9" class="form-control form-control-lg" required />
                      <label class="form-label" for="form3Examplea9">Your Email</label>
                      <div class="valid-feedback">Email field is valid!</div>
                       <div class="invalid-feedback">Email field cannot be blank!</div>

                    </div>
                    
                  </div>

                  <div class="form-check d-flex justify-content-start mb-4 pb-3">
                    <input class="form-check-input me-3" type="checkbox" id="form2Example3c" required/>
                    <label class="form-check-label text-white" for="form2Example3">
                      I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your site.
                    </label>
                  </div>
                  <button type="submit" name="submit" class="btn btn-light btn-lg">Register</button>
                  
                              <div class="row">
                      <div class="input-field col s6 m6 l6">
                        <p class="margin medium-small">Have an account?<a href="login.php">Login</a></p>
                      </div>   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</fom>
</section>
 <!-- Bootstrap core JS-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"
></script>
</body>

</html>
<!-- css -->
<style>
  @media (min-width: 1025px) {
  .h-custom {
    height: 200vh !important;
  }
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: .75em;
  padding-right: .75em;
}
.card-registration .select-arrow {
  top: 20px;
  bottom: 10px;
}

.gradient-custom-2 {
  /* fallback for old browsers */
  background: #a1c4fd;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
}

.bg-indigo {
  background-color: rgb(237,127,18);
}
@media (min-width: 992px) {
  .card-registration-2 .bg-indigo {
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
  }
}
@media (max-width: 991px) {
  .card-registration-2 .bg-indigo {
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
  }
}
  </style>

  <script>
    const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
   
  // toggle the type attribute
  const type = password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);
  // toggle the eye icon
  this.classList.toggle('fa-eye');
  this.classList.toggle('fa-eye-slash');
});
  </script>