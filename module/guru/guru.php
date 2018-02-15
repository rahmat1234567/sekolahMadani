            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Guru</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Guru
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th class="text-center">FOTO</th>
											<th class="text-center">NIP</th>
                                            <th class="text-center" width="40%">Nama</th>
                                            <th class="text-center">JK</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Nama Sekolah</th>
                                            <th class="text-center">Status Wali Kelas</th>
                                            <th class="text-center">Status Akun</th>
                                            <?php if($level==2){ ?>
                                            <th class="text-center">Aksi</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php
if(isset($_POST['hapusin'])){
    $nip    = $_POST['nip'];
    $hapusinxx  = mysql_query("delete from guru where nip='$nip'");
}


$no=1;
$klas=$_GET['kls'];
if($klas=="semua")
{
	$sql=mysql_query("select * from guru");
}
else
{
	$sql=mysql_query("select * from guru where nip='$klas'");	
}
    $noxxx = 1;
	while($rs=mysql_fetch_array($sql))
	{

//if($level==1 and $level==2){

    ?>                                        
											<tr class="odd gradeX">
												<td><?php echo"$rs[foto_guru]";  ?></td>
                                                <td><?php echo"$rs[nip]";  ?></td>
                                                <td><?php echo"$rs[nama_guru]";  ?></td>
    <?php
    if($rs['jk']=="L"){
    ?>
                                                <td class="text-center">Laki - Laki</td>
    <?php
    }else{
    ?>
                                                <td class="text-center">Perempuan</td>
    <?php
    }
    ?>
                                                <td><?php echo"$rs[alamat_guru]";  ?></td>
                                                <?php $kode_sklh=$rs['id_sklh']; 
                                                    $sqlzz=mysql_query("select nama_sklh from sekolah where id_sklh='$kode_sklh'");
                                                    $countzz=mysql_num_rows($sqlzz);
                                                    $rszz=mysql_fetch_array($sqlzz);
                                                ?>
                                                <td><?php echo"$rszz[nama_sklh]";  ?></td>

                                                <?php if($rs['wk_status']==1){
                                                    $kode_wk=$rs['nip'];                   
                                                    $sqlzzz=mysql_query("
                                                        select nama_kls from kelas, walikelas where walikelas.nip=$kode_wk and kelas.id_kls=walikelas.id_kls
                                                    ");
                                                    $countzzz=mysql_num_rows($sqlzzz);
                                                    $rszzz=mysql_fetch_array($sqlzzz);
                                                    $wkwk=$rszzz['nama_kls'];
                                                }
                                                else{
                                                    $wkwk="-";
                                                } ?>
                                                <td><?php echo"$wkwk";  ?></td>
    <?php
    if($rs['status_akun']!=0){
    ?>
                                                <td class="text-center">Aktif</td>
    <?php
    }else{
    ?>
                                                <td class="text-center">Tidak Aktif</td>
    <?php
    }
    ?>                                            
                                               <?php if($level==2){ ?> 
                                             <td class="text-center"> 
												<a href="./././admin.php?module=input_guru&act=edit&nip=<?php echo $rs['nip'] ?>&level=<?php echo $level; ?>"><button type="button" class="btn btn-info">Edit</button></a> 
												<a data-toggle="modal" data-target="#modalHapus<?php echo $noxxx;?>" class="btn btn-danger" >Hapus</a>
												<?php } ?>
												<a href="./././admin.php?module=detail_guru&act=details&nip=<?php echo $rs['nip'] ?>">
												<button type="button" class="btn btn-warning" 
												>Details</button> </a>
											</td>
                                            </tr>

				<!-- Modal -->
<div class="modal fade" id="modalHapus<?php echo $noxxx;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="post">
            <input type="hidden" name="nisn" value="<?php echo $rs['nisn'];?>">
      <div class="modal-header bg-default">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger">Anda yakin akan menghapus data siswa <?php echo $rs['nama_siswa'] ?> ?</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="hapusin">Ya! Hapus Data</button>
      </div>
  </form>
    </div>
  </div>
</div>

<?php
$noxxx++;
//}
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
