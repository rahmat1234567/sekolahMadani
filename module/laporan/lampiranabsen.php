    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script> 
    
        <div class="container">
        <div class="tab-content">
            <div id="tugas_harian" class="tab-pane fade in active">
            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Jadwal Absen Mata Pelajaran <?php echo $_GET['nama_matpel']; ?></strong></h3> 
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-11">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lampiran Absen
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th class="text-center">NO</th>
                                            <th class="text-center">NISN</th>
                                            <th class="text-center">Nama Siswa</th>
                                            <th class="text-center">TGL</th>
                                            <th class="text-center">Jam</th>
                                            <th class="text-center">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php
$no=1;
include 'databaselaporanabsen.php';
$db = new database();
    foreach($db->tampil_data() as $rs)
    {

    ?>                                      <tr class="odd gradeX">
												<td><?php echo $no++; ?></td>
                                                <td><?php echo $rs['nisn']; ?></td>
                                                <?php 
                                                    $qdsiswa = mysql_query("SELECT `nama_siswa` FROM `siswa` WHERE `nisn`='$rs[nisn]' ");
                                                    $dsiswa = mysql_fetch_array($qdsiswa);
                                                ?>
                                                <td><?php echo $dsiswa['nama_siswa']; ?></td>
                                                <td><?php echo $rs['tgl']; ?></td>
                                                <td><?php echo $rs['jam']; ?></td>
                                                <td><?php echo $rs['keterangan']; ?></td>
                                                
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
