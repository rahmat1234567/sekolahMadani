<?php
include 'databasesekolah.php';
$db = new database();
?>

<h1>CRUD OOP UNTUK SEKOLAH SMART MADANI</h1>
<h2>Create BY RAHMAT AGLER</h2>

<form action="prosessekolah.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id_sklh']) as $d){
	?>
	<table>
	<tr>
		<td>Nama Sekolah</td>
		<td>
			<input type="hidden" name="id_sklh" value="<?php echo $d['id_sklh'] ?>">
			<input type="text" name="nama_sklh" value="<?php echo $d['nama_sklh'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat Sekolah</td>
		<td><input type="text" name="alamat_sklh" value="<?php echo $d['alamat_sklh'] ?>"></td>
	</tr>
	<tr>
		<td>Telp Sekolah</td>
		<td><input type="text" name="telp_sklh" value="<?php echo $d['telp_sklh'] ?>"></td>
	</tr>
	<tr>
		<td>Jumlah Siswa</td>
		<td><input type="text" name="jmlh_siswa" value="<?php echo $d['jmlh_siswa'] ?>"></td>
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