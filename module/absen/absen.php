            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Absensi Tanggal</strong></h3><?php 
							if($_GET['tanggal']<10){ $rw="0$_GET[tanggal]";}else{ $rw="$_GET[tanggal]"; }
							if($_GET['bulan']<10){ $rc="0$_GET[bulan]";}else{ $rc="$_GET[bulan]";}
							$dt=$rw."-".$rc."-".$_GET['tahun']; 
							echo $dt;
							?> 
                            </h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Siswa <?php 
  							$sqlj=mysql_query("select * from kelas where id_kls='$_SESSION[id_kls]'");
							$rsj=mysql_fetch_array($sqlj);
							echo "Kelas $rsj[nama_kls]";					
							$klas=$_GET['kls'];
$rg=10;
while($rg>0){							
if($_GET['jam']==$rg){
							 ?>

                             <a href="media.php?module=absen&jam=<?php echo $rg; ?>&kls=<?php echo $_GET['kls']; ?>&tanggal=<?php echo $_GET['tanggal']; ?>&bulan=<?php echo $_GET['bulan']; ?>&tahun=<?php echo $_GET['tahun']; ?>" class="navbar-right text-danger">&nbsp; Jam ke <?php echo $rg; ?> &nbsp;</a>
<?php }else{ ?>
                             <a href="media.php?module=absen&jam=<?php echo $rg; ?>&kls=<?php echo $_GET['kls']; ?>&tanggal=<?php echo $_GET['tanggal']; ?>&bulan=<?php echo $_GET['bulan']; ?>&tahun=<?php echo $_GET['tahun']; ?>" class="navbar-right">&nbsp; Jam ke <?php echo $rg; ?> &nbsp;</a>

<?php } ?>

<?php $rg--; } ?>

							 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">


                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NIS</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">No Telepon</th>
                                            <th class="text-center">Nama Sekolah</th>
                                            <th class="text-center">Kelas</th>
                                            <th class="text-center">Keterangan</th>
                                            <th class="text-center">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$no=1;
$tg=date("d-m-Y");
if($klas=="semua"){
	$sql=mysql_query("select * from siswa");
}else{
	$sql=mysql_query("select * from siswa where id_kls='$_GET[kls]'");	
}
	while($rs=mysql_fetch_array($sql)){
	$sqla=mysql_query("select * from absensi where ids='$rs[ids]' and tgl='$dt' and jam='$_GET[jam]'"); //masih ragu
	$rsa=mysql_fetch_array($sqla);
	$conk=mysql_num_rows($sqla);
	
	$sqlw=mysql_query("select * from kelas where id_kls='$rs[id_kls]'");
	$rsw=mysql_fetch_array($sqlw);
	$sqlb=mysql_query("select * from sekolah where id_sklh='$rsw[id_sklh]'");
	$rsb=mysql_fetch_array($sqlb);

?>                                        <tr class="odd gradeX">
                                            <td><?php echo"$rs[nisn]";  ?></td>
                                            <td><?php echo"$rs[nama_siswa]";  ?></td>
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

                                            <td><?php echo"$rs[alamat_siswa]";  ?></td>
                                            <td><?php echo"$rs[tlp_ortu]";  ?></td>
                                            <td><?php echo"$rsb[nama_siswa]";  ?></td>
                                            <td class="text-center"><?php echo"$rsw[nama_siswa]";  ?></td>
                                            
                                                                                    

<?php  
if($conk==0){
?>                                            
                                            <td class="text-center">N</td>


<?php }else{ ?>
<td class="text-center"><?php echo"$rsa[ket]";  ?></td>
<?php } ?>

<?php  
if($rsa['ket']=="A"){
?>                                            

                                        <td class="text-center"><a href="././module/sms.php?ids=<?php echo $rs['nisn'] ?>"><button type="button" class="btn btn-danger">Kirim SMS</button></a></td>


<?php }else{ ?>
<td></td>
<?php } ?>


                                        </tr>
<?php
}
?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Keterangan Absensi</h4>
                                <p>A = Tidak Masuk Tanpa Keterangan</p>
                                <p>I = Tidak Masuk Ada Surat Ijin Atau Pemberitahuan</p>
                                <p>S = Tidak Masuk Ada Surat Dokter Atau Pemberitahuan</p>
                                <p>M = Hadir</p>
                                <p>N = Belum Ada Keterangan Absensi</p>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
