<?php
include 'databasestaffit.php';
$db = new database();
?>
<h1>CRUD OOP UNTUK STAFF IT SMART MADANI</h1>
<h2>Create BY RAHMAT AGLER</h2>

<form action="prosesstaffit.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['nik']) as $d){
	?>
	<table>
	<tr>
		<td>Nama Staff IT</td>
		<td>
			<input type="hidden" name="nik" value="<?php echo $d['nik'] ?>">
			<input type="text" name="nama_pgw" value="<?php echo $d['nama_pgw'] ?>">
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
			<input type="text" name="pass_pgw">
			<input type="hidden" name="pass_lama" value="<?php echo $d['pass_pgw'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat_pgw" value="<?php echo $d['alamat_pgw'] ?>"></td>
	</tr>
	<tr>
		<td>Telp Pegawai IT</td>
		<td><input type="text" name="telp_pgw" value="<?php echo $d['telp_pgw'] ?>"></td>
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