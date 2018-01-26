<h1>CRUD OOP UNTUK GURU SMART MADANI</h1>
<h2>Create BY RAHMAT AGLER</h2>

<form action="prosessiswa.php?aksi=tambah" method="post">

<table>
	<tr>
		<td>NIS</td>
		<td><input type="text" name="nis"></td>
	</tr>
	<tr>
		<td>Nama Siswa</td>
		<td><input type="text" name="nama_siswa"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="radio" name="jk" value="L"> Laki-Laki</br>
			<input type="radio" name="jk" value="P"> Perempuan</br>
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="pass_siswa"></td>
	</tr>
	<tr>
		<td>Alamat Siswa</td>
		<td><input type="text" name="alamat_siswa"></td>
	</tr>
	<tr>
		<td>Nama Ayah</td>
		<td><input type="text" name="nama_ayah"></td>
	</tr>
	<tr>
		<td>Nama Ibu</td>
		<td><input type="text" name="nama_ibu"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>