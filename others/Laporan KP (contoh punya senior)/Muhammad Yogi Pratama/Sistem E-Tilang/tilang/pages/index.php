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


<?php include "header.php"?>
	
<body class="body">
<?php include "navigasi.php"; ?>

<br> <br>
<table id="table" align="center" width="80%" border="3" cellspacing="0" style="height:100%;"><tbody>
<thead>

<tr><td class="head" rowspan="2" align="center">No</td>
	<td class="head" rowspan="2" align="center">Tanggal </td>
	<td class="head" rowspan="2" width="6%" align="center">No. BA</td>
	<td class="head" rowspan="2" width="7%" align="center">No. Reg</td>
	<td class="head" rowspan="2" align="center">No. Tilang</td>
	<td class="head" rowspan="2" align="center">Nama Pelanggar</td>
	<td class="head" rowspan="2" align="center">Pasal</td>
	<td class="th" colspan="3" align="center">Putusan</td>
</tr>

<tr class="head"><td width="13%" align="center" >Denda</td>
	<td width="10%" align="center" >Biaya Perkara</td>	
	<td width="7%" align="center" >Subsider (Kurungan)</td>
</tr>
 
<?php
	include "../config/koneksicoba.php";
    $query = mysql_query("SELECT a.tanggal, a.noba, a.noreg, a.notilang, a.namapelanggar,
	a.pasal, b.denda, b.biayaperkara, b.subsider FROM daftarnama a, putusan b WHERE 
	a.notilang=b.notilang;");

    $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>	
<tr class="genap"><td class="genap" rowspan="1" align="center" ><?php echo $no; ?></td>
	<td rowspan="1" align="center"><?php echo date('d-m-Y', strtotime($data['tanggal'])) ?></td>
	<td rowspan="1" align="center"><?php echo $data['noba']; ?></td>
	<td rowspan="1" align="center"><?php echo $data['noreg']; ?></td>
	<td rowspan="1" align="center"><?php echo $data['notilang']; ?></td>
	<td rowspan="1" align="center"><?php echo $data['namapelanggar']; ?></td>
	<td rowspan="1" align="center"><?php echo $data['pasal']; ?></td>
	<td rowspan="1" align="center">Rp. <?php echo $data['denda']; ?></td>
	<td rowspan="1" align="center">Rp. <?php echo $data['biayaperkara']; ?></td>
	<td rowspan="1" align="center"><?php echo $data['subsider']; ?></td>
</tr>
    <?php
        $no++;
    }
    ?>
	 </thead>
    </tbody>
</table>
<br><br><br>
</body>

<?php
include "footer.php";
?> 
</html>