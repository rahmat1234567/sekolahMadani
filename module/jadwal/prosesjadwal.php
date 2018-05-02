<?php
include 'databasejadwal.php';
$db = new database();

$aksi = $_GET['aksi']; 
if($aksi == "tambah"){
	$db->input($_POST['nip'],$_POST['id_matpel'],$_POST['id_kls'],$_POST['tgl'],$_POST['jam']);  
	// echo $_POST['nip'].", ";
	// echo $_POST['id_matpel'].", ";
	// echo $_POST['id_kls'].", ";
	// echo $_POST['tgl'].", ";
	// echo $_POST['jam'].", ";
	
	header("location:http://localhost/sekolahMadani/admin.php?module=tampiljadwal");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['id_jadwal']);
	header("location:http://localhost/sekolahMadani/admin.php?module=tampiljadwal");
}
elseif($aksi == "update"){
	$db->update($_POST['nip'],$_POST['id_matpel'],$_POST['id_kls'],$_POST['tgl'],$_POST['jam']);
	header("location:http://localhost/sekolahMadani/admin.php?module=tampiljadwal");
}
?>