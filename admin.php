<?php
session_start();
if($_SESSION['enc']==0){
    header('location:https://www.youtube.com/watch?v=PWmfNeLs7fA');
}

$timeout = 10;
$logout_dir = "logout.php";

$timeout = $timeout * 60;
if (isset($_SESSION['_start'])) {
    $elaps = time() - $_SESSION['_start'];
    if($elaps > $timeout){
        echo "
        <script>
            alert('Anda terlalu lama AFK, silakan login kembali');
            window.location = '$logout_dir';
        </script>";
    }
}

$_SESSION['_start'] = time();

if(empty($_SESSION['nama'])){
    header('location:logout.php');
}



else{
$uidi=$_SESSION['id'];  
$usre=$_SESSION['nama'];
$level=$_SESSION['status'];

$mail=$_SESSION['email'];
$tlpn=$_SESSION['telp'];
$jkjk=$_SESSION['jk'];
$nmsklh=$_SESSION['nama_sklh']; 
$nmkls=$_SESSION['nama_kls'];

include "config/conn.php";
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sekolah Smart Madani</title>

    <!-- Core CSS - Include with every page -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/jquery-gmaps-latlon-picker.css" rel="stylesheet">
    <link href="assets/css/custom-css.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery-gmaps-latlon-picker.css">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <center><a class="navbar-brand" href="admin.php?module=home">SEKOLAH SMART MADANI</a></center>
            </div>
            <!-- /.navbar-header -->
<center>
            <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
<?php
    $nama_hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
    $hari      = date("w");
    $hari_ini  = $nama_hari[$hari];
    echo $hari_ini.", ".date("d-m-Y");
?> 
                   </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="" href="logout.php">
                    <i class="fa fa-sign-out">
<?php echo "Logout"; ?> 
                   </i></a>
                </li>  
                <!-- /.dropdown -->
            </ul>              
</center>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="nav nav-second-level" style="padding-top: 10px; padding-bottom: 10px; background-color: rgba(0,0,0,.04)"><center>
                            <a style="font-family: helvetica; text-decoration: none; padding-right: 15px;" href="#">
<?php 
    date_default_timezone_set('Asia/Jakarta');
    $hour = date("H");
    $now  = "";
    if(($hour>=19 && $hour<=24) || ($hour<4 && $hour>=0)){
        $now = "Malam";
    }
    else if($hour>=4 && $hour<11){
        $now = "Pagi";
    }
    else if($hour>=11 && $hour<15){
        $now = "Siang";
    }
    else if($hour>=15 && $hour<19){
        $now = "Sore";
    }
    echo "Selamat ".$now."<br>";
    if($level==1){
        echo "Admin";
    }

    if($level==2){
        echo "Staff IT $nmsklh";
    }

    if($level==3){
        echo "Guru $nmsklh";
        if($nmkls!=""){
            echo ",<br>Wali Kelas $nmkls";
        }
    }

    if($level==4){
        echo "Siswa $nmsklh";
    }
?>
<br> 
<i class="fa fa-user" style="font-size:130%; padding-left: 25px; padding-right: 15px;">
<?php 
echo "<span style='font-family: helvetica;'>$usre</span>"; 
?> </i>
                   </a></center>
                </li>
<?php if($level==1 or $level==2){ ?>

                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Data Siswa<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <?php if($level==2){ ?>
                                <li>
                                    <a href="admin.php?module=input_siswa&act=input">Input Data</a>
                                </li>
                                <?php } 

                                if($level==2){
                                            $nm_sklh=$nmsklh; 
                                            $dsql=mysql_query("select id_sklh from sekolah where nama_sklh='$nm_sklh'");
                                            $dcount=mysql_num_rows($dsql);
                                            $drs=mysql_fetch_array($dsql);
                                            $crypt=md5($drs['id_sklh']);
                                ?>

                                <li>
                                    <a href="admin.php?module=siswa&kls=<?php echo $drs['id_sklh']; ?>">View Data</a>
                                </li>
                                <?php } else { ?>

                                <li>
                                    <a href="admin.php?module=siswa&kls=semua">View Data</a>
                                </li>
                                <?php } ?>


                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Data Guru<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <?php if($level==2){ ?>
                                <li>
                                    <a href="admin.php?module=input_guru&act=input">Input Data</a>
                                </li>
                                <?php } ?>
                                <li>
                                    <a href="admin.php?module=guru&kls=semua">View Data</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
<?php } ?>

<?php if($level==2 or $level==3){ ?>

                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Data Kelas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <?php if($level!=3) { ?>
                                <li>
                                    <a href="admin.php?module=input_kelas&act=input">Input Data</a>
                                </li>
                                <?php } ?>
                                <li>
                                    <a href="admin.php?module=kelas">View Data</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
<?php } ?>

<?php if($level==1){ ?>

                          <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Data Sekolah<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin.php?module=input_sekolah&act=input">Input Data</a>
                                </li>
                                <li>
                                    <a href="admin.php?module=sekolah">View Data</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

<?php } ?>


<?php if($level==1){ ?>

                          <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Data Pegawai<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin.php?module=input_staffit&act=input">Input Data</a>
                                </li>
                                <li>
                                    <a href="admin.php?module=staffit">View Data</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

<?php } ?>


<?php if($level==2){ ?>

                          <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Data Mata Pelajaran<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin.php?module=input_matpel&act=input">Input Data</a>
                                </li>
                                <li>
                                    <a href="admin.php?module=matpel">View Data</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

<?php } ?>

<?php if($level==3){ ?>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Data Absensi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin.php?module=pilihan">Input Data</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
<?php } ?>

<?php if($level==3){ ?>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Nilai Siswa<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin.php?module=nilai">Input Nilai Ulangan</a>
                                </li>
                                <li>
                                    <a href="admin.php?module=nilaitugas">Input Nilai Tugas</a>
                                </li>
                                <li>
                                    <a href="admin.php?module=tampil_ulangan">View Nilai Ulangan</a>
                                </li>
                                <li>
                                    <a href="admin.php?module=tampil_tugas">View Nilai Tugas</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
<?php } ?>


<?php if($level==3){ ?>
                        <li>
                            <a href="admin.php?module=pilih_laporan"><i class="fa fa-bar-chart-o fa-fw"></i> Laporan</a>
                        </li>
<?php } ?>
<?php if($level==3){ ?>
                        <li>
                            <a href="admin.php?module=detail_guru&act=details&nip=<?php echo $uidi; ?>"><i class="fa fa-dashboard fa-fw"></i> Data Guru</a>
                        </li>
<?php } ?>
<?php if($level==4){ ?>
                        <li>
                            <a href="admin.php?module=detail_siswa&act=details&nisn=<?php echo $uidi; ?>"><i class="fa fa-dashboard fa-fw"></i> Data Siswa</a>
                        </li>
<?php } ?>

<?php if($level==4){ ?>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Aktifitas Siswa</a>
                        </li>
<?php } ?>
<?php if($level==4){ ?>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Data Nilai</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin.php?module=tugassiswa">View Tugas</a>
                                </li>
                                <li>
                                    <a href="admin.php?module=ulanganharian">View Ulangan Harian</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
<?php } ?>
      
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
<?php include "content.php";  ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/jquery-gmaps-latlon-picker.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="assets/js/sb-admin.js"></script>

        <script type="text/javascript" src="assets/js/jquery-gmaps-latlon-picker.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>

<?php } ?>