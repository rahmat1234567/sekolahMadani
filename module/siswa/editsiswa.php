<?php
include 'databasesiswa.php';
$db = new database();
?>

<h1>CRUD OOP UNTUK SEKOLAH SMART MADANI</h1>
<h2>Create BY RAHMAT AGLER</h2>

<form action="prosessiswa.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['nis']) as $d){
	?>
	<table>
	<tr>
		<td>NIS</td>
		<td>
			<input type="text" name="nis" value="<?php echo $d['nis'] ?>">
		</td>
	</tr>
	<tr>
		<td>Nama Siswa</td>
		<td>
			<input type="text" name="nama_siswa" value="<?php echo $d['nama_siswa'] ?>">
		</td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="radio" name="jk" value="L"> Laki-Laki</br>
			<input type="radio" name="jk" value="P"> Perempuan</br>
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>
			<input type="text" name="pass_siswa">
			<input type="hidden" name="pass_lama" value="<?php echo $d['pass_siswa'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat Siswa</td>
		<td><input type="text" name="alamat_siswa" value="<?php echo $d['alamat_siswa'] ?>"></td>
	</tr>
	<tr>
		<td>Nama Ayah</td>
		<td><input type="text" name="nama_ayah" value="<?php echo $d['nama_ayah'] ?>"></td>
	</tr>
	<tr>
		<td>Nama Ibu</td>
		<td><input type="text" name="nama_ibu" value="<?php echo $d['nama_ibu'] ?>"></td>
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