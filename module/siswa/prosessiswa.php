<?php
include 'databasesiswa.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	
	$pass=md5($_POST['pass_siswa']);
	$db->input($_POST['nis'],$_POST['nama_siswa'],$_POST['jk'],$pass,$_POST['alamat_siswa'],$_POST['nama_ayah'],$_POST['nama_ibu']);
	header("location:tampilsiswa.php");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['nis']);
	header("location:tampilsiswa.php");
}
elseif($aksi == "update"){
	$db->update($_POST['nis'],$_POST['nama_siswa'],$_POST['jk'],$_POST['pass_siswa'],$_POST['alamat_siswa'],$_POST['nama_ayah'],$_POST['nama_ibu']);
	header("location:tampilsiswa.php");
}
?>