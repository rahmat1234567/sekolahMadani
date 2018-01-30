<?php
include 'databasesekolah.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['nama_sklh'],$_POST['alamat_sklh'],$_POST['telp_sklh'],$_POST['jmlh_siswa']);
	header("location:http://localhost/sekolahMadani/admin.php?module=sekolah&kls=semua");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['id_sklh']);
	header("location:http://localhost/sekolahMadani/admin.php?module=sekolah&kls=semua");
}
elseif($aksi == "update"){
	$db->update($_POST['id_sklh'],$_POST['nama_sklh'],$_POST['alamat_sklh'],$_POST['telp_sklh'],$_POST['jmlh_siswa']);
	header("location:http://localhost/sekolahMadani/admin.php?module=sekolah&kls=semua");
}
?>