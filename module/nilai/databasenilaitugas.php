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
		$data=mysql_query("SELECT * FROM `jadwal` WHERE `nip`='$_SESSION[id]' ");
		while($d = mysql_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}
	
	function input($id_jadwal,$nisn,$nama_tugas,$nilai_tugas,$ket,$id_kls){
		mysql_query("insert into n_tugas values('','$id_jadwal','$nisn','$nilai_tugas','$ket','$nama_tugas','id_kls')");
	}
	
	function hapus($id_ntugas){
		mysql_query("delete from n_tugas where id_ntugas='$id_ntugas'");
	}
	
	function edit($id_ntugas){
		$data = mysql_query("select * from n_tugas where id_ntugas='$id_ntugas'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update($id_ntugas,$nisn,$id_jadwal,$id_kls,$nilai_tugas,$ket,$nama_tugas){
		mysql_query("update n_tugas set nisn='$nisn',
			id_jadwal='$id_jadwal',
			id_kls='$id_kls',
			nilai_tugas='$nilai_tugas',
			ket='$ket',
			nama_tugas='$nama_tugas' 
			where id_ntugas='$id_ntugas' ");
	}
}
?>