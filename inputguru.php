<h1>CRUD OOP UNTUK GURU SMART MADANI</h1>
<h2>Create BY RAHMAT AGLER</h2>

<form action="prosesguru.php?aksi=tambah" method="post">

<table>
	<tr>
		<td>NIP</td>
		<td><input type="text" name="nip"></td>
	</tr>
	<tr>
		<td>Nama Guru</td>
		<td><input type="text" name="nama_guru"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="radio" name="jk" value="L"> Laki-Laki</br>
			<input type="radio" name="jk" value="P"> Perempuan</br>
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="pass_guru"></td>
	</tr>
	<tr>
		<td>Alamat Guru</td>
		<td><input type="text" name="alamat_guru"></td>
	</tr>
	<tr>
		<td>Telp Guru</td>
		<td><input type="text" name="telp_guru"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>