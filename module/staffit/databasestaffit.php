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
		$data=mysql_query("select * from pegawai");
		while($d = mysql_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}
	
	function input($nik,$foto_pgw,$nama_pgw,$jk,$alamat_pgw,$pass_pgw,$telp_pgw,$id_sklh,$status_akun){
		mysql_query("insert into pgw values('$nik','$nama_pgw','$pass_pgw','$id_sklh','$telp_pgw','$alamat_pgw','$status_akun','$jk','$foto_pgw')");
	}
	
	function hapus($nik){
		mysql_query("delete from pgw where nik='$nik'");
	}
	
	function edit($nik){
		$data = mysql_query("select * from pgw where nik='$nik'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update($foto_pgw,$nama_pgw,$jk,$alamat_pgw,$pass_pgw,$telp_pgw,$id_sklh,$status_akun){
		mysql_query("update pgw set foto_pgw='$foto_pgw',nama_pgw='$nama_pgw',jk='$jk',alamat_pgw='$alamat_pgw',pass_pgw='$pass_pgw',telp_pgw='$telp_pgw',id_sklh='$id_sklh',status_akun='$status_akun' where nik='$nik'");
	}
}
?>