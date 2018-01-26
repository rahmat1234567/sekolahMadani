<?php
include 'databaseguru.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	
	$pass=md5($_POST['pass_guru']);
	$db->input($_POST['nip'],$_POST['nama_guru'],$_POST['jk'],$pass,$_POST['alamat_guru'],$_POST['telp_guru']);
	header("location:tampilguru.php");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['nip']);
	header("location:tampilguru.php");
}
elseif($aksi == "update"){
	$db->update($_POST['nip'],$_POST['nama_guru'],$_POST['pass_guru'],$_POST['alamat_guru'],$_POST['telp_guru']);
	header("location:http://localhost/sekolahMadani/admin.php?module=guru&kls=semua");
}
?>