<?php
include 'databaseabsen.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['id_kls'],$_POST['id_jadwal'],$_POST['tgl'],$_POST['jam'],$_POST['ket']);
	header("location:http://localhost/smsku/sekolahmadani/module/simpan.php?act=input_absen&jam=1&klas=");
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['nip']);
	header("location:http://localhost/smsku/sekolahMadani/admin.php?module=guru&kls=semua");
}
elseif($aksi == "update"){

	if($_POST['pass_guru']==""){
		$pass1 = $_POST['pass_lama'];
	}
	else{
		$pass1 = md5($_POST['pass_guru']);
	}

	$db->update($_POST['nip'],$_POST['nama_guru'],$_POST['jk'],$pass1,$_POST['alamat_guru'],$_POST['telp_guru']);
	header("location:http://localhost/sekolahMadani/admin.php?module=guru&kls=semua");
}
?>