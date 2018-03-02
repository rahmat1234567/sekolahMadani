<?php
include 'databasestaffit.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){

	$foto  = $_FILES['foto_pgw']['name'];
	$tmp   = $_FILES['foto_pgw']['tmp_name'];
	$namaa = $_POST['nik'];
	$path  = "../../assets/img/".$namaa;
	$sss = move_uploaded_file($tmp, $path);
	
	$pass=md5($_POST['pass_pgw']);
	$db->input($namaa,$_POST['nama_pgw'],$_POST['jk'],$_POST['alamat_pgw'],$_POST['pass_pgw'],$_POST['telp_pgw'],$_POST['id_sklh'],$_POST['status_akun']);
	
	if($level==1){
        $nm_sklh=$nmsklh; 
        $dsql=mysql_query("select id_sklh from sekolah where nama_sklh='$nm_sklh'");
        $dcount=mysql_num_rows($dsql);
        $drs=mysql_fetch_array($dsql);
		header("location:http://localhost/sekolahMadani/admin.php");
	}
	else {
		header("location:http://localhost/smsku/sekolahMadani/admin.php?module=pgw");
	}
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['nik']);
	if($level==1){
        $nm_sklh=$nmsklh; 
        $dsql=mysql_query("select id_sklh from sekolah where nama_sklh='$nm_sklh'");
        $dcount=mysql_num_rows($dsql);
        $drs=mysql_fetch_array($dsql);
		header("location:http://localhost/sekolahMadani/admin.php");
	}
	else {
		header("location:http://localhost/smsku/sekolahMadani/admin.php?module=pgw");
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

	$niis=$_POST['nik'];
	$asql=mysql_query("select pass_pgw from pgw where nik='$niis'");
    $acount=mysql_num_rows($dsql);
    $ars=mysql_fetch_array($dsql);

    if($_POST['pass_pgw']==""){
    	$passs=$ars['pass_pgw'];
    }
    else{
    	$passs=md5($_POST['pass_pgw']);
    }

	$db->update($namaa,$_POST['foto_pgw'],$_POST['nama_pgw'],$_POST['jk'],$_POST['alamat_pgw'],$_POST['pass_pgw'],$_POST['telp_pgw'],$_POST['id_sklh'],$_POST['status_akun']);
	
    if($level==1){
        $nm_sklh=$nmsklh; 
        $dsql=mysql_query("select id_sklh from sekolah where nama_sklh='$nm_sklh'");
        $dcount=mysql_num_rows($dsql);
        $drs=mysql_fetch_array($dsql);
		header("location:http://localhost/sekolahMadani/admin.php");
	}
	else {
		header("location:http://localhost/smsku/sekolahMadani/admin.php?module=pgw");
	}
}
?>