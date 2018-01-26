<div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Input Data Guru</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Guru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    
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

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>