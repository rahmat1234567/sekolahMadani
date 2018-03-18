<table id="table" border="0" width="100%" cellspacing="0" height="70%">
<tr>

	<td rowspan="2" class="div"  align="left"><a href="http://pn-jakartabarat.go.id/"><img src="../img/home1.png" width="80" height="80" border="0" title="Kembali Ke Website Pengadilan Jakarta Barat"></a></td>
	
	<td align="center" width="20%" rowspan="2" class="div" ><form method="POST" action="carapembayaran.php">
		<button id="button" type="submit">Tata Cara Pembayaran</button></form>
	</td>
	
	<td width="35%" colspan="4" align="center" class="div">
		<span  style="font-size:20px;">&nbsp;<strong>Pencarian Perkara Tilang</strong></span>
	</td>

	<td align="center" width="20%" rowspan="2" class="div" ><form method="POST" action="index.php">
		<button id="button"  type="submit">Lihat Seluruh Data</button></form>
	</td>
	
	<td align="center" width="15%" rowspan="2" class="div" ><form action="https://pn-jakartabarat.go.id/tilang/arsip/" method="POST">
		<button id="button" type="submit" title="Arsip Perkara Tahun ini" >Arsip Perkara</button></form>
	
	</td>
		
</tr>

<tr>
	<td id="div" colspan="4" align="center" style="color:black">
	<form method="POST" action="search.php">
		&nbsp;<input id="field" name="keyword" class="search" type="text" placeholder="Silakan Pilih Kategori"required disabled></input>
		<select id="cb" class="search" onChange="cek_kategori();" name="cb">
			<option value="" selected disabled>-- Pilih Ketegori --</option>
			<option value="notilang">No. Tilang</option>
			<option value="nama">Nama</option>
			<option value="tanggal">Tanggal</option>
		</select>
				<button id="tombol" name="cari" class="button" type="submit" value="cari" disabled> Cari</button>
	</form>
	 
	</td>
</tr>
</table>