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
		$data=mysql_query("select * from matpel"); //untuk mengambil data dari database dengan tabel matpel
		while($d = mysql_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}
	
	function input($nama_matpel){
		mysql_query("insert into matpel values('','$nama_matpel')");
	}
	
	function hapus($id_matpel){
		mysql_query("delete from matpel where id_matpel='$id_matpel'");
	}
}
?>