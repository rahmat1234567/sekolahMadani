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
	
	function input($nis,$nama_siswa,$jk,$pass_siswa,$alamat_siswa,$nama_ayah,$nama_ibu){
		mysql_query("insert into siswa values('$nis','$nama_siswa','$pass_siswa','$alamat_siswa','','','$nama_ayah','$nama_ibu','','$jk')");
	}
	
	function hapus($nis){
		mysql_query("delete from siswa where nis='$nis'");
	}
	
	function edit($nis){
		$data = mysql_query("select * from siswa where nis='$nis'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update($nis,$nama_siswa,$jk,$pass_siswa,$alamat_siswa,$nama_ayah,$nama_ibu){
		mysql_query("update siswa set nama_siswa='$nama_siswa',jk='$jk',pass_siswa='$pass_siswa', alamat_siswa='$alamat_siswa',nama_ayah='$nama_ayah',nama_ibu='$nama_ibu' where nis='$nis'");
	}
}
?>
