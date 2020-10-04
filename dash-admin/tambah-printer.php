<?php
include '../dbinfo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | NightKidz</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-gray-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./" class="brand-link">
      <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">NightKidz</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Azwar Anas</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Basic Menu Admin</li>
          <li class="nav-item">
            <a href="./" class="nav-link">
              <i class="fas fa-desktop nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-header">Basic Menu Data</li>
          <li class="nav-item">
            <a href="./printers.php" class="nav-link active">
              <i class="nav-icon fas fa-print"></i>
              <p>Printers</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Printer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item"><a href="./printers.php">Printers</a></li>
              <li class="breadcrumb-item active">Tambah Printer</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Main row -->
        <div class="row">      
          <div class="col-md-12">
          <?php
            $GoTambah = htmlentities($_REQUEST["TambahData"] == "Iya");
            $dataNama = htmlentities($_POST["namaprinter"]);
            $dataJenis = htmlentities($_POST["jenisprinter"]);
            $dataSeri = htmlentities($_POST["seriprinter"]);
            $dataVendor = htmlentities($_POST["vendorprinter"]);
            $dataWebsite = htmlentities($_POST["vendorwebsite"]);
            $dataGambar = htmlentities($_POST["gambarprinter"]);
            if ($GoTambah) {
              if ($dataNama == "" || $dataJenis == "" || $dataSeri == "" || $dataVendor == "" || $dataWebsite == "" || $dataGambar == "") {
          ?>
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-biohazard"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Tidak Boleh Kosong</span>
                <!--span class="info-box-number">Kode Eror 100 Nama Printer Kosong</span-->
              </div>
            </div>
          <?php
             }else{
            $PeriksaQ= $ubuntudbconn->query("SELECT jenisprinter FROM tbl_listprinter WHERE jenisprinter='$dataJenis'");
            $HasilQ = $PeriksaQ->fetch_assoc();

            if ($HasilQ['jenisprinter'] == $dataJenis) {
            ?>
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fas fa-heart-broken"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Data sudah ada</span>
                <span class="info-box-number"><?php echo 'Total execution time in seconds: ' . (microtime(true) - $time_start);?></span>
              </div>
            </div>
            <?php
            }else{
            $Query1 = ("INSERT INTO `tbl_listprinter` (`namaprinter`, `jenisprinter`, `seriprinter`, `vendorprinter`, `vendorwebsite`, `gambarprinter`)");
            $Query2 = ("VALUES ('$dataNama','$dataJenis','$dataSeri','$dataVendor','$dataWebsite','$dataGambar')");
            $QueryJoin = $Query1." ".$Query2;
            $time_start = microtime(true);  
            if ($ubuntudbconn->query($QueryJoin) === TRUE) {         
          ?>
          <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="fas fa-kiss-wink-heart"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Rekaman baru berhasil dibuat</span>
                <span class="info-box-number"><?php echo 'Total execution time in seconds: ' . (microtime(true) - $time_start);?></span>
              </div>
          </div>
          <?php
             }else{
          ?>
          <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-biohazard"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Ada yang salah</span>
                <span class="info-box-number"><?php echo "Error: " . $QueryJoin . "<br>" . $ubuntudbconn->error;?></span>
              </div>
          </div>
          <?php
             } //end insert
             } //end select
             } //end periksa
             } //end request
          ?>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

         <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Printer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="tambah-printer.php?TambahData=Iya" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="GlobalInputNightKidz">Nama Printer</label>
                    <input type="text" class="form-control" id="GlobalInputNightKidz" name="namaprinter" placeholder="Silahkan Masukan Nama Printer ex: Epson L100 Inkjet Printer">
                  </div>  
                  <div class="form-group">
                    <label for="GlobalInputNightKidz">Jenis Printer</label>
                    <input type="text" class="form-control" id="GlobalInputNightKidz" name="jenisprinter" placeholder="Silahkan Masukan Jenis Printer ex: L100">
                  </div>  
                  <div class="form-group">
                    <label for="GlobalInputNightKidz">Seri Printer</label>
                    <input type="text" class="form-control" id="GlobalInputNightKidz" name="seriprinter" placeholder="Silahkan Masukan Seri Printer ex: L-Series">
                  </div> 
                  <div class="form-group">
                    <label for="GlobalInputNightKidz">Nama Vendor</label>
                    <input type="text" class="form-control" id="GlobalInputNightKidz" name="vendorprinter" placeholder="Silahkan Masukan Seri Printer ex: Epson">
                  </div> 
                  <div class="form-group">
                    <label for="GlobalInputNightKidz">Vendor Homepage</label>
                    <input type="text" class="form-control" id="GlobalInputNightKidz" name="vendorwebsite" placeholder="Silahkan Masukan Seri Printer ex: http://epson.com/">
                  </div> 
                  <div class="form-group">
                    <label>Gambar Printer</label>
                    <textarea class="form-control" rows="3" placeholder="ex: https://mediaserver.goepson.com/ImConvServlet/imconv/92405c7c649e68cdc4634f85aa04fdfa61a5e673/515Wx515H?use=productpictures&assetDescr=L100-10007_02_Brochure" name="gambarprinter"></textarea>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>

      </div>
      <!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date("Y");?> <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <strong>Copyright &copy; <?php echo date("Y");?> <a href="http://nightkidz.my.id">NightKidz.my.id</a>.</strong>
    All rights reserved.
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../assets/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../assets/plugins/raphael/raphael.min.js"></script>
<script src="../assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../assets/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="../assets/dist/js/pages/dashboard2.js"></script>
</body>
</html>
<?php
mysqli_close($ubuntudbconn);  
?>
