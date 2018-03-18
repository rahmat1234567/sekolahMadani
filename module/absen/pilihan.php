    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script> 
    
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><strong>Jadwal Absensi </strong></h3>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Pilih Jadwal Absensi
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
include 'databaseabsen.php';
$db = new database();
	$sql = mysql_query("SELECT * FROM `jadwal` WHERE `nip`='$_SESSION[id]' ");
    while($rs=mysql_fetch_array($sql))
	{

?>                              <tr class="odd gradeX">
									<td><?php echo $no++; ?></td>
									<?php 
										$qabsen = mysql_query("SELECT `id_abs` FROM `absensi` WHERE `id_jadwal`='$rs[id_jadwal]' ");
										$dabsen = mysql_fetch_array($qabsen);
									?>
                                    <td><a href="admin.php?module=input_absen&act=input&id_kelas=<?php echo $rs['id_kls']; ?>&id_jadwal=<?php echo $rs['id_jadwal']; ?>&jam=<?php echo $dabsen['jam']; ?>&tanggal=<?php echo $dabsen['tgl']; ?>">
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