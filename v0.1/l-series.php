<?php
include "dbinfo.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Judul Website | NightKidz</title>

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
            <h1 class="m-0 text-dark"> EPSON <small> Ink Tank Printers</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Index</a></li>
              <li class="breadcrumb-item"><a href="#">Ink Tank Printers</a></li>
              <li class="breadcrumb-item active">L Series</li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">L Series</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <?php
                      $hal = 5;
                      $page = isset($_GET['id'])? (int)$_GET['id']:1;
                      $mulai = ($page>1) ? ($page * $hal) - $hal : 0;
                      $myquery = $ubuntudbconn->query("SELECT * FROM tbl_listprinter LIMIT $mulai, $hal");
                      $QueryTotal = $ubuntudbconn->query("SELECT * FROM tbl_listprinter");
                      $total = $QueryTotal->num_rows;
                      $pages = ceil($total/$hal);
                      for ($i=1; $i<=$pages ; $i++){
                    ?>
                    <li class="page-item"><a class="page-link" href="l-series.php?id=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php
                      }
                    ?>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama Printer</th>
                      <th>Jenis Printer</th>
                      <th>Gambar Produk</th>
                      <th style="width: 40px">Link</th>
                    </tr>
                  </thead>
                  <?php
                  while ($row = $myquery->fetch_assoc()) {
                  ?>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td><?php echo $row['namaprinter'];?></td>
                      <td><?php echo $row['jenisprinter'];?></td>
                      <td><img src="<?php echo $row['gambarprinter'];?>" width="120" height="60" /></td>
                      <td><a href="epson-details.php?id=<?php echo $row['jenisprinter'];?>" class="btn btn-block btn-primary btn-sm" target="_blank">Detail <?php echo $row['jenisprinter'];?></a></td>
                    </tr>
                  </tbody>
                  <?php
                     }
                   ?>  
                  <?php
                   mysqli_close($ubuntudbconn);
                   ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
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
