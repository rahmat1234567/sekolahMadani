            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Siswa
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Foto</th>
                                            <th class="text-center">NIS</th>
                                            <th class="text-center" width="20%">Nama</th>
                                            <th class="text-center">JK</th>
											<th class="text-center" width="10%">Alamat</th>
                                            <th class="text-center" width="15%">Nama Sekolah</th>
                                            <th class="text-center">Kelas</th>
											<th class="text-center" width="10%">Nama Ayah</th>
											<th class="text-center" width="10%">Nama Ibu</th>
											<th class="text-center">Telp</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php

if(isset($_POST['hapusin'])){
    $nisn    = $_POST['nisn'];
    $hapusinxx  = mysql_query("delete from siswa where nisn='$nisn'");
}


$no=1;
$klas=$_GET['kls'];
if($klas=="semua")
{
	$sql=mysql_query("select * from siswa");
}
else
{
	$sql=mysql_query("select * from siswa where id_sklh='$klas'");	
}
    $noxxx = 1;
	while($rs=mysql_fetch_array($sql))
	{
		$sqlw=mysql_query("select * from kelas where id_kls='$rs[id_kls]'");
		$rsw=mysql_fetch_array($sqlw);
		$sqlb=mysql_query("select * from sekolah where id_sklh='$rsw[id_sklh]'");
		$rsb=mysql_fetch_array($sqlb);

//if($_SESSION['level']=="admin_guru"){

/*
}else{*/
?>	
                                        <tr class="odd gradeX">
                                            <td><?php 
                                                if($rs['foto_siswa']==""){
                                                    echo "<img src='assets/img/default.jpg' alt='' width='60px'/>";
                                                }
                                                else{
                                                    echo "<img src='assets/img/".$rs['foto_siswa']."' alt='' width='60px'/>";
                                                }

                                            ?></td>
                                            <td><?php echo"$rs[nisn]";  ?></td>
                                            <td><?php echo"$rs[nama_siswa]";  ?></td>
<?php
if($rs['jk']=="L"){
?>
                                            <td class="text-center"><i class="fa fa-male fa-3x"></i></td>
<?php
}else{
?>
                                            <td class="text-center"><i class="fa fa-female fa-3x"> </i></td>
<?php
}
?>
										<td><?php echo"$rs[alamat_siswa]";  ?></td>
                                        <?php 
                                            $kode_sklh=$rs['id_sklh']; 
                                            $dsql=mysql_query("select nama_sklh from sekolah where id_sklh='$kode_sklh'");
                                            $dcount=mysql_num_rows($dsql);
                                            $drs=mysql_fetch_array($dsql);
                                        ?>
										<td><?php echo"$drs[nama_sklh]";  ?></td>

                                        <?php 
                                            $kode_kls=$rs['id_kls']; 
                                            $esql=mysql_query("select nama_kls from kelas where id_kls='$kode_kls'");
                                            $ecount=mysql_num_rows($esql);
                                            $ers=mysql_fetch_array($esql);
                                        ?>
                                        <td><?php echo"$ers[nama_kls]";  ?></td>


										<td><?php echo"$rs[nama_ayah]";  ?></td>
										<td><?php echo"$rs[nama_ibu]";  ?></td>
                                        <td><?php echo"$rs[telp_ortu]";  ?></td>
                                        
										<td class="text-center">
                                            <?php if($level==2){ ?>
										<a href="./././admin.php?module=input_siswa&act=edit&nisn=<?php echo $rs['nisn'] ?>&level=<?php echo $level; ?>"><button type="button" class="btn btn-info">Edit</button></a> 
									       <a data-toggle="modal" data-target="#modalHapus<?php echo $noxxx;?>" class="btn btn-danger" >Hapus</a>
                                        <?php } ?>
										<a href="./././admin.php?module=detail_siswa&act=details&nisn=<?php echo $rs['nisn'] ?>">
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
}
/*}*/
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
