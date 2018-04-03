<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Absensi Kehadiran Siswa</title>

		<!-- Core CSS - Include with every page -->
	    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	    <link href="assets/css/jquery-gmaps-latlon-picker.css" rel="stylesheet">
	    <link href="assets/css/custom-css.css" rel="stylesheet">
	    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

	    <!-- Page-Level Plugin CSS - Tables -->
	    <link href="assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

	    <!-- SB Admin CSS - Include with every page -->
	    <link href="assets/css/sb-admin.css" rel="stylesheet">

	    <style type="text/css">
	    	.radio {
	    		margin-right: 3rem;
	    	}
	    </style>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12" style="margin-top: 3rem;">
				<div class="table-responsive">
					<form action="module/absen/input_absen.php" method="post">
						<table class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<th>No</th>
								<th>Nama</th>
								<th>Keterangan</th>
							</thead>
							<tbody>
								<?php 
									include "config/conn.php";
									$no = 1;
									$id_kls = $_GET['id_kelas'];
									$qKelas = mysql_query("SELECT * FROM `siswa` WHERE `id_kls`='$id_kls' ");
									while($dKelas = mysql_fetch_array($qKelas)) {
								?>
								<tr class="odd gradeX">
									<td style="width: 5px;"><?php echo $no; ?></td>
									<td><?php echo $dKelas['nisn']; ?> <input type="hidden" name="nisn[]" value="<?php echo $dKelas['nisn']; ?>"></td>
									<td>
										<div class="radio">
											<label><input type="radio" name="optradio_<?php echo $no; ?>" value="absen"> Absen</label>
										</div>
										<div class="radio">
											<label><input type="radio" name="optradio_<?php echo $no; ?>" value="hadir"> Hadir</label>
										</div>
										<div class="radio">
											<label><input type="radio" name="optradio_<?php echo $no; ?>" value="izin"> Izin</label>
										</div>
										<div class="radio">
											<label><input type="radio" name="optradio_<?php echo $no; ?>" value="sakit"> Sakit</label>
										</div>
										<input type="hidden" name="absval[]" id="absvalue_<?php echo $no; ?>">
									</td>
								</tr>
								<?php $no++; } ?>
							</tbody>
							<input type="hidden" name="row_numb" value="<?php echo $no; ?>">
						</table>
						<button type="submit" class="btn btn-default">Simpan</button>
					</form>
				</div>
			</div>
		</div>

		<script src="assets/js/jquery-1.10.2.js"></script>
	    <script src="assets/js/jquery-gmaps-latlon-picker.js"></script>
	    <script src="assets/js/bootstrap.min.js"></script>
	    <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

	    <!-- Page-Level Plugin Scripts - Tables -->
	    <script src="assets/js/plugins/dataTables/jquery.dataTables.js"></script>
	    <script src="assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>

	    <script type="text/javascript">
	    	$(document).ready(function() {
	    		let len = $('input:hidden[name=row_numb]').val();
	    		for(let i = 1; i < len; i++) {
	    			$('input:radio[name=optradio_'+ i + ']').on('change', function() {
	    				$('#absvalue_' + i).val(this.value);
	    				alert('absen value ke-' + i + ' :' + $('#absvalue_' + i).val());
	    			});
	    		}
	    	});
	    </script>
	</body>
</html>