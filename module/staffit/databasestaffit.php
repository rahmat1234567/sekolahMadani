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
		$data=mysql_query("select * from staffit");
		while($d = mysql_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}
	
	function input($nama_staffit,$jk,$pass_staffit,$alamat_staffit,$telp_staffit){
		mysql_query("insert into staffit values('','$nama_staffit','$pass_staffit','','$telp_staffit','$alamat_staffit','','$jk')");
	}
	
	function hapus($id_staffit){
		mysql_query("delete from staffit where id_staffit='$id_staffit'");
	}
	
	function edit($id_staffit){
		$data = mysql_query("select * from staffit where id_staffit='$id_staffit'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update($nama_staffit,$jk,$pass_staffit,$alamat_staffit,$telp_staffit){
		mysql_query("update staffit set nama_staffit='$nama_staffit',pass_staffit='$pass_staffit', alamat_staffit='$alamat_staffit', telp_staffit='$telp_staffit',jk='$jk' where id_staffit='$id_staffit'");
	}
}
?>