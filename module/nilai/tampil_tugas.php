            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data nilai Tugas Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Nilai Tugas Siswa
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NO</th>
											<th class="text-center">Nama Siswa</th>
                                            <th class="text-center">Nama Mata Pelajaran</th>
                                            <th class="text-center">Kelas</th>
											<th class="text-center">Nama Tugas</th>
											<th class="text-center">Nilai</th>
											<th class="text-center">Keterangan</th>
											<th class="text-center" width="10%">Aksi</th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
                                                                        
<?php
$no=1;
include 'databasenilaitugas.php';
$db = new database();
    foreach($db->tampil_data() as $rs)
	{

	?>	
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
											<td><?php echo"$rs[nisn]"; ?></td>
                                            <?php  
                                                $asql=mysql_query("select nama_matpel from n_tugas,jadwal,matpel where n_tugas.id_ntugas='$rs[id_ntugas]' and n_tugas.id_jadwal=jadwal.id_jadwal and jadwal.id_matpel=matpel.id_matpel");
                                                $acount=mysql_num_rows($asql);
                                                $ars=mysql_fetch_array($asql);                                                  
                                            ?>
											<td><?php echo"$rs[id_jadwal]";  ?>
                                                <?php
                                                    echo $ars['nama_matpel'];
                                                ?>                                 
                                            </td>
                                            <td><?php echo"$rs[id_kls]";  ?></td>
											<td><?php echo"$rs[nama_tugas]";  ?></td>
											<td><?php echo"$rs[nilai_tugas]";  ?></td>
											<td><?php echo"$rs[ket]";  ?></td>
											<td class="text-center">
												<a href="./././admin.php?module=input_nilaitugas&act=edit&id_ntugas<?php echo $rs['id_ntugas'] ?>&level=<?php echo $level; ?>"><button type="button" class="btn btn-info">Edit</button></a> 
												<a href="././module/nilai/prosestugas.php?aksi=hapus&id_ntugas=<?php echo $rs['id_ntugas'] ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
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
