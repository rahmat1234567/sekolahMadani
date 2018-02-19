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
	
	function input($id_staffit,$foto_staffit,$nama_staffit,$jk,$alamat_staffit,$pass_staffit,$telp_staffit,$id_sklh,$status_akun){
		mysql_query("insert into staffit values('$id_staffit','$nama_staffit','$pass_staffit','$id_sklh','$telp_staffit','$alamat_staffit','$status_akun','$jk','$foto_staffit')");
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
	
	function update($foto_staffit,$nama_staffit,$jk,$alamat_staffit,$pass_staffit,$telp_staffit,$id_sklh,$status_akun){
		mysql_query("update staffit set foto_staffit='$foto_staffit',nama_staffit='$nama_staffit',jk='$jk',alamat_staffit='$alamat_staffit',pass_staffit='$pass_staffit',telp_staffit='$telp_staffit',id_sklh='$id_sklh',status_akun='$status_akun' where id_staffit='$id_staffit'");
	}
}
?>