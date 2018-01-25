<?php
include 'database.php';
$db = new database();
?>

<h1>CRUD OOP UNTUK MATPEL SMART MADANI</h1>
<h2>Create BY RAHMAT AGLER</h2>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id_matpel']) as $d){
	?>
	<table>
	<tr>
		<td>Nama Mata Pelajaran</td>
		<td>
			<input type="hidden" name="id_matpel" value="<?php echo $d['id_matpel'] ?>">
			<input type="text" name="nama_matpel" value="<?php echo $d['nama_matpel'] ?>">
		</td>
		<tr>
			<td></td>
			<td><input type="submit" value="simpan"></td>
		</tr>
	</table>
<?php
}
?>
</form>