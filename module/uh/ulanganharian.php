            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Nilai Ulangan Harian</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Nilai Ulangan Harian
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th class="text-center" width="6%">NO</th>
											<th class="text-center">Nama Mata Pelajaran</th>
											<th class="text-center">Nilai</th>
											<th class="text-center">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php
$no=1;
include 'databaseuh.php';
$db = new database();
	$sql=mysql_query("select * from n_ulanganharian");

	
    foreach($db->tampil_data() as $rs)
	{

//if($level==1 and $level==2){

    ?>                                        <tr class="odd gradeX">
												<td><?php echo $no++; ?></td>
												<td><?php echo"$rs[id_jadwal]";  ?></td>
												<td><?php echo"$rs[nilai_uh]";  ?></td>
												<td><?php echo"$rs[ket_uh]";  ?></td>
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
