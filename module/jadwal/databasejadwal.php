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

	function tampil_data1($p){
		$data=mysql_query("select * from jadwal where nip='$p'");
		while($d = mysql_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}
	
	function input($nip,$id_matpel,$id_kls,$tgl,$jam){
		mysql_query("insert into jadwal set nip='$nip', id_matpel='$id_matpel', id_kls='$id_kls', tgl='$tgl', jam='$jam', locked='1' ");
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
	
	function update($nip,$id_matpel,$id_kls,$tgl,$jam){
		mysql_query("update jadwal set nip='$nip',id_matpel='$id_matpel',id_kls='$id_kls', tgl='$tgl', jam='$jam', locked='1' where id_jadwal='$id_jadwal'");
	}
}
?>