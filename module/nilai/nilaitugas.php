    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script> 
    
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><strong>Jadwal Nilai Tugas Harian</strong></h3>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Pilih Jadwal Nilai Tugas Harian
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
include 'databasenilaitugas.php';
$db = new database();
    foreach($db->tampil_data() as $rs)
	{

?>                              <tr class="odd gradeX">
									<td><?php echo $no++; ?></td>

                                    <td><a href="admin.php?module=input_nilaitugas&act=input&id_kelas=<?php echo $rs['id_kls']; ?>&id_jadwal=<?php echo $rs['id_jadwal']; ?>">
                                        <?php
                                            $qmapel = mysql_query("SELECT `nama_matpel` FROM `matpel` WHERE `id_matpel`='$rs[id_matpel]' ");
                                            $dmapel = mysql_fetch_array($qmapel);
                                            echo $dmapel['nama_matpel'];
                                        ?>
                                    </a></td>
                                    <td><?php 
                                            $qkelas = mysql_query("SELECT `nama_kls` FROM `kelas` WHERE `id_kls`='$rs[id_kls]' ");
                                            $dkelas = mysql_fetch_array($qkelas);
                                            echo $dkelas['nama_kls']; 
                                        ?>
                                    </td>
                                </tr>
    <?php
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