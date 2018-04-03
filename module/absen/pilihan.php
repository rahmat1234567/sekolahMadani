<?php 
						// fix
						include 'databaseabsen.php';
						date_default_timezone_set("Asia/Jakarta");
						$check_jadwal = false;
						$id_kelas = "";
						$datefromdb = "";
						$data_locked = "1";

						// tanggal sekarang
						$currentDate = date("Y-m-d");

						// jam sekarang
						$currentTime = date("H:i:s");
						
						$qGuru = mysql_query("SELECT * FROM `jadwal` WHERE `nip`='$_SESSION[id]' AND `jam` BETWEEN '$currentTime' AND ADDTIME('$currentTime', '00:15:00'); ");
						$dGuru = mysql_fetch_array($qGuru);

						if($dGuru) {
							echo ", ".$dGuru['jam'];

							// data waktu dari database
							$dbTime = $dGuru['jam'];
							// konfigurasi setting jam update absensi pada database
							$endTime = strtotime("+1 day +0 hour +15 minutes +0 seconds", strtotime($dbTime));

							// menjadikan nilai yang sudah dikonfigurasi di atas menjadi tanggal
							$updateTime = date('H:i:s', $endTime);

							$qKelas = mysql_query("SELECT `id_kls`,`tgl` FROM `absensi` WHERE `jam` BETWEEN '$currentTime' AND ADDTIME('$currentTime', '00:15:00'); ");
							$dataKelas = mysql_fetch_array($qKelas);

								// mengambil data id kelas sekarang
								$id_kelas = $dataKelas['id_kls'];

								// mengambil data tgl sekarang
								$datefromdb = $dataKelas['tgl'];
							
							// memberi nilai locked = 0 agar data bisa di update
							mysql_query("UPDATE `absensi` SET `locked`='0' WHERE `jam` BETWEEN '$currentTime' AND ADDTIME('$currentTime', '00:15:00'); ");

							// mengambil data locked
							$qlocked = mysql_query("SELECT `locked` FROM `absensi` WHERE `jam` BETWEEN '$currentTime' AND ADDTIME('$currentTime', '00:15:00'); ");
							$dlocked = mysql_fetch_array($qlocked);

							$data_locked = $dlocked['locked'];

							$check_jadwal = true;
						} else {

							echo ", current time: ".$currentTime;

							$tglAbsen = $datefromdb;
							$nDate = strtotime("$tglAbsen -0 years -0 months +7 days");
							$newDate = date("Y-m-d", $nDate);

							// mengupdate tanggal apabila tanggal absen sudah melewati sejam dari waktu absen sekarang
							if($data_locked == "0") {
								// memberi data locked = 1 agar data nantinya tidak terupdate lagi
								mysql_query("UPDATE `absensi` SET `tgl`='$newDate', `locked`='1' WHERE `jam` BETWEEN '$dbTime' AND '$updateTime' AND `tgl`='$currentDate' ");
							} else {
								// nothing todo
							}
							$check_jadwal = false;
						}

						if($check_jadwal) {
							echo'
							  <div class="jumbotron">
							    <h1>Jadwal absensi ada sekarang!</h1>      
							    <p style="color: #7b7b7b;">Silahkan absen sekarang juga!.</p>
							  </div>';
						} else {
							$qcheckJadwal = mysql_query("SELECT * FROM `absensi` WHERE `tgl`='$currentDate' AND `jam`>='$currentTime' ");
							$dcheckJadwal = mysql_fetch_array($qcheckJadwal);

							if($dcheckJadwal) {
								echo'
								  <div class="jumbotron">
								    <h1>Tunggu sesuai waktu absensi anda!</h1>      
								    <p style="color: #7b7b7b;">Jadwal akan tersedia nanti, silahkan datang kembali sesuai jam masuk anda!</p>
								  </div>';
								} else {
									echo'
								  <div class="jumbotron">
								    <h1>Belum ada jadwal absensi!</h1>      
								    <p style="color: #7b7b7b;">Silahkan datang kembali jika sesuai jadwal absen anda!.</p>
								  </div>';
								}
						}
?>