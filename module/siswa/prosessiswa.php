<?php
include 'databasesiswa.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	
	$pass=md5($_POST['pass_siswa']);
	$db->input($_POST['nisn'],$_POST['nama_siswa'],$pass,$_POST['alamat_siswa'],$_POST['id_sklh'],$_POST['id_kls'],$_POST['nama_ayah'],$_POST['nama_ibu'],$_POST['status_akun'],$_POST['jk'],$_POST['id_ekskul'],$_POST['foto_siswa'],$_POST['telp_ortu']);

    if($_POST['level']==2){
        $nm_sklh=$nmsklh; 
        $dsql=mysql_query("select id_sklh from sekolah where nama_sklh='$nm_sklh'");
        $dcount=mysql_num_rows($dsql);
        $drs=mysql_fetch_array($dsql);
        $test=$drs['id_sklh'];
		header("location:http://localhost/sekolahMadani/admin.php?module=siswa&kls=$test");
	}
	else {
		header("location:http://localhost/sekolahMadani/admin.php?module=siswa&kls=semua");
	}
}

elseif($aksi == "hapus"){
	$db->hapus($_GET['nisn']);
	
    if($_POST['level']==2){
        $nm_sklh=$nmsklh; 
        $dsql=mysql_query("select id_sklh from sekolah where nama_sklh='$nm_sklh'");
        $dcount=mysql_num_rows($dsql);
        $drs=mysql_fetch_array($dsql);
        $test=$drs['id_sklh'];
		header("location:http://localhost/sekolahMadani/admin.php?module=siswa&kls=$test");
	}
	else {
		header("location:http://localhost/sekolahMadani/admin.php?module=siswa&kls=semua");
	}
}

elseif($aksi == "edit"){
	$niis=$_POST['nisn'];
	$asql=mysql_query("select pass_siswa from siswa where nisn='$niis'");
    $acount=mysql_num_rows($dsql);
    $ars=mysql_fetch_array($dsql);

    if($_POST['pass_siswa']==""){
    	$passs=$ars['pass_siswa'];
    }
    else{
    	$passs=md5($_POST['pass_siswa']);
    }

	$db->update($_POST['nisn'],$_POST['nama_siswa'],$passs,$_POST['alamat_siswa'],$_POST['id_kls'],$_POST['nama_ayah'],$_POST['nama_ibu'],$_POST['status_akun'],$_POST['jk'],$_POST['id_ekskul'],$_POST['foto_siswa'],$_POST['telp_ortu']);
	
    if($_POST['level']==2){
        $nm_sklh=$nmsklh; 
        $dsql=mysql_query("select id_sklh from sekolah where nama_sklh='$nm_sklh'");
        $dcount=mysql_num_rows($dsql);
        $drs=mysql_fetch_array($dsql);
        $test=$drs['id_sklh'];
        $link = 'http://localhost/sekolahMadani/admin.php?module=siswa&kls='.'"$test"';
		header("location:$link");
	}
	else {
		header("location:http://localhost/sekolahMadani/admin.php?module=siswa&kls=semua");
	}
}
?>