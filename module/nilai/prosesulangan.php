<?php
include 'databasenilaiulangan.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['nisn'],$_POST['nilai_uh1'],$_POST['ket_uh']);
	header("location:http://localhost/sekolahMadani/admin.php?module=tampil_ulangan");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['id_nuh']);
	header("location:http://localhost/sekolahMadani/admin.php?module=tampil_ulangan");
}
elseif($aksi == "update"){
	$db->update($_POST['nisn'],$_POST['nilai_uh1'],$_POST['ket_uh']);
	header("location:http://localhost/sekolahMadani/admin.php?module=sekolah&kls=semua");
}
?>