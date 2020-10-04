<?php
include "dbinfo.php";
$cprinter = $_GET['id'];
$filter = htmlentities($cprinter);

$SQLQuery= $ubuntudbconn->query("SELECT * FROM tblprinters WHERE pcode='$filter'");
$ShowQuery = $SQLQuery->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php echo $ShowQuery['pname']; ?> | <?php echo $ShowQuery['pcode']; ?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">  

  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="assets/index3.html" class="navbar-brand">
        <span class="brand-text font-weight-light">Nama Webiste</span>
      </a>
      

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="./" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Menu 1</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">EPSON DRIVER AND APPLICATION</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="l-series.php" class="dropdown-item">L Series </a></li>
              <li><a href="m-series.php" class="dropdown-item">M Series </a></li>
            </ul>
          </li>
        </ul>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Social Media Link -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="https://www.facebook.com/indoxploit.io" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="https://instagram/arts.nightkidz" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="https://instagram/nacchancs" target="_blank">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="https://www.youtube.com/channel/UC61ireHRNRppmn1JUDNcDVQ" target="_blank">
            <i class="fab fa-youtube"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <?php echo $ShowQuery['pname']; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Index</a></li>
              <li class="breadcrumb-item"><a href="#">Ink Tank Printers</a></li>
              <li class="breadcrumb-item"><a href="#">L-Series</a></li>
              <li class="breadcrumb-item active"><?php echo $ShowQuery['pname']; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="img-fluid" width="220" height="120" src="<?php echo $ShowQuery['pimages']; ?>"
                       alt="<?php echo $ShowQuery['pname']; ?>">
                </div>

                <h3 class="profile-username text-center"><?php echo $ShowQuery['pcode']; ?></h3>

                <p class="text-muted text-center"><span class="btn btn-block btn-primary btn-sm"><?php echo $ShowQuery['pname']; ?></span></p>
                <form action="epson-details.php?id=<?php echo $filter; ?>" method="GET">
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <input type="hidden" name="id" value="<?php echo $filter; ?>">
                    <div class="form-group">
                        <label>Pilih Operating System</label>
                        <select class="form-control" name="os">
                          <option disabled selected>Pilih</option>
                          <?php
                            $OSCrot = $ubuntudbconn->query("SELECT * FROM tbl_os");
                            while ($CrotOS = mysqli_fetch_assoc($OSCrot)){
                          ?>
                          <option value="<?php echo $CrotOS['oscode']; ?>"><?php echo $CrotOS['osname']; ?></option>
                          <?php
                            }                            
                          ?>
                        </select>
                      </div>
                      <input type="hidden" name="tampilkan" value="Ya">
                    <div class="form-group">
                       <button class="btn btn-block btn-primary btn-sm">Lihat</button>
                    </div>
                  </li>
                </ul>                
               </form>

               <?php

               $TYa = $_GET["tampilkan"] == "Ya";
               $JenisOS = $_GET['os'];
               $IDCrot = $_GET['id'];
               $filterOS = htmlentities($JenisOS);
               $filterID = htmlentities($IDCrot);
               $QueryOS= $ubuntudbconn->query("SELECT * FROM tblprinters WHERE pcode='$filterID' AND OSType='$filterOS'");
               $OSRows = $QueryOS->fetch_assoc();

               if (htmlentities($TYa)) {  
               ?>
               <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Nama Produk</b> <a class="float-right"><?php echo $OSRows['pname']; ?></a>
                </li>    
                <li class="list-group-item">
                  <b>Kode Produk</b> <a class="float-right"><?php echo $OSRows['pcode']; ?></a>
                </li>    
                <li class="list-group-item">
                  <b>Operating System</b> <a class="float-right"><?php echo $OSRows['OSType']; ?></a>
                </li>  
                <li class="list-group-item">
                  <b>Bahasa</b> <a class="float-right"><?php echo $OSRows['language']; ?></a>
                </li>  
                <li class="list-group-item">
                  <b>Negara</b> <a class="float-right"><?php echo $OSRows['country_region']; ?></a>
                </li>   
                <li class="list-group-item">
                  <b>Versi</b> <a class="float-right"><?php echo $OSRows['pversion']; ?></a>
                </li>    
                <li class="list-group-item">
                  <b>Nama Berkas</b> <a class="float-right"><?php echo $OSRows['fname']; ?></a>
                </li> 
                <li class="list-group-item">
                  <b>Ukuran Berkas</b> <a class="float-right"><?php echo $OSRows['fsize']; ?></a>
                </li>              
               </ul>
               <a href="<?php echo $OSRows['downlink']; ?>" class="btn btn-primary btn-block"><b>Download</b></a>
               <?php
                  }
                  mysqli_close($ubuntudbconn);     
               ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <strong>Copyright Wesite &copy; <?php echo date("Y");?> by <a href="https://nightkidz.my.id">NightKidz.my.id</a>.</strong> All rights reserved.
    </div>
    <!-- Default to the left -->
    <strong>Copyright Template &copy; <?php echo date("Y");?> by <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
