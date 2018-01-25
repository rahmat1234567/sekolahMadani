<?php
include 'databaseguru.php';
$db = new database();
?>

<h1>CRUD OOP UNTUK SEKOLAH SMART MADANI</h1>
<h2>Create BY RAHMAT AGLER</h2>

<form action="prosesguru.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['nip']) as $d){
	?>
	<table>
	<tr>
		<td>NIP</td>
		<td>
			<input type="text" name="nip" value="<?php echo $d['nip'] ?>">
		</td>
	</tr>
	<tr>
		<td>Nama Guru</td>
		<td>
			<input type="text" name="nama_guru" value="<?php echo $d['nama_guru'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat Guru</td>
		<td><input type="text" name="alamat_guru" value="<?php echo $d['alamat_guru'] ?>"></td>
	</tr>
	<tr>
		<td>Telp Guru</td>
		<td><input type="text" name="telp_guru" value="<?php echo $d['telp_guru'] ?>"></td>
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