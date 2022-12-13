

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title> Admin Dashboard </title>

  <meta name="language" content="en-EN" />
  <meta name="author" content="Irfan Maulana" />
 
  <meta name="description" content="Admin Dashboard" />
  <meta property="og:title" content="Admin Dashboard" />
  <meta property="og:description" content="Admin Dashboard" />
  
  <meta property="og:site_name" content=" Admin Dashboard" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary_large_image" />


  <meta name="twitter:title" content="Admin Dashboard" />
  <meta name="twitter:description" content="Admin Dashboard" />
  <meta name="twitter:domain" content="https://mazipan.github.io/bootstrap4-admin-dashboard-template/" />
  <link rel="home" href="https://mazipan.github.io/bootstrap4-admin-dashboard-template/">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Custom fonts for this template -->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
  
      <!-- Custom styles for this template -->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
      <!-- Custom styles for this page -->
      <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/main.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-25065548-2"></script>
  <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-25065548-2');</script>

  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5442972248172818",
    enable_page_level_ads: true
  });
  </script>
  
</head>

<body>

  <header class="navbar navbar-expand sticky-top bg-primary navbar-dark flex-column flex-md-row bd-navbar">
    <a class="navbar-brand mr-0 mr-md-2" href="#">
     Admin Dashboard
    </a>

    <div class="navbar-nav-scroll">
      <ul class="navbar-nav bd-navbar-nav flex-row">
        <li class="nav-item px-2">
          <a class="nav-link active" href="#">     </a>
        </li>
        <li class="nav-item px-2">
          
        </li>
      </ul>
    </div>

    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">

   
      <li class="nav-item">
        <a class="nav-link p-3">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-success badge-notif"></span>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
                User Name
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
    
          <a class="dropdown-item" href="#">
            <i class="fa fa-user-o pr-2"></i> Profile
          </a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-cog pr-2"></i> Settings
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/">
            <i class="fa fa-power-off pr-2"></i> Logout
          </a>
        </div>
      </li>

    </ul>

  </header>

  <div class="container-fluid">
    <div class="row">
      <aside class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">

          <h6 class="sidebar-heading">
            <span>Menu</span>
          </h6>

          <ul class="nav flex-column">
           
           
            <li class="nav-item">
              <a class="nav-link" href="/view-records">
                <i class="fa fa-arrow-circle-right"></i>Cooperatives
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/view-devices">
                <i class="fa fa-arrow-circle-right"></i> Devices
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/managers">
                <i class="fa fa-arrow-circle-right"></i>Coop  Managers
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-arrow-circle-right"></i> Agronomists
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-arrow-circle-right"></i> Analytics
              </a>
            </li>
          </ul>

         

        

        </div>
      </aside>
      <main class="col-md-10 ml-sm-auto col-lg-10 pt-3 px-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2"><i class="fa fa-tachometer"></i> Admin</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
           
           
          </div>
        </div>

        <button type="button" class="btn btn-secondary px-4 py-3" data-toggle="modal" data-target="#exampleModalCenter">
          <i class="fa fa-plus"></i> Add Manager
        </button>

        <div class="row">
<center>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Of Managers</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

            <thead>
            <tr>
            <td><b>Id</td>
            <td> <b>Manager ID</td>
            <td> <b>Fname</td>
            <td><b> Lname</td>
            <td><b>Cooperative </td>
            <td><b>District</td>
            <td><b>Sector</td>
            <td><b>Cell</td>
            <td><b>Village</td>
            <td> <b>Tel</td>
            <td><b>Email</td>
            <td> <b>Password</td>
            <td><b>Cooperative Id</td>
            
            <td colspan="2"><center><b>Actions</center></td>
            </b> </tr>

          </thead>
           
              
          <tr>
              @foreach ( $data as $manager)
            <td>{{$manager->id }}</td>
            <td>{{ $manager->man_id}}</td>
            <td>{{ $manager->man_fname}}</td>
            <td>{{  $manager->man_lname}}</td>
            <td>{{$manager->man_cooperative}}</td>
            <td>{{$manager->man_district}}</td>
            <td>{{ $manager->man_sector}}</td>
            <td>{$manager->man_cell}}</td>
            <td>{{$manager->man_village}}</td>
            <td>{{ $manager->man_tel}}</td>
            <td>{{ $manager->man_email}}</td>
            <td>{{ $manager->man_password}}</td>
            <td>{{ $manager->cooperatives_id}}</td>

            <td><a href = 'editmanager/{{ $manager->id}}' style="color: white"> <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i>update</button> </a></td>
            <td>   
            <a href = 'delete/{{ $manager->id }}'><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button> </a></td>
              
              </td>
            </tr>
            @endforeach
            </table>
          </div>
        </div>



        </center>

          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content rounded-0">
                <div class="modal-body py-0">
      
                  
                  <div class="d-flex main-content">
                 
                    </div>


                    <div class="content-text p-4">
                      <h3>Enter  Manager Details</h3>
                 
                      <form action="{{ url('addmanagers') }}" method="POST">
                        @csrf

                        <div class="form-group">
                          <label for="man_id"> Manager ID </label>
                          <input type="text" class="form-control" id="man_id"  name="man_id">
                        </div>
                        <div class="form-group">
                          <label for="man_fname"> Fname </label>
                          <input type="text" class="form-control" id="man_fname"  name="man_fname">
                        </div>

                        <div class="form-group">
                          <label for="man_lname"> Lname</label>
                          <input type="text" class="form-control" id="man_lname"  name="man_lname">
                        </div>
                        <div class="form-group">
                          <label for="man_cooperative"> Cooperative </label>
                          <input type="text" class="form-control" id="man_cooperative"  name="man_cooperative">
                        </div>  <div class="form-group">
                          <label for="man_district"> District</label>
                          <input type="text" class="form-control" id="man_district"  name="man_district">
                        </div>  <div class="form-group">
                          <label for="man_sector"> Sector</label>
                          <input type="text" class="form-control" id="man_sector"  name="man_sector">
                        </div>  <div class="form-group">
                          <label for="man_cell"> Cell</label>
                          <input type="text" class="form-control" id="man_cell"  name="man_cell">
                        </div>  <div class="form-group">
                          <label for="dev_village"> Village</label>
                          <input type="text" class="form-control" id="dev_village"  name="dev_village">
                        </div>
                        </div>  <div class="form-group">
                          <label for="man_tel"> Tel </label>
                          <input type="text" class="form-control" id="man_tel"  name="man_tel">
                        </div>
                      
                        <div class="form-group">
                          <label for="man_email"> Email </label>
                          <input type="text" class="form-control" id="man_email"  name="man_email">
                        </div>
                        <div class="form-group">
                          <label for="man_password"> Password </label>
                          <input type="text" class="form-control" id="man_password"  name="man_password">
                        </div>
                        <div class="form-group">
                          <label for="cooperatives_id"> Cooperative Id </label>
                          <input type="text" class="form-control" id="cooperatives_id"  name="cooperatives_id">
                        </div>
                        <div class="form-group">
                          <input type="submit" value="SAVE" class="btn btn-primary btn-block">
                        </div>
      
                      </form>
                    </div>
                  </div>
      
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
  </div>
</div>
          
        </div>

 
   <!-- Update  pop up   -->



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
  <script src="js/main.js"></script>
  <script src="js/chart.js"></script>

  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5442972248172818" data-ad-slot="1487770485" data-ad-format="auto"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  
  <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
     
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2022. All rights reserved.
    </div>
   
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fa fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fa fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fa fa-linkedin-in"></i>
      </a>
    </div>
    
  </div>
</section>


<script type="text/javascript" src="js/mdb.min.js"></script>

<script type="text/javascript"></script>
</body>

</html>