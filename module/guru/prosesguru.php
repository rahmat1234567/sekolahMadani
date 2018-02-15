<?php
include 'databaseguru.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	
	$foto  = $_FILES['foto_guru']['name'];
    $tmp   = $_FILES['foto_guru']['tmp_name'];
    $namaa = $_POST['nip'].$foto;
    $path  = "../../assets/img/".$namaa;
    $sss = move_uploaded_file($tmp, $path);
	
	$pass = md5($_POST['pass_guru']);
	$db->input($_POST['foto_guru'],$_POST['nip'],$_POST['nama_guru'],$_POST['jk'],$_POST['alamat_guru'],$_POST['telp_guru'],$pass,$_POST['status_akun']);
	header("location:http://localhost/sekolahMadani/admin.php?module=guru&kls=semua");
	
	if($_POST['level']==2){
        $test=$_POST['id_sklh'];
        $link = 'http://localhost/sekolahMadani/admin.php?module=guru&kls=';
        $link1 = $link.$test;
        header("location:$link1");
    }
    else {
        header("location:http://localhost/sekolahMadani/admin.php?module=guru&kls=semua");
    }
}

elseif($aksi == "hapus"){
	$db->hapus($_GET['nip']);
    $niiis = $_GET['nip'];
    
    $test=$_GET['ids'];

    if($_GET['leve']==2){
        $link = 'http://localhost/sekolahMadani/admin.php?module=guru&kls=';
        $link1 = $link.$test;
        header("location:$link1");
    }
    else {
        header("location:http://localhost/sekolahMadani/admin.php?module=guru&kls=semua");
    }
}

elseif($aksi == "update"){
	 $foto  = $_FILES['foto_guru']['name'];
        $tmp   = $_FILES['foto_guru']['tmp_name'];
        $namaa = $_POST['nip'];
        $path  = "../../assets/img/".$namaa;
        $sss = move_uploaded_file($tmp, $path);

    if($namaa==""){
        $namaa=$_POST['foto_lama'];
        if($namaa==""){
            $namaa="default.jpg";
        }
    }
	
	$niis=$_POST['nip'];
    $asql=mysql_query("select pass_guru from guru where nip='$niis'");
    $acount=mysql_num_rows($asql);
    $ars=mysql_fetch_array($asql);

    if($_POST['pass_guru']==""){
        $passs=$ars['pass_guru'];
    }
    else{
        $passs=md5($_POST['pass_guru']);
    }

	$db->update($_POST['foto_guru'],$_POST['nip'],$_POST['nama_guru'],$_POST['jk'],$_POST['alamat_guru'],$_POST['telp_guru'],$pass,$_POST['status_akun']);
	header("location:http://localhost/sekolahMadani/admin.php?module=guru&kls=semua");
}
?>