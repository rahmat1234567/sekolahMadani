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


<?php include "header.php";?>
	
<body class="body">

<table id="table" border="0" width="100%" height="70%" cellspacing="0" style="height:100%;">
<tr>

	<td rowspan="2" class="div"  align="left"><a href="http://pn-jakartabarat.go.id/"><img src="../img/home1.png" width="80" height="80" border="0" title="Kembali Ke Website Pengadilan Jakarta Barat"></a></td>
	
	<td align="center" width="20%" rowspan="2" class="div" ><form method="POST" action="carapembayaran.php">
		<button id="button" type="submit">Tata Cara Pembayaran</button></form>
	</td>
	
	<td width="35%" colspan="4" align="center" class="div">
		<span  style="font-size:20px;">&nbsp;<strong>Pencarian Perkara Tilang</strong></span>
	</td>

	<td align="center" width="20%" rowspan="2" class="div" ><form method="POST" action="index.php">
		<button id="button"  type="submit">Lihat Seluruh Data</button></form>
	</td>
	
	<td align="center" width="15%" rowspan="2" class="div" ><form action="https://pn-jakartabarat.go.id/tilang/arsip/" method="POST">
		<button id="button" type="submit" title="Arsip Perkara Tahun ini" >Arsip Perkara</button></form>
	
	</td>
		
</tr>

<tr>
	<td id="div" colspan="4" align="center" style="color:black">
	<form method="POST" action="search.php">
		&nbsp;<input id="field" name="keyword" class="search" type="text" placeholder="Silakan Pilih Kategori"required disabled></input>
		<select id="cb" class="search" onChange="cek_kategori();" name="cb">
			<option value="" selected disabled>-- Pilih Ketegori --</option>
			<option value="notilang">No. Tilang</option>
			<option value="nama">Nama</option>
			<option value="tanggal">Tanggal</option>
		</select>
				<button id="tombol" name="cari" class="button" type="submit" value="cari" disabled> Cari</button>
	</form>
	 
	</td>
</tr>
<?php include('data_show.php') ?>
<tr  height="50">
	<td width="15"><span>&nbsp;</span></td>
	<td><span>&nbsp;</span></td>
	<td class="th" ><span>Tanggal Sidang</span></td>
    <td class="th" ><span>:</span></td>
    <td class="td" ><span><?php echo ($data[0]['tanggal'] != '0000-00-00') ? date('d-m-Y', strtotime($data[0]['tanggal'])) : ''?></span></td>
</tr>

<tr  height="50">
    <td width="15"><span>&nbsp;</span></td>
	<td><span>&nbsp;</span></td>
	<td class="th" ><span>No. BA (Berita Acara)</span></td>
    <td class="th" ><span>:</span></td>
    <td class="td" ><span><?php echo $data[0]['noba'] ?></span></td>
</tr>
	
<tr  height="50">
    <td width="15"><span>&nbsp;</span></td>
	<td><span>&nbsp;</span></td>
	<td class="th" ><span>No. Reg (Regitrasi) </span></td>
    <td class="th" ><span>:</span></td>
    <td class="td" ><span><?php echo $data[0]['noreg'] ?></span></td>
</tr>
	
<tr height="50">
	<td><span>&nbsp;</span></td>
	<td><span>&nbsp;</span></td>
	<td class="th"><span>No. Tilang</span></td>
	<td class="th"><span>:</span></td>
	<td class="td"><span><?php echo $data[0]['notilang'] ?></span></td>
</tr>

<tr height="50">
	<td><span>&nbsp;</span></td>
	<td><span>&nbsp;</span></td>
	<td class="th"><span>Nama Pelanggar</span></td>
	<td class="th"><span>:</span></td>
	<td class="td"><span><?php echo $data[0]['namapelanggar'] ?></span></td>
</tr>

<tr height="50">
	<td><span>&nbsp;</span></td>
	<td><span>&nbsp;</span></td>
	<td class="th"><span>Pasal</span></td>
	<td class="th"><span>:</span></td>
	<td class="td"><span><?php echo $data[0]['pasal'] ?></span></td>
</tr>

<tr>
	<td><span>&nbsp;</span></td>
	<td><span>&nbsp;</span></td>
	<td class="tr" colspan="3"><span>Putusan</span></td>
</tr>

<tr>
	<td><span>&nbsp;</span></td>
	<td><span>&nbsp;</span></td>
	<td class="tk1" ><span>Denda</span></td>
	<td class="tk2"><span>:</span></td>
	<td class="tk3" ><span>Rp. <?php echo $data[0]['denda'] ?></span></td>
</tr>

<tr>
	<td><span>&nbsp;</span></td>
	<td><span>&nbsp;</span></td>
	<td class="tk4"><span>Subsider<br>(Kurungan)</span></td>
	<td class="tk5"><span>:</span></td>
	<td class="tk6"><span><?php echo $data[0]['subsider'] ?></span></td>
</tr>

<tr>
	<td><span>&nbsp;</span></td>
	<td><span>&nbsp;</span></td>
	<td class="tk7"><span>Biaya Perkara</span></td>
	<td class="tk8"><span>:</span></td>
	<td class="tk9"><span>Rp. <?php echo $data[0]['biayaperkara'] ?></span></td>
</tr>

<tr>
	<td><span>&nbsp;</span></td>
	<td><span>&nbsp;</span></td>
	<td colspan="3" align="left" class="tk10">Klik Link Cetak Tersebut Untuk Bukti Data Perkara
	<a href="cetak.php?notilang=<?php echo $data[0]['notilang'] ?>" target="blank">
	  <button class= "button1">Cetak</button></a></td>
</tr>
</table>
<br><br><br>
</body>

<?php
include "footer.php";
?> 
</html>