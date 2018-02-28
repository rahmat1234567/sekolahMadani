<?php
include 'databasenilaitugas.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['id_jadwal'],$_POST['nisn'],$_POST['nama_tugas'],$_POST['nilai_tugas'],$_POST['ket']);
	header("location:http://localhost/sekolahMadani/admin.php?module=tampil_tugas");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['id_ntugas']);
	header("location:http://localhost/sekolahMadani/admin.php?module=tampil_tugas");
}
elseif($aksi == "update"){
	$db->update($_GET['id_jadwal'],$_POST['nisn'],$_POST['nama_tugas'],$_POST['nilai_tugas'],$_POST['ket']);
	header("location:http://localhost/sekolahMadani/admin.php?module=tampil_tugas");
}
?>