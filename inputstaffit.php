<h1>CRUD OOP UNTUK STAFF IT SMART MADANI</h1>
<h2>Create BY RAHMAT AGLER</h2>

<form action="prosesstaffit.php?aksi=tambah" method="post">

<table>
	<tr>
		<td>Nama Staff IT</td>
		<td><input type="text" name="nama_staffit"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="radio" name="jk" value="L"> Laki-Laki</br>
			<input type="radio" name="jk" value="P"> Perempuan</br>
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="pass_staffit"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat_staffit"></td>
	</tr>
	<tr>
		<td>Telp Staff IT</td>
		<td><input type="text" name="telp_staffit"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>