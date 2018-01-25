<?php
include 'databasejadwal.php';
$db = new database();
?>
<h1>CRUD OOP UNTUK JADWAL MATPEL SMART MADANI</h1>
<h2>Create BY RAHMAT AGLER</h2>

<form action="prosesjadwal.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id_jadwal']) as $d){
	?>
	<table>
	<tr>
		<td>NIP</td>
		<td><input type="hidden" name="id_jadwal" value="<?php echo $d['id_jadwal'] ?>">
			<input type="text" name="nip" value="<?php echo $d['nip'] ?>">
		</td>
	</tr>
	<tr>
		<td>Mata Pelajaran</td>
		<td><input type="text" name="id_matpel" value="<?php echo $d['id_matpel'] ?>"></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td><input type="text" name="id_kls" value="<?php echo $d['id_kls'] ?>"></td>
	</tr>
	<tr>
		<td>Jam</td>
		<td><input type="text" name="jam" value="<?php echo $d['jam'] ?>"></td>
	</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="simpan"></td>
		</tr>
	</table>
<?php
}
?>
</form>