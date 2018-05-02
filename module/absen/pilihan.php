<?php 
						// fix
						include 'databaseabsen.php';
						date_default_timezone_set("Asia/Jakarta");
						$check_jadwal = false;
						$id_kelas = "";

						// tanggal sekarang
						$currentDate = date("Y-m-d");

						// jam sekarang
						$currentTime = date("H:i:s");
						
						$qGuru = mysql_query("SELECT * FROM `jadwal` WHERE `nip`='$_SESSION[id]' AND `jam` BETWEEN '$currentTime' AND ADDTIME('$currentTime', '00:15:00') AND `tgl`='$currentDate' ");
						$dGuru = mysql_fetch_array($qGuru);

						if($dGuru) {
							echo ", ".$dGuru['jam'];

							// data waktu dari database
							$dbTime = $dGuru['jam'];
							// konfigurasi setting jam update absensi pada database
							$endTime = strtotime("+1 day +0 hour +15 minutes +0 seconds", strtotime($dbTime));

							// menjadikan nilai yang sudah dikonfigurasi di atas menjadi tanggal
							$updateTime = date('H:i:s', $endTime);

							$qKelas = mysql_query("SELECT `id_kls`,`tgl` FROM `absensi` WHERE `nip`='$_SESSION[id]' AND `jam` BETWEEN '$currentTime' AND ADDTIME('$currentTime', '00:15:00') AND `tgl`='$currentDate' ");
							$dataKelas = mysql_fetch_array($qKelas);

								// mengambil data id kelas sekarang
								$id_kelas = $dataKelas['id_kls'];

								// mengambil data tgl sekarang
								$_SESSION['datefromdb'] = $dataKelas['tgl'];
							
							// memberi nilai locked = 0 agar data bisa di update
							mysql_query("UPDATE `absensi` SET `locked`='0' WHERE `nip`='$_SESSION[id]' AND `jam` BETWEEN '$currentTime' AND ADDTIME('$currentTime', '00:15:00') AND `tgl`='$currentDate' ");

							mysql_query("UPDATE `jadwal` SET `locked`='0' WHERE `nip`='$_SESSION[id]' AND `jam` BETWEEN '$currentTime' AND ADDTIME('$currentTime', '00:15:00') AND `tgl`='$currentDate' ");

							$check_jadwal = true;
						}

						if($check_jadwal == true) {
							echo'
							  <div class="jumbotron">
							    <h1>Jadwal absensi ada sekarang!</h1>      
							    <p style="color: #7b7b7b;">Silahkan absen sekarang juga!. <a href="admin.php?module=absen_siswa&id_kelas='.$id_kelas.'" class="btn btn-primary">Absen!</a></p>
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