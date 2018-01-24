<?php
include 'databasestaffit.php';
$db = new database();
?>
<h1>CRUD OOP UNTUK STAFF IT SMART MADANI</h1>
<h2>Create BY RAHMAT AGLER</h2>

<form action="prosesstaffit.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id_staffit']) as $d){
	?>
	<table>
	<tr>
		<td>Nama Staff IT</td>
		<td>
			<input type="hidden" name="id_staffit" value="<?php echo $d['id_staffit'] ?>">
			<input type="text" name="nama_staffit" value="<?php echo $d['nama_staffit'] ?>">
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>
			<input type="text" name="pass_staffit">
			<input type="hidden" name="pass_lama" value="<?php echo $d['pass_staffit'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat_staffit" value="<?php echo $d['alamat_staffit'] ?>"></td>
	</tr>
	<tr>
		<td>Telp Staff IT</td>
		<td><input type="text" name="telp_staffit" value="<?php echo $d['telp_staffit'] ?>"></td>
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