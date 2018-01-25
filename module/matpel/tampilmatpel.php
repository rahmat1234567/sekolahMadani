<?php
include 'database.php';
$db = new database();
?>

<h1>CRUD OOP UNTUK MATPEL SMART MADANI</h1>
<h2>Create BY RAHMAT AGLER</h2>

<a href="inputmatpel.php">Silahkan Input Data</a>
<table border="2">
	<tr>
		<th>No</th>
		<th>Mata Pelajaran</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama_matpel']; ?></td>
		<td>
			<a href="editmatpel.php?id_matpel=<?php echo $x['id_matpel']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id_matpel=<?php echo $x['id_matpel']; ?>&aksi=hapus">Hapus</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>