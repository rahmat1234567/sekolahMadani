<?php
include 'databasenilaitugas.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$sqli = "INSERT INTO `n_tugas` VALUES ";

		for($i = 0; $i < sizeof($_POST['nisn']); $i++) {
			$id_jadwal = $_POST['id_jadwal'];
			$id_kelas = $_POST['id_kelas'];
			$nama_tugas = $_POST['nama_tugas'][$i];
			$nisn = $_POST['nisn'][$i];
			$nilai_tugas = $_POST['nilai_tugas'][$i];
			$ket = $_POST['ket'][$i];

			$sqli .= "('', '".$id_jadwal."', '".$nisn."', '".$nilai_tugas."', '".$ket."', '".$nama_tugas."', '".$id_kelas."'),";
		}

		$sqli = rtrim($sqli, ', ');
		mysql_query($sqli);
		header("location:http://localhost/smsku/sekolahMadani/admin.php?module=tampil_tugas");
		//echo $sqli;
		//$db->input($_POST['id_jadwal'],$_POST['nisn'],$_POST['nama_tugas'],$_POST['nilai_tugas'],$_POST['ket'],$_POST['id_kelas']);
	
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['id_ntugas']);
	header("location:http://localhost/sekolahMadani/admin.php?module=tampil_tugas");
}
elseif($aksi == "update"){
	$db->update($_POST['id_ntugas'],$_POST['nisn'],$_POST['id_jadwal'],$_POST['id_kelas'],$_POST['nilai_tugas'],$_POST['ket'], $_POST['nama_tugas']);
	header("location:http://localhost/smsku/sekolahMadani/admin.php?module=tampil_tugas");
}
?>