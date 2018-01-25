<?php
include 'databasesekolah.php';
$db = new database();
?>

<h1>CRUD OOP UNTUK SEKOLAH SMART MADANI</h1>
<h2>Create BY RAHMAT AGLER</h2>

<a href="inputsekolah.php">Silahkan Input Data</a>
<table border="2">
	<tr>
		<th>No</th>
		<th>Nama Sekolah</th>
		<th>Alamat Sekolah</th>
		<th>Telp</th>
		<th>Jumlah Siswa</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama_sklh']; ?></td>
		<td><?php echo $x['alamat_sklh']; ?></td>
		<td><?php echo $x['telp_sklh']; ?></td>
		<td><?php echo $x['jmlh_siswa']; ?></td>
		<td>
			<a href="editsekolah.php?id_sklh=<?php echo $x['id_sklh']; ?>&aksi=edit">Edit</a>
			<a href="prosessekolah.php?id_sklh=<?php echo $x['id_sklh']; ?>&aksi=hapus">Hapus</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>