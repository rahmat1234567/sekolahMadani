<?php
include 'databasenilaiulangan.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	for($i = 0; $i < 8; $i++) {
		if(isset($_POST['uh'.$i])) {
			if($_POST['uh'.$i] == '') {
				$_POST['uh'] = '\N';
			}
		}
	}
	$db->input($_POST['id_jadwal'],$_POST['no_induk'],$_POST['id_kelas'],$_POST['uh1'],$_POST['uh2'],$_POST['uh3'],$_POST['uh4'],$_POST['uh5'],$_POST['uh6'],$_POST['uh7'],$_POST['uh8'],$_POST['ket_uh']);
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