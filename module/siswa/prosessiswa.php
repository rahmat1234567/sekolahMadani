<?php
include 'databasesiswa.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){


	$foto  = $_FILES['foto_siswa']['name'];
	$tmp   = $_FILES['foto_siswa']['tmp_name'];
	$namaa = $_POST['nisn'];
	$path  = "../../assets/img/".$namaa;
	$sss = move_uploaded_file($tmp, $path);


	$pass=md5($_POST['pass_siswa']);
	$db->input($_POST['nisn'],$_POST['nama_siswa'],$pass,$_POST['alamat_siswa'],$_POST['id_sklh'],$_POST['id_kls'],$_POST['nama_ayah'],$_POST['nama_ibu'],$_POST['status_akun'],$_POST['jk'],$_POST['id_ekskul'],$namaa,$_POST['telp_ortu']);

    if($_POST['level']==2){
        $test=$_POST['id_sklh'];
        $link = 'http://localhost/sekolahMadani/admin.php?module=siswa&kls=';
        $link1 = $link.$test;
		header("location:$link1");
	}
	else {
		header("location:http://localhost/sekolahMadani/admin.php?module=siswa&kls=semua");
	}
}

elseif($aksi == "hapus"){
	$db->hapus($_GET['nisn']);
	$niiis = $_GET['nisn'];
	
    $test=$_GET['ids'];

    if($_GET['leve']==2){
        $link = 'http://localhost/sekolahMadani/admin.php?module=siswa&kls=';
        $link1 = $link.$test;
		header("location:$link1");
	}
	else {
		header("location:http://localhost/sekolahMadani/admin.php?module=siswa&kls=semua");
	}
}

elseif($aksi == "edit"){

		$foto  = $_FILES['foto_siswa']['name'];
		$tmp   = $_FILES['foto_siswa']['tmp_name'];
		$namaa = $_POST['nisn'];
		$path  = "../../assets/img/".$namaa;
		$sss = move_uploaded_file($tmp, $path);

	if($namaa==""){
		$namaa=$_POST['foto_lama'];
		if($namaa==""){
			$namaa="default.jpg";
		}
	}

	$niis=$_POST['nisn'];
	$asql=mysql_query("select pass_siswa from siswa where nisn='$niis'");
    $acount=mysql_num_rows($asql);
    $ars=mysql_fetch_array($asql);

    if($_POST['pass_siswa']==""){
    	$passs=$ars['pass_siswa'];
    }
    else{
    	$passs=md5($_POST['pass_siswa']);
    }

	$db->update($_POST['nisn'],$_POST['nama_siswa'],$passs,$_POST['alamat_siswa'],$_POST['id_kls'],$_POST['nama_ayah'],$_POST['nama_ibu'],$_POST['status_akun'],$_POST['jk'],$_POST['id_ekskul'],$namaa,$_POST['telp_ortu']);
	
    if($_POST['level']==2){
        $test=$_POST['id_sklh'];
        $link = 'http://localhost/sekolahMadani/admin.php?module=siswa&kls=';
        $link1 = $link.$test;
		header("location:$link1");
	}
	else {
		header("location:http://localhost/sekolahMadani/admin.php?module=siswa&kls=semua");
	}
}
?>