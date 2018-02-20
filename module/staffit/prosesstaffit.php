<?php
include 'databasestaffit.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){

	$foto  = $_FILES['foto_staffit']['name'];
	$tmp   = $_FILES['foto_staffit']['tmp_name'];
	$namaa = $_POST['id_staffit'];
	$path  = "../../assets/img/".$namaa;
	$sss = move_uploaded_file($tmp, $path);
	
	$pass=md5($_POST['pass_staffit']);
	$db->input($namaa,$_POST['nama_staffit'],$_POST['jk'],$_POST['alamat_staffit'],$_POST['pass_staffit'],$_POST['telp_staffit'],$_POST['id_sklh'],$_POST['status_akun']);
	
	if($level==1){
        $nm_sklh=$nmsklh; 
        $dsql=mysql_query("select id_sklh from sekolah where nama_sklh='$nm_sklh'");
        $dcount=mysql_num_rows($dsql);
        $drs=mysql_fetch_array($dsql);
		header("location:http://localhost/sekolahMadani/admin.php");
	}
	else {
		header("location:http://localhost/smsku/sekolahMadani/admin.php?module=staffit");
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
		header("location:http://localhost/smsku/sekolahMadani/admin.php?module=staffit");
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

	$db->update($namaa,$_POST['foto_staffit'],$_POST['nama_staffit'],$_POST['jk'],$_POST['alamat_staffit'],$_POST['pass_staffit'],$_POST['telp_staffit'],$_POST['id_sklh'],$_POST['status_akun']);
	
    if($level==1){
        $nm_sklh=$nmsklh; 
        $dsql=mysql_query("select id_sklh from sekolah where nama_sklh='$nm_sklh'");
        $dcount=mysql_num_rows($dsql);
        $drs=mysql_fetch_array($dsql);
		header("location:http://localhost/sekolahMadani/admin.php");
	}
	else {
		header("location:http://localhost/smsku/sekolahMadani/admin.php?module=staffit");
	}
}
?>