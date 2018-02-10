<?php
if($_GET['act']=="input"){
	?>


    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script> 
    
<div class="container">
        <h1>Input Nilai Siswa</h1> 
        <br/>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="?#home">Tugas Harian</a></li>
            <li><a data-toggle="tab" href="#menu1">Ulangan Harian</a></li>
            <li><a data-toggle="tab" href="#menu2">Ujian Tengas Semester</a></li>
            <li><a data-toggle="tab" href="#menu2">Ujian Akhir Semester</a></li>
        </ul>
        
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Data Staff IT</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Staff IT 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NO</th>
                                            <th class="text-center">FOTO</th>
                                            <th class="text-center" width="30%">Nama</th>
                                            <th class="text-center">JK</th>
                                            <th class="text-center">Telp</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Nama Sekolah</th>
                                            <th class="text-center">Status Akun</th>
                                            <?php if($level==1){ ?>
                                            <th class="text-center">Aksi</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php
$no=1;
include 'databasestaffit.php';
$db = new database();
    foreach($db->tampil_data() as $rs)
    {

//if($level==1 and $level==2){

    ?>                                        <tr class="odd gradeX">
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo"$rs[foto_staffit]";  ?></td>
                                                <td><?php echo"$rs[nama_staffit]";  ?></td>
    <?php
    if($rs['jk']=="L"){
    ?>
                                                <td class="text-center">Laki - Laki</td>
    <?php
    }else{
    ?>
                                                <td class="text-center">Perempuan</td>
    <?php
    }
    ?>
                                                <td><?php echo"$rs[telp_staffit]";  ?></td>
                                                <td><?php echo"$rs[alamat_staffit]";  ?></td>
                                                <?php $kode_sklh=$rs['id_sklh']; 
                                                    $sqlzz=mysql_query("select nama_sklh from sekolah where id_sklh='$kode_sklh'");
                                                    $countzz=mysql_num_rows($sqlzz);
                                                    $rszz=mysql_fetch_array($sqlzz);
                                                ?>
                                                <td><?php echo"$rszz[nama_sklh]";  ?></td>
    <?php
    if($rs['status_akun']!=0){
    ?>
                                                <td class="text-center">Aktif</td>
    <?php
    }else{
    ?>
                                                <td class="text-center">Tidak Aktif</td>
    <?php
    }
    ?>                                            
                                               <?php if($level==1){ ?> 
                                             <td class="text-center"> 
                                             <a href="./././admin.php?module=input_staffit&act=edit&id_staffit=<?php echo $rs['id_staffit'] ?>">
                                             <button type="button" class="btn btn-info">Edit</button> 
                                             
                                             <a href="././module/staffit/prosesstaffit.php?id_staffit=<?php echo $rs['id_staffit'] ?>&aksi=hapus">
                                             <button type="button" class="btn btn-danger">Hapus</button></a></td>
                                             <?php } ?>
                                            </tr>
    <?php
    
//}

}
?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<?php
include 'databasestaffit.php';
$db = new database();
?>

<h1>CRUD OOP UNTUK STAFF IT SMART MADANI</h1>
<h2>Create BY RAHMAT </h2>  

<a href="inputstaffit.php">Silahkan Input Data</a>
<table border="2">
    <tr>
        <th>No</th>
        <th>Nama Staff IT</th>
        <th>Gender</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>ID Sekolah</th>
        <th>Status Akun</th>
    </tr>
    <?php
    $no = 1;
    foreach($db->tampil_data() as $x){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['nama_staffit']; ?></td>
        <td><?php echo $x['jk']; ?></td>
        <td><?php echo $x['alamat_staffit']; ?></td>
        <td><?php echo $x['telp_staffit']; ?></td>
        <td><?php echo $x['id_sklh']; ?></td>
        <td><?php echo $x['status_akun']; ?></td>
        <td>
            <a href="editstaffit.php?id_staffit=<?php echo $x['id_staffit']; ?>&aksi=edit">Edit</a>
                <form action="editstaffit.php?id_staffit=<?php echo $x['id_staffit']; ?>&aksi=edit" method="GET">
                    <input type="hidden" name="id_staffit" value="<?php echo $x['id_staffit']; ?>">
                </form>
            <a href="prosesstaffit.php?id_staffit=<?php echo $x['id_staffit']; ?>&aksi=hapus">Hapus</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
            
            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>Menu 1</h3>
                <p>Tutorial pemrograman web, mobile dan design</p>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Membuat navigasi tabs dan pills bootstrap.</p>
            </div>
        </div>
    </div>
            <!-- /.row -->
            <?php } ?>
             