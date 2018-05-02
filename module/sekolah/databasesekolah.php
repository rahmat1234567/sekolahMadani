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
	
	function input($id_sklh,$nama_sklh,$alamat_sklh,$telp_sklh,$email_sklh,$luas_sklh,$jmlh_ruang_kls,$laboratorium,$musholla,$aula,$perpustakaan,$lap_basket,$lap_sepakbola){
		mysql_query("insert into sekolah values('$id_sklh','$nama_sklh','$alamat_sklh','$telp_sklh','$email_sklh','','$luas_sklh','$jmlh_ruang_kls','$laboratorium','$musholla','$aula','$perpustakaan','$lap_basket','$lap_sepakbola','','')");
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
	
	function update($id_sklh,$nama_sklh,$alamat_sklh,$telp_sklh,$email_sklh,$luas_sklh,$jmlh_ruang_kls,$laboratorium,$musholla,$aula,$perpustakaan,$lap_basket,$lap_sepakbola,$lng,$lat){
		mysql_query("update sekolah set nama_sklh='$nama_sklh',
		 alamat_sklh='$alamat_sklh',
		 telp_sklh='$telp_sklh',
		 jmlh_siswa='', 
		 email_sklh='$email_sklh', 
		 luas_sklh='$luas_sklh', 
		 jmlh_ruang_kls='$jmlh_ruang_kls', 
		 laboratorium='$laboratorium',
		 musholla='$musholla', 
		 aula='$aula', 
		 perpustakaan='$perpustakaan', 
		 lap_basket='$lap_basket', 
		 lap_sepakbola='$lap_sepakbola', 
		 lng='$lng', 
		 lat='$lat' 
		 where id_sklh='$id_sklh'");
	}
}
?>