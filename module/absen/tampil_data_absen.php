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
						<input type="hidden" name="id_kelas" value="<?php echo $_GET['id_kelas']; ?>">
						<table class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<th>No</th>
								<th>Nama Siswa</th>
								<th>Kelas</th>
								<th>Tanggal Absen</th>
								<th>Waktu Absen</th>
								<th>Keterangan</th>
							</thead>
							<tbody>
								<?php 
									include "config/conn.php";
									$no = 1;
									// tanggal sekarang
									$currentDate = date("Y-m-d");

									// jam sekarang
									$currentTime = date("H:i:s");
									
									$qAbsensi = mysql_query("SELECT * FROM `data_absensi` WHERE `nip`='$_SESSION[id]' ");
									while($dAbsensi = mysql_fetch_array($qAbsensi)) {
								?>
								<tr class="odd gradeX">
									<td><?php echo $no; ?></td>
									<td><?php 
										$qSiswa = mysql_query("SELECT `nama_siswa` FROM `siswa` WHERE `nisn`='$dAbsensi[nisn]' ");
										$dSiswa = mysql_fetch_array($qSiswa);

										echo $dSiswa['nama_siswa'];
									?></td>
									<td><?php 
										$qKelas = mysql_query("SELECT `nama_kls` FROM `kelas` WHERE `id_kls`='$dAbsensi[id_kls]' ");
										$dKelas = mysql_fetch_array($qKelas);

										echo $dKelas['nama_kls'];
									 ?></td>
									 <td><?php echo $dAbsensi['tgl']; ?></td>
									 <td><?php echo $dAbsensi['jam']; ?></td>
									 <td><?php echo $dAbsensi['keterangan']; ?></td>
								</tr>
								<?php $no++; } 

									$tglAbsen = $_SESSION['datefromdb'];
									$nDate = strtotime("$tglAbsen -0 years -0 months +7 days");
									$newDate = date("Y-m-d", $nDate);

									$qchecklockedAbsen = mysql_query("SELECT `locked` FROM `absensi` WHERE `locked`='0' AND `nip`='$_SESSION[id]' AND `jam` BETWEEN '$currentTime' AND ADDTIME('$currentTime', '00:15:00') AND `tgl`='$currentDate' ");
									$dchecklockedAbsen = mysql_fetch_array($qchecklockedAbsen);

									$qchecklockedJadwal = mysql_query("SELECT `locked` FROM `jadwal` WHERE `locked`='0' AND `nip`='$_SESSION[id]' AND `jam` BETWEEN '$currentTime' AND ADDTIME('$currentTime', '00:15:00') AND `tgl`='$currentDate' ");
									$dchecklockedJadwal = mysql_fetch_array($qchecklockedJadwal);

									// mengupdate tanggal apabila tanggal absen sudah melewati sejam dari waktu absen sekarang
									if($dchecklockedAbsen['locked'] == "0" && $dchecklockedJadwal['locked'] == "0") {
										// memberi data locked = 1 agar data nantinya tidak terupdate lagi
										mysql_query("UPDATE `absensi` SET `tgl`='$newDate', `locked`='1' WHERE `locked`='0' AND `nip`='$_SESSION[id]' AND `jam` BETWEEN '$currentTime' AND ADDTIME('$currentTime', '00:15:00') AND `tgl`='$currentDate' ");
										mysql_query("UPDATE `jadwal` SET `tgl`='$newDate', `locked`='1' WHERE `locked`='0' AND `nip`='$_SESSION[id]' AND `jam` BETWEEN '$currentTime' AND ADDTIME('$currentTime', '00:15:00') AND `tgl`='$currentDate' ");
									}
								?>
							</tbody>
							<input type="hidden" name="row_numb" value="<?php echo $no; ?>">
						</table>
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

	</body>
</html>