<?php
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['nama_matpel']);
	header("location:tampilmatpel.php");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['id_matpel']);
	header("location:tampilmatpel.php");
}
elseif($aksi == "update"){
	$db->update($_POST['id_matpel'], $_POST['nama_matpel']);
	header("location:tampilmatpel.php");
}
?>