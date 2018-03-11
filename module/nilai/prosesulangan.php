<?php
include 'databasenilaiulangan.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){

	$sqli = "INSERT INTO `n_ulanganharian` VALUES ";

	for($i = 0; $i < sizeof($_POST['nisn']); $i++) {
		$id_jadwal = $_POST['id_jadwal'];
		$id_kelas = $_POST['id_kelas'];
		$nisn = $_POST['nisn'][$i];
		$uh1 = $_POST['uh1'][$i];
		$uh2 = $_POST['uh2'][$i];
		$uh3 = $_POST['uh3'][$i];
		$uh4 = $_POST['uh4'][$i];
		$uh5 = $_POST['uh5'][$i];
		$uh6 = $_POST['uh6'][$i];
		$uh7 = $_POST['uh7'][$i];
		$uh8 = $_POST['uh8'][$i];
		$ket = $_POST['ket_uh'][$i];

		$sqli .= "('', '".$id_jadwal."', '".$nisn."', '".$id_kelas."', '".$uh1."', '".$uh2."', '".$uh3."', '".$uh4."', '".$uh5."', '".$uh6."', '".$uh7."', '".$uh8."', '".$ket."'),";
	}
	$sqli = rtrim($sqli, ', ');
	mysql_query($sqli);

	//$db->input($_POST['id_jadwal'],$_POST['no_induk'],$_POST['id_kelas'],$_POST['uh1'],$_POST['uh2'],$_POST['uh3'],$_POST['uh4'],$_POST['uh5'],$_POST['uh6'],$_POST['uh7'],$_POST['uh8'],$_POST['ket_uh']);
	//echo $sqli;
	header("location:http://localhost/sekolahMadani/admin.php?module=tampil_ulangan");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['id_nuh']);
	header("location:http://localhost/sekolahMadani/admin.php?module=tampil_ulangan");
}
elseif($aksi == "update"){
	$db->update($_POST['nisn'],$_POST['nilai_uh1'],$_POST['nilai_uh2'],$_POST['nilai_uh3'],$_POST['nilai_uh4'],$_POST['nilai_uh5'],$_POST['nilai_uh6'],$_POST['nilai_uh7'],$_POST['nilai_uh8'],$_POST['ket_uh']);
	header("location:http://localhost/sekolahMadani/admin.php?module=sekolah&kls=semua");
}
?>