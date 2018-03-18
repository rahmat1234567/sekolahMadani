			<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Siswa
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                           <form method="post" role="form" action="././module/prosesabsen.php?aksi=tambah">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NIS</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">No Telepon</th>
                                            <th class="text-center">Keterangan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$no=1;
$tg=date("d-m-Y");
	$sql=mysql_query("select * from siswa where id_kls='$_GET[id_kelas]' ");
	while($rs=mysql_fetch_array($sql)){
	$sqla=mysql_query("select * from absensi where id_kls='$rs[id_kls]' and tgl='$_GET[tanggal]' and jam='$_GET[jam]'");
	$rsa=mysql_fetch_array($sqla);
	$conk=mysql_num_rows($sqla);
	$sqlw=mysql_query("select * from kelas where id_kls='$rs[id_kls]'");
	$rsw=mysql_fetch_array($sqlw);
	$sqlb=mysql_query("select * from sekolah where id_sklh='$rsw[id_sklh]'");
	$rsb=mysql_fetch_array($sqlb);

?>                                        <tr class="odd gradeX">
                                            <input type="hidden" name="id_jadwal" value="<?php echo $_GET['id_jadwal']; ?>">
                                            <input type="hidden" name="id_kelas" value="<?php echo $_GET['id_kelas']; ?>">
                                            <?php 
                                                if(isset($_GET['tanggal'])) {
                                                    echo'<input type="hidden" name="tanggal" value="'.$_GET['tanggal'].'">';
                                                }
                                            ?>
                                            <input type="hidden" name="jam" value="<?php echo $_GET['jam']; ?>">
                                            <td><?php echo"$rs[nisn]"; ?></td>
                                            <td><?php echo"$rs[nama_siswa]"; ?></td>
<?php
if($rs['jk']=="L"){
?>
                                            <td class="text-center">Laki - Laki</td>
<?php
}else{
?>
                                            <td class="text-center" >Perempuan</td>
<?php
}
?>

                                            <td><?php echo"$rs[alamat_siswa]";  ?></td>
                                            <td><?php echo"$rs[telp_ortu]";  ?></td>
                                            <td class="text-center">
                                                                                    <div class="form-group">

<?php  
if($conk==0){
?>                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="A"  >A
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="I">I
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="S">S
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="M" >M
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="N" checked>N
                                            </label>


<?php } ?>

<?php  
if($rsa['ket']=="A"){
?>                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="A" checked >A
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="I">I
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="S">S
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="M" >M
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="N" >N
                                            </label>


<?php } ?>
<?php
if($rsa['ket']=="I"){
?>                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="A"  >A
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="I" checked>I
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="S">S
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="M" >M
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="N" >N
                                            </label>


<?php } ?>
<?php
if($rsa['ket']=="S"){
?>                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="A"  >A
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="I" >I
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="S" checked>S
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="M" >M
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="N" >N
                                            </label>


<?php } ?>
<?php
if($rsa['ket']=="M"){
?>                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="A"  >A
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="I" >I
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="S" >S
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="M" checked>M
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="N" >N
                                            </label>


<?php } ?>
<?php
if($rsa['ket']=="N"){
?>                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="A"  >A
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="I" >I
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="S" >S
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="M" >M
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>[]" value="N" checked >N
                                            </label>


<?php } ?>


                                        </div>

                                            </td>

                                        </tr>
<?php
}
?>
                                    </tbody>
                                </table>
                                        <button type="submit" class="btn btn-success">SImpan Data</button>

</form>
                            </div>
                            <!-- /.table-responsive -->
<br>
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
