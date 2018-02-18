<?php
session_start();
if(empty($_SESSION['nama'])){
    header('location:index.php');
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

    <link href="assets/css/custom-css.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">

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
                <a class="navbar-brand" href="admin.php?module=home">SEKOLAH SMART MADANI</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user">
<?php 
echo "User : $usre"; 
?> 

                   </i></a>
                </li>
       <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
<?php 
    echo "Login as - ";
    if($level==1){
        echo "Admin";
    }

    if($level==2){
        echo "Staff IT $nmsklh";
    }

    if($level==3){
        echo "Guru $nmsklh";
        if($nmkls!=""){
            echo ", Wali Kelas $nmkls";
        }
    }

    if($level==4){
        echo "Siswa $nmsklh";
    }
?> 
                   </a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
<?php echo "Tanggal : ".date("d-m-Y"); ?> 
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
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
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
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Data Staff IT<span class="fa arrow"></span></a>
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
                                    <a href="admin.php?module=pilih">Input Data</a>
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
                                    <a href="admin.php?module=input_nilai&act=input">Input Nilai</a>
                                </li>
                                <li>
                                    <a href="#">Laporan Nilai</a>
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
                            <a href="admin.php?module=guru_det"><i class="fa fa-dashboard fa-fw"></i> Data Guru</a>
                        </li>
<?php } ?>
<?php if($level==4){ ?>
                        <li>
                            <a href="admin.php?module=siswa_det"><i class="fa fa-dashboard fa-fw"></i> Data Siswa</a>
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
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="assets/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>

<?php } ?>