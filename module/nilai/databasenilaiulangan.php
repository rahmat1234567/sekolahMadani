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
		$data=mysql_query("select * from n_ulanganharian");
		while($d = mysql_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}
	
	function input($nisn,$nilai_uh1,$ket_uh){
		mysql_query("insert into n_ulanganharian values('','$id_jadwal','$nisn','$id_kls','$nilai_uh1','$nilai_uh2','$nilai_uh3','$nilai_uh4','$nilai_uh5','$nilai_uh6','$nilai_uh7','$nilai_uh8','$ket_uh')");
	}
	
	function hapus($id_nuh){
		mysql_query("delete from n_ulanganharian where id_nuh='$id_nuh'");
	}
	
	function edit($id_nuh){
		$data = mysql_query("select * from staffit where id_staffit='$id_staffit'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update($nisn,$nilai_uh1,$ket_uh){
		mysql_query("update n_ulanganharian set nisn='$nisn',nilai_uh1='$nilai_uh1',nilai_uh2='$nilai_uh2',nilai_uh3='$nilai_uh3',nilai_uh4='$nilai_uh4',nilai_uh5='$nilai_uh5',nilai_uh6='$nilai_uh6',nilai_uh7='$nilai_uh7',nilai_uh8='$nilai_uh8',ket_uh='$ket_uh' where id_nuh='$id_nuh'");
	}
}
?>