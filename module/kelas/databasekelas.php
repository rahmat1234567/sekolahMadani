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
		$data=mysql_query("select * from kelas");
		while($d = mysql_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}
	
	function input($nama_kls,$id_wk,$id_sklh){
		mysql_query("insert into kelas values('','$nama_kls','$id_wk','$id_sklh')");
	}
	
	function hapus($id_kls){
		mysql_query("delete from kelas where id_kls='$id_kls'");
	}
	
	function edit($id_kls){
		$data = mysql_query("select * from kelas where id_kls='$id_kls'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update($nama_kls,$id_wk,$id_sklh){
		mysql_query("update kelas set nama_kls='$nama_kls', id_wk='$id_wk', id_sklh='$id_sklh' where id_kls='$id_kls'");
	}
}
?>