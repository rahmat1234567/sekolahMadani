<?php
if($_GET['act']=="input"){
?>
	
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script> 
    
        
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><strong>Input Nilai Tugas Harian Siswa</strong></h3>
			<form method="post" role="form" action="././module/nilai/prosestugas.php?aksi=tambah">
			<div class="col-md-12">
				<button type="submit" class="btn btn-sm btn-info pull-right" style="background: green; margin-right: -15px; margin-bottom: 1rem;">Simpan</button>
			</div>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
            <div class="row">
                <div class="col-lg-12 panel-wrap" id="panel-wrap">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mengisi Nilai Tugas <span class="judul_tugas"></span>
                        </div>
						<div class="col-md-5">
							<input type="text" class="form-control pull-left nama_tugas" id="nama_tugas" style="margin-bottom: 15px; margin-top: 15px;" placeholder="Nama Tugas" name="nama_tugas"/>
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="table_intugas">
                                    <thead>
                                        <tr>
											<th class="text-center" style="width: 10px;">NO</th>
                                            <th class="text-center" >Nama</th>										
                                            <th class="text-center" >Nilai Tugas</th>
											<th class="text-center" >Keterangan</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php
$no=1;
$sql=mysql_query("SELECT * FROM `siswa` WHERE `id_kls`='$_GET[id_kelas]' ");

    $noxxx = 1;
	while($rs=mysql_fetch_array($sql))
	{
?>	
											<tr class="odd gradeX">
												<td><?php echo $no++; ?></td>
                                                <td><?php echo"$rs[nama_siswa]";  ?></td>
												<td><input type="text" class="form-control" name="nilai_tugas" type="text" placeholder="Nilai 0 - 100" pattern="[0-9]{0,3}" required/></td>
												<td><textarea class="form-control" placeholder="Keterangan" name="ket" rows="2" style="resize: vertical;"></textarea></td>
                                            </tr>
<?php
$noxxx++;
}
?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
						</form>
                        <!-- /.panel-body -->
                    </div>
					
					
                    <!-- /.panel -->
                </div>
				<button class="btn btn-sm btn-info pull-left add" name="add" style="margin-left: 15px;"><i class="fa fa-plus"></i></button>
                <!-- /.col-lg-11 -->
            </div>
            <!-- /.row -->
<?php } ?>

<script language="javascript" type="text/javascript">
	$(document).ready(function() {
		$(document).on('click', '.add', function() {
			var html = '';
			html += '<div class="panel panel-default">';
				html += '<div class="panel-heading">Mengisi Nilai Tugas <button class="btn btn-sm btn-danger pull-right remove" name="remove" style="margin-top: -0.5rem;"><i class="fa fa-minus"></i></button></div>';
				
				html += '<div class="col-md-5">'
					html += '<input type="text" class="form-control pull-left" style="margin-bottom: 15px; margin-top: 15px;" placeholder="Nama Tugas" name="nama_tugas"/>';
				html += '</div>';
				
				html += '<div class="panel-body">';
					html += '<div class="table-responsive">';
						html += '<table class="table table-striped table-bordered table-hover" id="table_intugas">';
							html += '<thead>';
								html += '<tr>';
									html += '<th class="text-center" style="width: 10px;">NO</th>';
										html += '<th class="text-center" >Nama</th>';										
										html += '<th class="text-center" >Nilai Tugas</th>';
										html += '<th class="text-center" >Keterangan</th>';
									html += '</tr>';
							html += '</thead>';
							
							html += '<tbody>';
								<?php
								$no=1;
								$p = $_GET['id_jadwal'];
								$sql=mysql_query("select * from n_tugas where id_jadwal=$p");

									$noxxx = 1;
									while($rs=mysql_fetch_array($sql))
									{
										$qSiswa = mysql_query("SELECT `nama_siswa` FROM `siswa` WHERE `nisn`='$rs[nisn]' ");
										$dSiswa = mysql_fetch_array($qSiswa);
								?>
									html += '<tr class="odd gradeX">';
										html += '<td><?php echo $no++; ?></td>';
										html += '<td><?php echo"$dSiswa[nama_siswa]";  ?></td>';
										html += '<td><input type="text" class="form-control" type="text" placeholder="Nilai 0 - 100" pattern="[0-9]{0,3}" required/></td>';
										html += '<td><textarea class="form-control" placeholder="Keterangan" name="ket" rows="2" style="resize: vertical;"></textarea></td>';
									html += '</tr>';
								<?php $noxxx++;} ?>
							html += '</tbody>';
							
						html += '</table>';
					html += '</div>';
				html += '</div>';
				
			html += '</div>';
			$('#panel-wrap').append(html);
		});
		
		$(document).on('click', '.remove', function() {
			$(this).closest('.panel-default').remove();
		});
		
		$(document).on('keyup', '.nama_tugas', function() {
			document.getElementsByClassName('judul_tugas')[0].innerHTML = document.getElementById('nama_tugas').value;
		});
	});
</script>