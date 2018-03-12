            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Ekskul Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Ekskul
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th class="text-center">Senin</th>
                                            <th class="text-center">Selasa</th>
                                            <th class="text-center">Rabu</th>
                                            <th class="text-center">Kamis</th>
                                            <th class="text-center">Jumat</th>
                                            <th class="text-center">Sabtu</th>
                                            <th class="text-center">Minggu</th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
                                                                        
<?php
$no=1;
include 'databaseekskul.php';
$db = new database();
    $sql = mysql_query("SELECT * FROM `ekskul`");
    while($rs = mysql_fetch_array($sql))
	{

	?>	
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <?php 
                                                $qdsiswa = mysql_query("SELECT `nama_siswa` FROM `siswa` WHERE `nisn`='$rs[nisn]' ");
                                                $dsiswa = mysql_fetch_array($qdsiswa);
                                            ?>
											<td><?php echo $dsiswa['nama_siswa'];  ?></td>
                                            <?php 
                                                $qjadwal = mysql_query("SELECT `id_matpel` FROM `jadwal` WHERE `id_jadwal`='$rs[id_jadwal]' ");
                                                $djadwal = mysql_fetch_array($qjadwal);

                                                $qmapel = mysql_query("SELECT `nama_matpel` FROM `matpel` WHERE `id_matpel`='$djadwal[id_matpel]' ");
                                                $dmapel = mysql_fetch_array($qmapel);
                                            ?>
                                            <td><?php echo $dmapel['nama_matpel'];?></td>
                                            <?php 
                                                $qkelas = mysql_query("SELECT `nama_kls` FROM `kelas` WHERE `id_kls`='$rs[id_kls]' ");
                                                $dkelas = mysql_fetch_array($qkelas);
                                            ?>
											<td><?php echo $dkelas['nama_kls']; ?></td>
											<td>
                                                <?php  
                                                    echo ($rs['nilai_uh1'] == '0' ? '' : '<input type="text" class="form-control" name="uh_1" value="Nilai UH 1: '.$rs['nilai_uh1'].'" readonly>');   
                                                    echo ($rs['nilai_uh2'] == '0' ? '' : '<input type="text" class="form-control" name="uh_2" value="Nilai UH 2: '.$rs['nilai_uh2'].'" readonly>');
                                                    echo ($rs['nilai_uh3'] == '0' ? '' : '<input type="text" class="form-control" name="uh_3" value="Nilai UH 3: '.$rs['nilai_uh3'].'" readonly>');
                                                    echo ($rs['nilai_uh4'] == '0' ? '' : '<input type="text" class="form-control" name="uh_3" value="Nilai UH 4: '.$rs['nilai_uh4'].'" readonly>');
                                                    echo ($rs['nilai_uh5'] == '0' ? '' : '<input type="text" class="form-control" name="uh_3" value="Nilai UH 5: '.$rs['nilai_uh5'].'" readonly>');
                                                    echo ($rs['nilai_uh6'] == '0' ? '' : '<input type="text" class="form-control" name="uh_3" value="Nilai UH 6: '.$rs['nilai_uh6'].'" readonly>');
                                                    echo ($rs['nilai_uh7'] == '0' ? '' : '<input type="text" class="form-control" name="uh_3" value="Nilai UH 7: '.$rs['nilai_uh7'].'" readonly>');
                                                    echo ($rs['nilai_uh8'] == '0' ? '' : '<input type="text" class="form-control" name="uh_3" value="Nilai UH 8: '.$rs['nilai_uh8'].'" readonly>');
                                                ?>
                                            </td>
											<td><?php echo $rs['ket_uh'];?></td>
											<td class="text-center">
												<a href="./././admin.php?module=tampil_ulangan&aksi=update&id_nuh=<?php echo $rs['id_nuh'];?>"><button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button></a> 
												<a href="././module/nilai/prosesulangan.php?aksi=hapus&id_nuh=<?php echo $rs['id_nuh'] ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
											</td>
                                        </tr>
	<?php
}
?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
