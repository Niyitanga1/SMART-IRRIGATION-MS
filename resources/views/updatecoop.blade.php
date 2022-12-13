

<!DOCTYPE html>
<html>
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

<center>
 <form action = "/edit/<?php echo $cooperatives[0]->id; ?>" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table width=60%>
<tr>
<td>COOPERATIVE NAME</td>
<td>
<input type = 'text' name = 'coop_name'   class="form-control"
value = '<?php echo$cooperatives[0]->coop_name; ?>'/> </td>
</tr>
<tr>
<td>DISTRICT</td>
<td>
<input type = 'text' name = 'coop_district'   class="form-control"
value = '<?php echo$cooperatives[0]->coop_district; ?>'/>
</td>
</tr>
<tr>
<td>SECTOR</td>
<td>
<input type = 'text' name = 'coop_sector'  class="form-control"
value = '<?php echo$cooperatives[0]->coop_sector; ?>'/>
</td>
</tr>
<tr>
<td>CELL</td>
<td>
<input type = 'text' name = 'coop_cell'  class="form-control"
value = '<?php echo$cooperatives[0]->coop_cell; ?>'/>
</td>
</tr>
<tr>
<td>VILLAGE</td>
<td>
<input type = 'text' name = 'coop_village'  class="form-control"
value = '<?php echo$cooperatives[0]->coop_village; ?>'/>
</td>
</tr>
<tr>
<td>PHONE NUMBER</td>
<td>
<input type = 'text' name = 'coop_tel'  class="form-control"
value = '<?php echo$cooperatives[0]->coop_tel; ?>'/>
</td>
</tr>
<tr>
<td>EMAIL</td></td>
<td>
<input type = 'text' name = 'coop_email'  class="form-control"
value = '<?php echo$cooperatives[0]->coop_email; ?>'/>
</td>
</tr>
<tr>
<td>TIN</td>
<td>
<input type = 'text' name = 'coop_tin'  class="form-control"
value = '<?php echo$cooperatives[0]->coop_tin; ?>'/>
</td>
</tr>
<tr>
<td >

</td>
<td><input type = 'submit' value = "Save Data" class="btn btn-primary btn-block"/></td>
</tr>

</form>
<tr>
<td >

</td>
<td> <form action="{{ url('view-records') }}" ><input type = 'submit' value = "Cancel  " class="btn btn-danger btn-block"/></td>
@csrf
</form>
</tr>
</table>

                  
                
</center>    


</body>

</html>