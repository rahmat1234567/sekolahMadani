<?php
include 'databasematpel.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['nama_matpel']);
	header("location:http://localhost/sekolahMadani/admin.php?module=matpel");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['id_matpel']);
	header("location:http://localhost/sekolahMadani/admin.php?module=matpel");
}
elseif($aksi == "update"){
	$db->update($_POST['id_matpel'], $_POST['nama_matpel']);
	header("location:http://localhost/sekolahMadani/admin.php?module=matpel");
}
?>