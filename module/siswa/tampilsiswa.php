<?php
include 'databasesiswa.php';
$db = new database();
?>

<h1>CRUD OOP UNTUK GURU SMART MADANI</h1>
<h2>Create BY RAHMAT AGLER</h2>

<a href="inputsiswa.php">Silahkan Input Data</a>
<table border="2">
	<tr>
		<th>NO</th>
		<th>NIS</th>
		<th>Nama SISWA</th>
		<th>Gender</th>
		<th>Alamat</th>
		<th>Nama Sekolah</th>
		<th>KELAS</th>
		<th>NAMA AYAH</th>
		<th>NAMA IBU</th>
		<th>STATUS AKUN</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nis']; ?></td>
		<td><?php echo $x['nama_siswa']; ?></td>	
		<td><?php echo $x['jk']; ?></td>
		<td><?php echo $x['alamat_siswa']; ?></td>
		<td><?php echo $x['id_sklh']; ?></td>
		<td><?php echo $x['id_kls']; ?></td>
		<td><?php echo $x['nama_ayah']; ?></td>
		<td><?php echo $x['nama_ibu']; ?></td>
		<td><?php echo $x['status_akun']; ?></td>
		<td>
			<a href="editsiswa.php?nis=<?php echo $x['nis']; ?>&aksi=edit">Edit</a>
			<a href="prosessiswa.php?nis=<?php echo $x['nis']; ?>&aksi=hapus">Hapus</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>