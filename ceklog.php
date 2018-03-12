<?php
include"config/conn.php";

session_start();

$sql1=mysql_query("select * from enc");
	$count1=mysql_num_rows($sql1);
	$rs1=mysql_fetch_array($sql1);
$zz = $rs1['encr'];


$_SESSION['enc']="";
if($_POST['a26u7d9cg6l1I4w']!=$zz){
    $_SESSION['enc']=0;
    header('location:https://www.youtube.com/watch?v=PWmfNeLs7fA');
}
else{
	$_SESSION['enc']=1;
}
$_POST['a26u7d9cg6l1I4w']="";

$pass=md5($_POST['password']);
$passw=$_POST['password'];

$user=$_POST['username'];

$_SESSION['id']="";
$_SESSION['nama']="";
$_SESSION['status']="";
$_SESSION['email']="";
$_SESSION['telp']="";
$_SESSION['jk']="";
$_SESSION['nama_sklh']=""; 
$_SESSION['nama_kls']="";

$sql=mysql_query("select * from admin where id_login='$user' and pass_login='$pass'");
	$count=mysql_num_rows($sql);
	$rs=mysql_fetch_array($sql);
if($rs['status_akun']==1){
		$_SESSION['id']=$rs['id_login'];
		$_SESSION['nama']=$rs['nama_adm'];
		$_SESSION['email']=$rs['email'];
		$_SESSION['telp']=$rs['telp_adm'];
		$_SESSION['jk']=$rs['jk'];
		$_SESSION['status']=$rs['status_akun'];			
	header('location:admin.php?module=home');
}

else{

	$sqla=mysql_query("select * from pegawai where nik='$user' and pass_pgw='$pass'");
		$counta=mysql_num_rows($sqla);
		$rsa=mysql_fetch_array($sqla);

	if($rsa['status_akun']==2){
				$_SESSION['id']=$rsa['id_pgw'];
				$_SESSION['nama']=$rsa['nama_pgw'];
				$_SESSION['telp']=$rsa['telp_pgw'];
				$_SESSION['jk']=$rsa['jk'];
				$_SESSION['status']=$rsa['status_akun'];
					$kode_sklh=$rsa['id_sklh']; 
					$sqlaaa=mysql_query("select nama_sklh from sekolah where id_sklh='$kode_sklh'");
					$countaaa=mysql_num_rows($sqlaaa);
					$rsaaa=mysql_fetch_array($sqlaaa);
				$_SESSION['nama_sklh']=$rsaaa['nama_sklh'];
			header('location:admin.php?module=home');		
	}

	else{

		$sqlz=mysql_query("select * from guru where nip='$user' and pass_guru='$pass'");
		$countz=mysql_num_rows($sqlz);
		$rsz=mysql_fetch_array($sqlz);

		if($rsz['status_akun']==3){
					$_SESSION['id']=$rsz['nip'];
					$_SESSION['nama']=$rsz['nama_guru'];
					$_SESSION['alamat']=$rsz['alamat_guru'];
					$_SESSION['status']=$rsz['status_akun'];
						$kode_sklhz=$rsz['id_sklh']; 
					$_SESSION['id_sklh']=$kode_sklhz;
						$sqlzz=mysql_query("select nama_sklh from sekolah where id_sklh='$kode_sklhz'");
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
						$_SESSION['nama_kls']=$rszzz['nama_kls'];
					}
					else{ 
						$_SESSION['nama_kls']="";
					}
				header('location:admin.php?module=home');
		}

		else{

			$sqlx=mysql_query("select * from siswa where nisn='$user' and pass_siswa='$pass'");
			$countx=mysql_num_rows($sqlx);
			$rsx=mysql_fetch_array($sqlx);

			if($rsx['status_akun']==4){

				$_SESSION['id']=$rsx['nisn'];
				$_SESSION['nama']=$rsx['nama_siswa'];
				$_SESSION['alamat']=$rsx['alamat_siswa'];
				$_SESSION['nama_ibu']=$rsx['nama_ibu'];
				$_SESSION['nama_ayah']=$rsx['nama_ayah'];
				$_SESSION['status']=$rsx['status_akun'];
					$kode_kls=$rsx['id_kls']; 
					$sqlxx=mysql_query("select nama_kls from kelas where id_kls='$kode_kls'");
					$countxx=mysql_num_rows($sqlxx);
					$rsxx=mysql_fetch_array($sqlxx);
				$_SESSION['nama_kls']=$rsxx['nama_kls'];
					$kode_sklh=$rsx['id_sklh']; 
					$sqlxxx=mysql_query("select nama_sklh from sekolah where id_sklh='$kode_sklh'");
					$countxxx=mysql_num_rows($sqlxxx);
					$rsxxx=mysql_fetch_array($sqlxxx);
				$_SESSION['nama_sklh']=$rsxxx['nama_sklh'];
				header('location:admin.php?module=home');
			}

			else{
				header('location:index.php?e=0&error=1');
				//echo"<center><h2>ID atau Password anda salah.</h2><br>
				//<a href=index.php><b>Ulangi Lagi</b></a></center>";	
			}

		}
	}
}
?>