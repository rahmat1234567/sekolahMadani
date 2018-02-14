<?php
session_start();
if(!isset($_SESSION['nama'])){
	echo "<script>alert('Silahkan login terlebih dahulu')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
} else {

?>
<!DOCTYPE html> 
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-light" id="page-top">

 <!-- awal Navigasi-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Perpustakaan Madani</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<!-- side navbar reponsif-->
<!-- awal side Navbar responsif-->
    <div class="collapse navbar-collapse" id="navbarResponsive">

<!--awal side navbar-->
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <!-- Home -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="HOME">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">HOME</span>
          </a>
        </li>
      <!-- Buku -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="BUKU">
          <a class="nav-link" href="?page=buku">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Buku</span>
          </a>
        </li>
      <!-- Anggota -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="ANGGOTA">
          <a class="nav-link" href="?page=anggota">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Anggota</span>
          </a>
        </li>
        <!-- transaksi -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="TRANSAKSI">
          <a class="nav-link" href="?page=transaksi">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Transaksi</span>
          </a>
        </li>
        <!-- laporan -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="LAPORAN">
          <a class="nav-link" href="?page=laporan">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Laporan</span>
          </a>
        </li>
        <!-- user -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="USER">
          <a class="nav-link" href="?page=user">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">User</span>
          </a>
        </li>
      </ul>
      <!-- akhir navbar side -->
<!-- panah kekiri yang bila di tekan akan menyempit ke kiri -->
              <!-- awal navbar side -->
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <!-- akhir navbar side -->

      <ul class="navbar-nav ml-auto">

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user"></i>
            <span><?=$_SESSION['nama'];?></span></a></li>

 <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user"></i>
            <span><?php
		 	$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
 			$hr = $array_hr[date('N')];
			$tgl= date('j');
			$array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
			$bln = $array_bln[date('n')];
			$thn = date('Y');
			echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";
			?></span></a></li>

  
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="../logout.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-book"></i>
              </div>
              <div class="mr-5">BOOK!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="?page=buku">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Anggota!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="?page=anggota">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
        </div>
              </span>
            </a>
          </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">transaksi</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="?page=transaksi">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">Laporan</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="?page=laporan">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
      </div>

 <?php
         error_reporting(0);
         switch($_GET['page'])
          {
            default:
            include "../home.php";
            break;
            
            // menu buku        
            case "buku";
            include "buku_data.php";
            break;
            case "detil-buku";
            include "buku_detil.php";
            break;
            case "buku_input";
            include "buku_input.php";
            break;
            case "buku_proses";
            include "buku_proses.php";
            break;
            case "buku_search";
            include "buku_search.php";
            break;
            case "buku_edit";
            include "buku_edit.php";
            break;
            case "buku_proses_edit";
            include "buku_proses_edit.php";
            break;
            case "buku_hapus";
            include "buku_hapus.php";
            break;
                        
            // anggota
            case "anggota";
            include "anggota_data.php";
            break;
            case "anggota_detil";
            include "anggota_detil.php";
            break;
            case "anggota_input";
            include "anggota_input.php";
            break;
            case "anggota_proses";
            include "anggota_proses.php";
            break;
            case "anggota_search";
            include "anggota_search.php";
            break;
            case "anggota_edit";
            include "anggota_edit.php";
            break;
            case "anggota_proses_edit";
            include "anggota_proses_edit.php";
            break;
            case "anggota_hapus";
            include "anggota_hapus.php";
            break;
            
            
            // transaksi
            case "transaksi";
            include "../transaksi_data.php";
            break;
            case "transaksi_input";
            include "../transaksi_input.php";
            break;
            case "transaksi_proses";
            include "../transaksi_proses.php";
            break;
            case "transaksi_search";
            include "../transaksi_search.php";
            break;
            case "transaksi_proses_kembali";
            include "../transaksi_proses_kembali.php";
            break;
            case "transaksi_proses_perpanjang";
            include "../transaksi_proses_perpanjang.php";
            break;
            
            
            // laporan
            case "laporan";
            include "../laporan.php";
            break;
            
            // User
            case "user";
            include "user_data.php";
            break;
            case "user_search";
            include "user_search.php";
            break;
            case "user_input";
            include "user_input.php";
            break;
            case "user_proses";
            include "user_proses.php";
            break;
            case "user_detil";
            include "user_detil.php";
            break;
            case "user_edit";
            include "user_edit.php";
            break;
            case "user_proses_edit";
            include "user_proses_edit.php";
            break;
            case "user_hapus";
            include "user_hapus.php";
            break;
          
          }
      ?>

       <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
      </div>
<!-- menu main sebagai div Utama -->


    
    

	    
    	    
  	<!--
    <div id="footer"><center>Iqbal Rizqi Purnama &copy; 2015</center></div>
    -->


</body>
</html>

<?php } ?>