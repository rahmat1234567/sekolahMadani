<?php
include 'databasestaffit.php';
$db = new database();
?>

<h1>CRUD OOP UNTUK STAFF IT SMART MADANI</h1>
<h2>Create BY RAHMAT </h2>

<a href="inputstaffit.php">Silahkan Input Data</a>
<table border="2">
	<tr>
		<th>No</th>
		<th>Nama Staff IT</th>
		<th>Alamat</th>
		<th>Telp</th>
		<th>ID Sekolah</th>
		<th>Status Akun</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama_staffit']; ?></td>
		<td><?php echo $x['alamat_staffit']; ?></td>
		<td><?php echo $x['telp_staffit']; ?></td>
		<td><?php echo $x['id_sklh']; ?></td>
		<td><?php echo $x['status_akun']; ?></td>
		<td>
			<a href="editstaffit.php?id_staffit=<?php echo $x['id_staffit']; ?>&aksi=edit">Edit</a>
			<a href="prosesstaffit.php?id_staffit=<?php echo $x['id_staffit']; ?>&aksi=hapus">Hapus</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>