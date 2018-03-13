<?php                            
    $sql=mysql_query("select * from siswa where nisn='$uidi'");
    $rs=mysql_fetch_array($sql);

    if(isset($_GET['aksi'])) {
        $aksi = $_GET['aksi'];
    } else {
        $aksi = "";
    }

    switch ($aksi) {
        default:
?>

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
    $qttugas = mysql_query("SELECT * FROM `n_tugas`");

    while($rs = mysql_fetch_array($qttugas))
	{

	?>	
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <?php 
                                                $qdsiswa = mysql_query("SELECT `nama_siswa` FROM `siswa` WHERE `nisn`='$rs[nisn]' ");
                                                $dsiswa = mysql_fetch_array($qdsiswa);
                                            ?>
											<td><?php echo $dsiswa['nama_siswa']; ?></td>
                                            <?php 
                                                $qjadwal = mysql_query("SELECT `id_matpel` FROM `jadwal` WHERE `id_jadwal`='$rs[id_jadwal]' ");
                                                $djadwal = mysql_fetch_array($qjadwal);

                                                $qmapel = mysql_query("SELECT `nama_matpel` FROM `matpel` WHERE `id_matpel`='$djadwal[id_matpel]' ");
                                                $dmapel = mysql_fetch_array($qmapel);
                                            ?>
											<td><?php echo $dmapel['nama_matpel']; ?></td>
                                            <?php 
                                                $qkelas = mysql_query("SELECT `nama_kls` FROM `kelas` WHERE `id_kls`='$rs[id_kls]' ");
                                                $dkelas = mysql_fetch_array($qkelas);
                                            ?>
                                            <td><?php echo $dkelas['nama_kls'];  ?></td>
											<td><?php echo $rs['nama_tugas'];  ?></td>
											<td><?php echo $rs['nilai_tugas'];  ?></td>
											<td><?php echo $rs['ket'];?></td>
											<td class="text-center">
												<a href="././admin.php?module=tampil_tugas&aksi=update&id_ntugas=<?php echo $rs['id_ntugas'];?>"><button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button></a> 
												<a href="././module/nilai/prosestugas.php?aksi=hapus&id_ntugas=<?php echo $rs['id_ntugas'] ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
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
<?php 
        break;

    case "update":
        $qtugas = mysql_query("SELECT * FROM `n_tugas` WHERE `id_ntugas`='$_GET[id_ntugas]' ");
        $dtugas = mysql_fetch_array($qtugas);

        echo'<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Edit Data Siswa</strong></h3>
                </div>
            </div>';
        
        echo'<div class="col-md-12"><form method="post" role="form" action="././module/nilai/prosestugas.php?aksi=update">
            <div class="row">
               
                <table>
                    <input type="hidden" name="id_ntugas" value="'.$_GET['id_ntugas'].'">
                    <tr>
                        <td>
                            <label for="nisn">Nisn</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8">
                            <input type="text" class="form-control" size="50" style="margin-top: 5px;" name="nisn" value="'.$dtugas['nisn'].'" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="id_jadwal">Id Jadwal</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="id_jadwal" value="'.$dtugas['id_jadwal'].'" readonly></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="id_kelas">Id Kelas</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="id_kelas" value="'.$dtugas['id_kls'].'" readonly> </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nilai_tugas">Nilai Tugas</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="nilai_tugas" value="'.$dtugas['nilai_tugas'].'"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ket">Keterangan</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="ket" value="'.$dtugas['ket'].'"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nama_tugas">Nama Tugas</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="nama_tugas" value="'.$dtugas['nama_tugas'].'"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button type="submit" class="btn btn-sm btn-info pull-left" style="margin-top: 5px; margin-left: 1.5rem;">Simpan</button></td>
                    </tr>
                </table>
                    
            </div>               
        </form></div>';
        break;

}
?>