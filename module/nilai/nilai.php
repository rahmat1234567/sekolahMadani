    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script> 
    
        <div class="container">
        <div class="tab-content">
            <div id="tugas_harian" class="tab-pane fade in active">
            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Jadwal Nilai Ulangan</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-11">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pilih Jadwal Nilai Ulangan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th class="text-center">NO</th>
                                            <th class="text-center">Nama Mata Pelajaran</th>
                                            <th class="text-center">Kelas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php
$no=1;
include 'databasenilaiulangan.php';
$db = new database();
    foreach($db->tampil_data() as $rs)
	{

//if($level==1 and $level==2){

    ?>                                      <tr class="odd gradeX">
												<td><?php echo $no++; ?></td>
                                                <?php  
                                                    $asql=mysql_query("select nama_matpel from n_ulanganharian,jadwal,matpel where n_ulanganharian.id_nuh='$rs[id_nuh]' and n_ulanganharian.id_jadwal=jadwal.id_jadwal and jadwal.id_matpel=matpel.id_matpel");
                                                    $acount=mysql_num_rows($asql);
                                                    $ars=mysql_fetch_array($asql);                                                  
                                                ?>
                                                <td><a href="admin.php?module=input_nilai&act=input&id_jadwal=<?php echo $rs['id_jadwal']; ?>">
                                                    <?php
                                                        echo $ars['nama_matpel'];
                                                    ?>
                                                </a></td>
                                                <td><?php echo"$rs[id_kls]"; ?></td>
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
