<?php
include 'databasejadwal.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['nip'],$_POST['id_matpel'],$_POST['id_kls'],$_POST['jam']);
	header("location:tampiljadwal.php");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['id_jadwal']);
	header("location:tampiljadwal.php");
}
elseif($aksi == "update"){
	$db->update($_POST['nip'],$_POST['id_matpel'],$_POST['id_kls'],$_POST['jam']);
	header("location:tampiljadwal.php");
}
?>