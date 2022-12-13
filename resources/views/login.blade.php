<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8" />

  <title>Smart Irrigation Management System</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/bootstrap-login-form.min.css" />
</head>
   
<body>
  <!-- Start your project here-->

  <style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }
    .h-custom {
      height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
  </style>


  <section class="vh-100">

    
    <div class="container-fluid h-custom">
      
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/smartirrigation.png" class="img-fluid"
            alt="Sample image">
            <h2><i>Management System</i></h2>
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          
<form action="dashboard">

  <h2>Enter the Credentials  to Login</h2>
  <p class="text-center fw-bold mx-3 mb-0">Email:</p>
  <input type="email"  class="form-control form-control-lg"
  placeholder="Enter a valid email address"  ><br>
  <p class="text-center fw-bold mx-3 mb-0">Password:</p>
  <input type="password" id="form3Example3" class="form-control form-control-lg"
  placeholder="Enter a valid password" ><br>
  <input type="submit"  value="login" name="login"  class="btn btn-primary btn-lg"
  style="padding-left: 2.5rem; padding-right: 2.5rem;">




</form>
    





          </form>
        </div>
      </div>
    </div>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
     
      <div class="text-white mb-3 mb-md-0">
        Copyright © 2022. All rights reserved.
      </div>
     
      <div>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
       
      </div>
      
    </div>
  </section>


  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script type="text/javascript"></script>
</body>

</html>