<?php
include 'databaseguru.php';
$db = new database();
?>

<h1>CRUD OOP UNTUK GURU SMART MADANI</h1>
<h2>Create BY RAHMAT AGLER</h2>

<a href="inputguru.php">Silahkan Input Data</a>
<table border="2">
	<tr>
		<th>No</th>
		<th>NIP</th>
		<th>Nama Guru</th>
		<th>Alamat</th>
		<th>Telp</th>
		<th>Nama Sekolah</th>
		<th>Status Wali Kelas</th>
		<th>Status Akun</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nip']; ?></td>
		<td><?php echo $x['nama_guru']; ?></td>
		<td><?php echo $x['alamat_guru']; ?></td>
		<td><?php echo $x['telp_guru']; ?></td>
		<td><?php echo $x['id_sklh']; ?></td>
		<td><?php echo $x['wk_status']; ?></td>
		<td><?php echo $x['status_akun']; ?></td>
		<td>
			<a href="editguru.php?nip=<?php echo $x['nip']; ?>&aksi=edit">Edit</a>
			<a href="prosesguru.php?nip=<?php echo $x['nip']; ?>&aksi=hapus">Hapus</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>