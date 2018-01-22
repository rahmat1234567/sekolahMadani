<?php
include 'database.php';
$db = new database();
?>

<h1>CRUD OOP UNTUK MATPEL SMART MADANI</h1>
<h2>Create BY RAHMAT AGLER</h2>

<a href="input.php">Silahkan Input Data</a>
<table border="2">
	<tr>
		<th>No</th>
		<th>Matpel</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama_matpel']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="hapus.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>