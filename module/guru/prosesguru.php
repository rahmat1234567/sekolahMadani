<?php
include 'databaseguru.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	
	$pass = md5($_POST['pass_guru']);
	$db->input($_POST['foto_guru'],$_POST['nip'],$_POST['nama_guru'],$_POST['jk'],$pass,$_POST['alamat_guru'],$_POST['telp_guru']);
	header("location:http://localhost/sekolahMadani/admin.php?module=guru&kls=semua");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['nip']);
	header("location:http://localhost/sekolahMadani/admin.php?module=guru&kls=semua");
}
elseif($aksi == "update"){

	if($_POST['pass_guru']==""){
		$pass1 = $_POST['pass_lama'];
	}
	else{
		$pass1 = md5($_POST['pass_guru']);
	}

	$db->update($_POST['foto_guru'],$_POST['nip'],$_POST['nama_guru'],$_POST['jk'],$pass1,$_POST['alamat_guru'],$_POST['telp_guru']);
	header("location:http://localhost/sekolahMadani/admin.php?module=guru&kls=semua");
}
?>