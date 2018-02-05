<?php
include 'databasesiswa.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	
	$pass=md5($_POST['pass_siswa']);
	$db->input($_POST['nisn'],$_POST['nama_siswa'],$pass,$_POST['alamat_siswa'],$_POST['id_sklh'],$_POST['id_kls'],$_POST['nama_ayah'],$_POST['nama_ibu'],$_POST['status_akun'],$_POST['jk'],$_POST['id_ekskul'],$_POST['foto_siswa'],$_POST['telp_ortu']);
	header("location:tampilsiswa.php");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['nisn']);
	header("location:tampilsiswa.php");
}
elseif($aksi == "update"){
	$db->update($_POST['nisn'],$_POST['nama_siswa'],$_POST['pass_siswa'],$_POST['alamat_siswa'],$_POST['id_kls'],$_POST['nama_ayah'],$_POST['nama_ibu'],$_POST['status_akun'],$_POST['jk'],$_POST['id_ekskul'],$_POST['foto_siswa'],$_POST['telp_ortu']);
	header("location:tampilsiswa.php");
}
?>