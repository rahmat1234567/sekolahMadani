<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengadilan Negeri Jakarta Barat</title>
    <link rel="stylesheet" href="style.css" />
	<link rel="shortcut icon" href="../img/PNJB.png" />
	<script src="kategori.js"></script>
</head>


<?php 
include "header.php";
include "../config/koneksicoba.php";
 ?>
	
<body class="body">
<?php include "navigasi.php"; ?>

<br>
<p align="right"><b><u><font size="3" face="Arial" color="black">
Klik tombol cetak tersebut untuk bukti data perkara</font></u></b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<table id="table" align="center" width="80%" border="2" cellspacing="0" style="height:100%;"><tbody>
<thead>
<tr><td class="head" rowspan="2" align="center">No</td>
	<td class="head" rowspan="2" align="center">Tanggal </td>
	<td class="head" rowspan="2" align="center">No. Tilang</td>
	<td class="head" rowspan="2" align="center">Nama Pelanggar</td>
	<td class="head" rowspan="2" align="center">Pasal</td>
	<td class="th" colspan="3" align="center">Putusan</td>
	<td class="th" rowspan="2" align="center">Aksi</td>
</tr>

<tr class="head"><td width="13%" align="center" >Denda</td>
	<td width="10%" align="center" >Biaya Perkara</td>	
	<td width="7%" align="center" >Subsider (Kurungan)</td>
</tr>

  <?php 
  //ambil parameter
	$keyword = $_POST['keyword'];
	$cb = $_POST['cb'];
	
	//cek kategori
	if($cb == 'notilang'){
		//query buat search notilang
		$sql = "SELECT a.tanggal, a.notilang, a.namapelanggar,
		a.pasal, b.denda, b.biayaperkara, b.subsider FROM daftarnama a, putusan b WHERE 
		a.notilang=b.notilang and a.notilang LIKE '%$keyword%'";
	}
	else if($cb == 'nama'){
		//query buat search nama
		$sql = "SELECT a.tanggal, a.notilang, a.namapelanggar,
		a.pasal, b.denda, b.biayaperkara, b.subsider FROM daftarnama a, putusan b WHERE 
		a.notilang=b.notilang and a.namapelanggar LIKE '%$keyword%'";
	}
	else if($cb == 'tanggal'){
		//query buat search tanggal
		$sql = "SELECT a.tanggal, a.notilang, a.namapelanggar,
		a.pasal, b.denda, b.biayaperkara, b.subsider FROM daftarnama a, putusan b WHERE 
		a.notilang=b.notilang and a.tanggal LIKE '%$keyword%'";
	}
	// mengecek data
	$q = mysql_query($sql);
	$cek = mysql_num_rows($q);
	//echo $cb . "<br>";
	//echo $sql . "<br>";
	//echo $cek . "<br>";
   // jika data kurang dari 1
   if($cek < 1) {
    ?>
     <tr> <!--muncul peringata bahwa data tidak di temukan-->
      <td colspan="11" align="center" style="color:black; padding:10px;"><b><font size="4" color="red">Data tidak di temukan<br>Mohon cek kembali kata kunci pencarian sesuai kategori yang di pilih</font></b></td>
     </tr>
    <?php
   } else {

   // mengulangi data agar tidak hanya 1 yang tampil
    $no = 1;
   while($data = mysql_fetch_array($q)) {

   ?>
    <tr class="genap">
	<td  rowspan="1" align="center" ><?php echo $no; ?></td>
	<td rowspan="1" align="center"><?php echo ($data['tanggal'] != '0000-00-00') ? date('d-m-Y', strtotime($data['tanggal'])) : ''?></td>
	<td rowspan="1" align="center"><?php echo $data['notilang'] ?></td>
	<td rowspan="1" align="center"><?php echo $data['namapelanggar'] ?></td>
	<td rowspan="1" align="center"><?php echo $data['pasal'] ?></td>
	<td rowspan="1" align="center">Rp. <?php echo $data['denda'] ?></td>
	<td rowspan="1" align="center">Rp. <?php echo $data['biayaperkara'] ?></td>
	<td rowspan="1" align="center"><?php echo $data['subsider'] ?></td>
    <td rowspan="1" align="center">
        <!-- Single button -->
	  <a href="detail_show.php?notilang=<?php echo $data['notilang']  ?>">
	  <button class= "button1">Detail</button></a>
	  &nbsp;
	  <a href="cetak.php?notilang=<?php echo $data['notilang']  ?>" target="blank">
	  <button class= "button1">Cetak</button></a>
      </td>
   </tr>
  <?php 
		 $no++;
  } 
 }
?>
	 </thead>
</table>
<br><br><br>
</body>

<?php
include "footer.php";
?> 
</html>