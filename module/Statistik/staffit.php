<head>
        <title>Belajarphp.net - ChartJS</title>
        <script src="js/Chart.bundle.js"></script>
        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
    </head>
            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Pegawai Sekolah</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Pegawai Sekolah
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>											
											<th class="text-center">FOTO</th>
											<th class="text-center">ID</th>
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
												<td><?php echo"$rs[foto_pgw]";  ?></td>
												<td><?php echo"$rs[nik]"; ?></td>
                                                <td><?php echo"$rs[nama_pgw]";  ?></td>
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
												<td><?php echo"$rs[telp_pgw]";  ?></td>
                                                <td><?php echo"$rs[alamat_pgw]";  ?></td>
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
    										 <a href="./././admin.php?module=input_staffit&act=edit&nik=<?php echo $rs['nik'] ?>">
    										 <button type="button" class="btn btn-info">Edit</button> 
    										 
    										 <a href="././module/staffit/prosesstaffit.php?nik=<?php echo $rs['nik'] ?>&aksi=hapus">
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
