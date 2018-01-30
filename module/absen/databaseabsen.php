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
		$data=mysql_query("select * from absensi");
		while($d = mysql_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}
	
	function input($id_kls,$tgl,$jam,$ket){
		mysql_query("insert into absensi values('','$id_kls','$tgl','$jam','$ket')");
	}
	
	function hapus($id_abs){
		mysql_query("delete from absensi where id_abs='$id_abs'");
	}
	
	function edit($nip){
		$data = mysql_query("select * from guru where nip='$nip'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update($nip,$nama_guru,$jk,$pass_guru,$alamat_guru,$telp_guru){
		mysql_query("update guru set nama_guru='$nama_guru',jk='$jk',pass_guru='$pass_guru', alamat_guru='$alamat_guru', telp_guru='$telp_guru' where nip='$nip'");
	}
}
?>
