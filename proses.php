<?php
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['nama_matpel']);
	header("location:tampilmatpel.php");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['id']);
	header("location:tampi;matpel.php");
}
elseif($aksi == "update"){
	$db->update($_POST['id'], $_POST['nama_matpel']);
	header("location:tampil.php");
}