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
		$data=mysql_query("select * from guru");
		while($d = mysql_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}
	
	function input($foto_guru,$nip,$nama_guru,$jk,$pass_guru,$alamat_guru,$telp_guru){
		mysql_query("insert into guru values('$nip','$nama_guru','$pass_guru','$alamat_guru','$telp_guru','','','','$jk','$foto_guru')");
	}
	
	function hapus($nip){
		mysql_query("delete from guru where nip='$nip'");
	}
	
	function edit($nip){
		$data = mysql_query("select * from guru where nip='$nip'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update($foto_guru,$nip,$nama_guru,$jk,$pass_guru,$alamat_guru,$telp_guru){
		mysql_query("update guru set foto_guru='$foto_guru',nama_guru='$nama_guru',jk='$jk',pass_guru='$pass_guru', alamat_guru='$alamat_guru', telp_guru='$telp_guru' where nip='$nip'");
	}
}
?>
