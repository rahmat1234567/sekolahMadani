<?php
include 'databasestaffit.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	
	$pass=md5($_POST['pass_staffit']);
	$db->input($_POST['nama_staffit'],$pass,$_POST['alamat_staffit'],$_POST['telp_staffit']);
	header("location:tampilstaffit.php");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['id_staffit']);
	header("location:tampilstaffit.php");
}
elseif($aksi == "update"){
	if($_POST['pass_staffit']==""){
		$pass1=$_POST['pass_lama'];
	}
	else{
		$pass1=md5($_POST['pass_staffit']);
	}
	$db->update($_POST['nama_staffit'],$pass1,$_POST['alamat_staffit'],$_POST['telp_staffit']);
	header("location:tampilstaffit.php");
}
?>