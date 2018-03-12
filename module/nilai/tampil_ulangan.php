<?php
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
											<th class="text-center" width="15%">Nilai</th>
											<th class="text-center">Keterangan</th>
											<th class="text-center" width="10%">Aksi</th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
                                                                        
<?php
$no=1;
include 'databasenilaiulangan.php';
$db = new database();
    $sql = mysql_query("SELECT * FROM `n_ulanganharian`");
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
<?php 
        break;

    case "update":
        $qulanganhar = mysql_query("SELECT * FROM `n_ulanganharian` WHERE `id_nuh`='$_GET[id_nuh]' ");
        $dulanganhar = mysql_fetch_array($qulanganhar);

        echo'<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Edit Data Ulangan Harian</strong></h3>
                </div>
            </div>';
        
        echo'<div class="col-md-12"><form method="post" role="form" action="././module/nilai/prosesulangan.php?aksi=update">
            <div class="row">
               
                <table>
                    <input type="hidden" name="id_nuh" value="'.$_GET['id_nuh'].'">
                    <tr>
                        <td>
                            <label for="nisn">Nisn</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8">
                            <input type="text" class="form-control" size="50" style="margin-top: 5px;" name="nisn" value="'.$dulanganhar['nisn'].'" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="id_jadwal">Id Jadwal</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="id_jadwal" value="'.$dulanganhar['id_jadwal'].'" readonly></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="id_kelas">Id Kelas</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="id_kls" value="'.$dulanganhar['id_kls'].'" readonly> </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ket">Keterangan</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="ket_uh" value="'.$dulanganhar['ket_uh'].'"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nama_tugas">Ulangan Harian 1</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="nilai_uh1" value="'.$dulanganhar['nilai_uh1'].'"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nama_tugas">Ulangan Harian 2</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="nilai_uh2" value="'.$dulanganhar['nilai_uh2'].'"></td>
                    </tr>
                     <tr>
                        <td>
                            <label for="nama_tugas">Ulangan Harian 3</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="nilai_uh3" value="'.$dulanganhar['nilai_uh3'].'"></td>
                    </tr>
                     <tr>
                        <td>
                            <label for="nama_tugas">Ulangan Harian 4</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="nilai_uh4" value="'.$dulanganhar['nilai_uh4'].'"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nama_tugas">Ulangan Harian 5</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="nilai_uh5" value="'.$dulanganhar['nilai_uh5'].'"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nama_tugas">Ulangan Harian 6</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="nilai_uh6" value="'.$dulanganhar['nilai_uh6'].'"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nama_tugas">Ulangan Harian 7</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="nilai_uh7" value="'.$dulanganhar['nilai_uh7'].'"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nama_tugas">Ulangan Harian 8</label>
                        </td>
                        <td>:</td>
                        <td class="col-md-8"><input type="text" class="form-control" style="margin-top: 5px;" name="nilai_uh8" value="'.$dulanganhar['nilai_uh8'].'"></td>
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
            