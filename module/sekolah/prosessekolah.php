<?php
include 'databasesekolah.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['id_sklh'],$_POST['nama_sklh'],$_POST['alamat_sklh'],$_POST['telp_sklh'],$_POST['email_sklh'],$_POST['luas_sklh'],$_POST['jmlh_ruang_kls'],$_POST['laboratorium'],$_POST['musholla'],$_POST['aula'],$_POST['perpustakaan'],$_POST['lap_basket'],$_POST['lap_sepakbola']);
	header("location:http://localhost/sekolahMadani/admin.php?module=sekolah&kls=semua");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['id_sklh']);
	header("location:http://localhost/sekolahMadani/admin.php?module=sekolah&kls=semua");
}
//update($id_sklh,$nama_sklh,$alamat_sklh,$telp_sklh,$email_sklh,$jmlh_siswa,$luas_sklh,$jlmh_ruang_kls,$laboratorium,$musholla,$aula,$perpustakaan,$lap_basket,$lap_sepakbola,$lng,$lat)
elseif($aksi == "update"){
	$db->update($_POST['id_sklh'],$_POST['nama_sklh'],$_POST['alamat_sklh'],$_POST['telp_sklh'],$_POST['email_sklh'],$_POST['luas_sklh'],$_POST['jmlh_ruang_kls'],$_POST['laboratorium'],$_POST['musholla'],$_POST['aula'],$_POST['perpustakaan'],$_POST['lap_basket'],$_POST['lap_sepakbola'],$_POST['longi'],$_POST['lati']);
	header("location:http://localhost/sekolahMadani/admin.php?module=sekolah&kls=semua");
}
?>