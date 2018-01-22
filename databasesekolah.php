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
		$data=mysql_query("select * from sekolah");
		while($d = mysql_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}
	
	function input($nama_sklh,$alamat_sklh,$telp_sklh,$jmlh_siswa){
		mysql_query("insert into sekolah values('','$nama_sklh','$alamat_sklh','$telp_sklh','$jmlh_siswa')");
	}
	
	function hapus($id_sklh){
		mysql_query("delete from sekolah where id_sklh='$id_sklh'");
	}
	
	function edit($id_sklh){
		$data = mysql_query("select * from sekolah where id_sklh='$id_sklh'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update($id_sklh,$nama_sklh,$alamat_sklh,$telp_sklh,$jmlh_siswa){
		mysql_query("update sekolah set nama_sklh='$nama_sklh', alamat_sklh='$alamat_sklh', telp_sklh='$telp_sklh', jmlh_siswa='$jmlh_siswa' where id_sklh='$id_sklh'");
	}
}
?>