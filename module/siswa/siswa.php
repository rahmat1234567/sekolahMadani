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
                                            <th class="text-center">NIS</th>
                                            <th class="text-center" width="20%">Nama</th>
                                            <th class="text-center">JK</th>
											<th class="text-center" width="10%">Alamat</th>
                                            <th class="text-center" width="15%">Nama Sekolah</th>
											<th class="text-center" width="10%">Nama Ayah</th>
											<th class="text-center" width="10%">Nama Ibu</th>
											<th class="text-center">Telp</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php
$no=1;
$klas=$_GET['kls'];
if($klas=="semua")
{
	$sql=mysql_query("select * from siswa");
}
else
{
	$sql=mysql_query("select * from siswa where id_kls='$_GET[kls]'");	
}

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
										<td><?php echo"$rs[nama_ayah]";  ?></td>
										<td><?php echo"$rs[nama_ibu]";  ?></td>
                                        <td><?php echo"$rs[telp_ortu]";  ?></td>
                                        
										<td class="text-center">
                                            <?php if($level==2){ ?>
										<a href="./././admin.php?module=input_kelas&act=edit_kelas&nisn=<?php echo $rs['nisn'] ?>"><button type="button" class="btn btn-info">Edit</button></a> 
										<a href="././module/kelas/prosessiswa.php?aksi=hapus&nisn=<?php echo $rs['nisn'] ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                                        <?php } ?>
										<a href="./././admin.php?module=detail_siswa&act=details&nisn=<?php echo $rs['nisn'] ?>">
										<button type="button" class="btn btn-warning">Details</button> </a>
										
										</td>
                                        </tr>
<?php
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
