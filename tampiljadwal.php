<?php
include 'databasejadwal.php';
$db = new database();
?>

<h1>CRUD OOP UNTUK JADWAL MATPEL SMART MADANI</h1>
<h2>Create BY RAHMAT </h2>

<a href="inputjadwal.php">Silahkan Input Data</a>
<table border="2">
	<tr>
		<th>No</th>
		<th>NIP</th>
		<th>Mata Pelajaran</th>
		<th>Kelas</th>
		<th>Jam</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nip']; ?></td>
		<td><?php echo $x['id_matpel']; ?></td>
		<td><?php echo $x['id_kls']; ?></td>
		<td><?php echo $x['jam']; ?></td>
		<td>
			<a href="editjadwal.php?id_jadwal=<?php echo $x['id_jadwal']; ?>&aksi=edit">Edit</a>
			<a href="prosesjadwal.php?id_jadwal=<?php echo $x['id_jadwal']; ?>&aksi=hapus">Hapus</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>