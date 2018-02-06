<?php
include 'databasestaffit.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	
	$pass=md5($_POST['pass_staffit']);
	$db->input($_POST['foto_staffit'],$_POST['nama_staffit'],$_POST['jk'],$_POST['alamat_staffit'],$_POST['pass_staffit'],$_POST['telp_staffit'],$_POST['id_sklh'],$_POST['status_akun']);
	
	if($level==1){
        $nm_sklh=$nmsklh; 
        $dsql=mysql_query("select id_sklh from sekolah where nama_sklh='$nm_sklh'");
        $dcount=mysql_num_rows($dsql);
        $drs=mysql_fetch_array($dsql);
		header("location:http://localhost/sekolahMadani/admin.php");
	}
	else {
		header("location:http://http://localhost/smsku/sekolahMadani/admin.php?module=staffit");
	}
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['id_staffit']);
	if($level==1){
        $nm_sklh=$nmsklh; 
        $dsql=mysql_query("select id_sklh from sekolah where nama_sklh='$nm_sklh'");
        $dcount=mysql_num_rows($dsql);
        $drs=mysql_fetch_array($dsql);
		header("location:http://localhost/sekolahMadani/admin.php");
	}
	else {
		header("location:http://http://localhost/smsku/sekolahMadani/admin.php?module=staffit");
	}
}
elseif($aksi == "edit"){
	$niis=$_POST['id_staffit'];
	$asql=mysql_query("select pass_staffit from staffit where id_staffit='$niis'");
    $acount=mysql_num_rows($dsql);
    $ars=mysql_fetch_array($dsql);

    if($_POST['pass_staffit']==""){
    	$passs=$ars['pass_staffit'];
    }
    else{
    	$passs=md5($_POST['pass_staffit']);
    }

	$db->update($_POST['foto_staffit'],$_POST['nama_staffit'],$_POST['jk'],$_POST['alamat_staffit'],$_POST['pass_staffit'],$_POST['telp_staffit'],$_POST['id_sklh'],$_POST['status_akun']);
	
    if($level==1){
        $nm_sklh=$nmsklh; 
        $dsql=mysql_query("select id_sklh from sekolah where nama_sklh='$nm_sklh'");
        $dcount=mysql_num_rows($dsql);
        $drs=mysql_fetch_array($dsql);
		header("location:http://localhost/sekolahMadani/admin.php");
	}
	else {
		header("location:http://http://localhost/smsku/sekolahMadani/admin.php?module=staffit");
	}
}
?>