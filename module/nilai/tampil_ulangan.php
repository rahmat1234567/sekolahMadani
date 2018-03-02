            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data nilai Ulangan Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Nilai Ulangan Siswa
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="5%">NO</th>
											<th class="text-center">Nama Siswa</th>
                                            <th class="text-center">Nama Mata Pelajaran</th>
											<th class="text-center">Kelas</th>
											<th class="text-center" style="width: 2px;">Nilai</th>
											<th class="text-center">Keterangan</th>
											<th class="text-center" width="10%">Aksi</th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
                                                                        
<?php
$no=1;
include 'databasenilaiulangan.php';
$db = new database();
    foreach($db->tampil_data() as $rs)
	{

	?>	
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
											<td><?php echo"$rs[nisn]";  ?></td>
											<td><?php echo"$rs[id_jadwal]";  ?></td>
											<td><?php echo"$rs[id_kls]";  ?></td>
											<td>
                                                <?php  
                                                    echo ($rs['nilai_uh1'] == '0' ? '' : '<input type="text" class="form-control" name="uh_1" value="Nilai UH 1: '.$rs['nilai_uh1'].'">');   
                                                    echo ($rs['nilai_uh2'] == '0' ? '' : '<input type="text" class="form-control" name="uh_2" value="Nilai UH 2: '.$rs['nilai_uh2'].'">');
                                                     echo ($rs['nilai_uh3'] == '0' ? '' : '<input type="text" class="form-control" name="uh_3" value="Nilai UH 3: '.$rs['nilai_uh3'].'">');
                                                ?>
                                            </td>
											<td><?php echo"$rs[ket_uh]";  ?></td>
											<td class="text-center">
												<a href="./././admin.php?module=input_nilai&act=edit&id_nuh<?php echo $rs['id_nuh'] ?>&level=<?php echo $level; ?>"><button type="button" class="btn btn-info">Edit</button></a> 
												<a href="././module/nilai/prosesulangan.php?aksi=hapus&id_nuh=<?php echo $rs['id_nuh'] ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
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
