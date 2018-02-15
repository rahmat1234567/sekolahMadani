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