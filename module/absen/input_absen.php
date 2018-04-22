<?php 
    if(isset($_POST['absval']) && isset($_POST['id_kelas'])) {
    	include "../../config/conn.php";
    	$sql = "INSERT INTO `data_absensi` (`nip`, `nisn`, `id_kls`, `tgl`, `jam`, `keterangan`) VALUES ";

    	// data kelas
    	$id_kelas = $_POST['id_kelas'];
    	$nip = $_POST['nip'];

    	// tanggal sekarang
		$currentDate = date("Y-m-d");      
		// jam sekarang
		$currentTime = date("H:i:s");
		$editTime = strtotime("+1 day +5 hour +0 minutes +0 seconds", strtotime($currentTime));
		$jam = date('H:i:s', $editTime);

        for($i = 0; $i < sizeof($_POST['absval']); $i++) {
            $nisn = $_POST['nisn'][$i];
            $keterangan = $_POST['absval'][$i];

            $sql .= "('".$nip."', '".$nisn."', '".$id_kelas."', '".$currentDate."', '".$jam."', '".$keterangan."'),";
        }
        $sql = rtrim($sql, ', ');
        mysql_query($sql);
        //echo $sql;
        header('location: http://localhost/smsku/sekolahMadani/admin.php?module=tampil_data_absen');
    }
?>