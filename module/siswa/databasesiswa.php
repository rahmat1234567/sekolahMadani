<?php

class database{
	var $host="localhost";
	var $uname="root";
	var $pass="";
	var $db="sekolahsm";
	
	function __construct(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);
	}
	
	function tampil_data(){
		$data=mysql_query("select * from siswa");
		while($d = mysql_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}
	
	function input($nisn,$nama_siswa,$pass_siswa,$alamat_siswa,$id_sklh,$id_kls,$nama_ayah,$nama_ibu,$status_akun,$jk,$id_ekskul,$foto_siswa,$telp_ortu){
		mysql_query("insert into siswa values('$nisn','$nama_siswa','$pass_siswa','$alamat_siswa','$id_sklh','$id_kls','$nama_ayah','$nama_ibu','$status_akun','$jk','$id_ekskul','$foto_siswa','$telp_ortu')");
	}
	
	function hapus($nisn){
		mysql_query("delete from siswa where nisn='$nisn'");
	}
	
	function edit($nisn){
		$data = mysql_query("select * from siswa where nisn='$nisn'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update($nisn,$nama_siswa,$pass_siswa,$alamat_siswa,$id_kls,$nama_ayah,$nama_ibu,$status_akun,$jk,$id_ekskul,$foto_siswa,$telp_ortu){
		mysql_query("update siswa set nama_siswa='$nama_siswa',jk='$jk',pass_siswa='$pass_siswa', alamat_siswa='$alamat_siswa',nama_ayah='$nama_ayah',nama_ibu='$nama_ibu', status_akun='$status_akun', jk='$jk', foto_siswa='$foto_siswa', id_kls='$id_kls', telp_ortu='$telp_ortu' where nisn='$nisn'");
	}
}
?>
