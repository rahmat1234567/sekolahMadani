<?php
include 'databasekelas.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['id_kls'],$_POST['nama_kls'],$_POST['id_wk'],$_POST['id_sklh']);
	header("location:http://localhost/sekolahMadani/admin.php?module=kelas&kls=semua");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['id_kls']);
	header("location:http://localhost/sekolahMadani/admin.php?module=kelas&kls=semua");
}
elseif($aksi == "update"){
	$db->update($_POST['id_kls'],$_POST['nama_kls'],$_POST['id_wk'],$_POST['id_sklh']); 
	header("location:http://localhost/sekolahMadani/admin.php?module=kelas&kls=semua");
}
?>
