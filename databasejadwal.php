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
		$data=mysql_query("select * from jadwal");
		while($d = mysql_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}
	
	function input($nip,$id_matpel,$id_kls,$jam){
		mysql_query("insert into jadwal values('','$jam','id_matpel','$nip','$id_kls')");
	}
	
	function hapus($id_jadwal){
		mysql_query("delete from jadwal where id_jadwal='$id_jadwal'");
	}
	
	function edit($id_jadwal){
		$data = mysql_query("select * from jadwal where id_jadwal='$id_jadwal'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update($nip,$id_matpel,$id_kls,$jam){
		mysql_query("update jadwal set nip='$nip',id_matpel='$id_matpel',id_kls='$id_kls', jam='$jam' where id_jadwal='$id_jadwal'");
	}
}
?>