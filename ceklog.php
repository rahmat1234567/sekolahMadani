<?php
include"config/conn.php";

$pass=md5($_POST['password']);
$passw=$_POST['password'];

$user=$_POST['username'];
$sql=mysql_query("select * from akun where id_login='$user' and pass_login='$pass'");
	$count=mysql_num_rows($sql);
	$rs=mysql_fetch_array($sql);
if($rs['level']==1){
	$sql=mysql_query("select * from akun where id_login='$user' and pass_login='$pass'");
	$count=mysql_num_rows($sql);
	$rs=mysql_fetch_array($sql);
	
		session_start();
			$_SESSION['id_login']=$rs['id_login'];
			$_SESSION['nama_adm']=$rs['nama_adm'];
			$_SESSION['email']=$rs['email'];
			$_SESSION['telp_adm']=$rs['telp_adm'];
				
		header('location:admin.php?module=home');
}


else if($rs['level']==4){
$mr=md5($_POST['pass_login']);
	$sqla=mysql_query("select * from siswa where nis='$user' and pass_siswa='$mr'");
	$counta=mysql_num_rows($sqla);
	$rsa=mysql_fetch_array($sqla);

			session_start();
				$_SESSION['nis']=$rsa['nis'];
				$_SESSION['nama_siswa']=$rsa['nama_siswa'];
				$_SESSION['alamat_siswa']=$rsa['alamat_siswa'];
				$_SESSION['nama_ibu']=$rsa['nama_ibu'];
				$_SESSION['nama_ayah']=$rsa['nama_ayah'];
					$kode_kls=$rsa['id_kls']; 
					$sqlaa=mysql_query("select nama_kls from kelas where id_kls='$kode_kls'");
					$countaa=mysql_num_rows($sqlaa);
					$rsaa=mysql_fetch_array($sqlaa);
				$_SESSION['nama_kelas']=$rsaa['nama_kls'];
					$kode_sklh=$rsa['id_sklh']; 
					$sqlaaa=mysql_query("select nama_sklh from sekolah where id_sklh='$kode_sklh'");
					$countaaa=mysql_num_rows($sqlaaa);
					$rsaaa=mysql_fetch_array($sqlaaa);
				$_SESSION['nama_sklh']=$rsaaa['nama_sklh'];
			header('location:admin.php?module=home');
				
}

else if($rs['level']==3){
$gr=md5($_POST['pass_login']);
	$sqlz=mysql_query("select * from guru where nip='$user' and pass_guru='$gr'");
	$countz=mysql_num_rows($sqlz);
	$rsz=mysql_fetch_array($sqlz);
			session_start();
				$_SESSION['nip']=$rsz['nip'];
				$_SESSION['nama_guru']=$rsz['nama_guru'];
				$_SESSION['alamat_guru']=$rsz['alamat_guru'];
					$kode_sklhz=$rsz['id_sklh']; 
					$sqlzz=mysql_query("select nama_sklh from sekolah where id_sklh='$kode_sklh'");
					$countzz=mysql_num_rows($sqlzz);
					$rszz=mysql_fetch_array($sqlzz);
				$_SESSION['nama_sklh']=$rszz['nama_sklh'];
				if($rsz['wk_status']==1){
					$kode_wk=$rsz['nip'];					
					$sqlzzz=mysql_query("
						select nama_kls from kelas, walikelas where walikelas.nip=$kode_wk and kelas.id_kls=walikelas.id_kls
					");
					$countzzz=mysql_num_rows($sqlzzz);
					$rszzz=mysql_fetch_array($sqlzzz);
				}
			header('location:admin.php?module=home');
	
	
}
else
{	
			echo"<center><h2>ID atau Password anda salah.</h2><br>
				<a href=index.php><b>Ulangi Lagi</b></a></center>";	
}

?>
