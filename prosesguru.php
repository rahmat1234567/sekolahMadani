<?php
include 'databaseguru.php';
$db = new database();
$test = 1;
$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['nip'],$_POST['nama_guru'],$_POST['pass_guru'],$_POST['alamat_guru'],$_POST['telp_guru'],$test,$test,$test);
	header("location:tampilguru.php");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['nip']);
	header("location:tampilguru.php");
}
elseif($aksi == "update"){
	$db->update($_POST['nip'],$_POST['nama_guru'],$_POST['pass_guru'],$_POST['alamat_guru'],$_POST['telp_guru']);
	header("location:tampilguru.php");
}
?>