            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Sekolah</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Sekolah
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Kode</th>
                                            <th class="text-center">Nama Sekolah</th>
                                            <th class="text-center">Alamat</th>
											<th class="text-center">Telp</th>
											<th class="text-center">Jumlah Siswa</th>
                                            <th class="text-center">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$no=1;
include 'databasesekolah.php';
$db = new database();
	$sql=mysql_query("select * from sekolah");

	
    foreach($db->tampil_data() as $rs)
	{
?>                                        <tr class="odd gradeX">
                                            <td><?php echo"$rs[id_sklh]";  ?></td>
                                            <td ><?php echo"$rs[nama_sklh]";  ?></td>
                                            <td ><?php echo"$rs[alamat_sklh]";  ?></td>
											<td ><?php echo"$rs[telp_sklh]";  ?></td>
											<td ><?php echo"$rs[jmlh_siswa]";  ?></td>

                                        <td class="text-center"><a href="./././admin.php?module=input_sekolah&act=edit_sekolah&id_sklh=<?php echo $rs['id_sklh'] ?>"><button type="button" class="btn btn-info">Edit</button> <a href="././module/sekolah/prosessekolah.php?aksi=hapus&id_sklh=<?php echo $rs['id_sklh'] ?>"><button type="button" class="btn btn-danger">Hapus</button></a></td>

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
