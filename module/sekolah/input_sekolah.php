<?php
if($_GET['act']=="input"){
	?>
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Input Data Sekolah</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Sekolah
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="post" role="form" action="././module/sekolah/prosessekolah.php?aksi=tambah">

                                <div class="col-lg-6">
                                            <?php
                                                $ssql=mysql_query("select * from sekolah");
                                                $scount=mysql_num_rows($ssql);
                                                while($srs=mysql_fetch_array($ssql))
                                                {
                                                        $idid=$srs['id_sklh'];
                                                }
                                                $xx = 0;
                                                $xx = $idid + 1;
                                            ?>
                                            <input class="form-control" type="hidden" name="id_sklh" value="<?php echo $xx; ?>">
                                        <div class="form-group">
                                            <label>Kode Sekolah</label>
                                            <p class="form-control"><?php echo $xx; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Sekolah</label>
                                            <input class="form-control" placeholder="Nama sekolah" name="nama_sklh" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat_sklh" rows="3" required="required"></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Telp</label>
                                            <input class="form-control" placeholder="Telp" name="telp_sklh" required>
                                        </div>

                                        
                                        <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                    </form>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           <?php } ?>
           
           
           
           <?php
if($_GET['act']=="edit_sekolah"){
	?>
          <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Data Sekolah</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Sekolah
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                            	$sql=mysql_query("select * from sekolah where id_sklh='$_GET[id_sklh]'");
								$rs=mysql_fetch_array($sql);

?>
                                    <form method="post" role="form" action="././module/sekolah/prosessekolah.php?aksi=update">
<input type="hidden" name="id_sklh" value="<?php echo $_GET['id_sklh'] ?>" />

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kode Sekolah</label>
                                            <input class="form-control" placeholder="Kode" name="id_sklh" value="<?php echo "$rs[id_sklh]"; ?>" disabled>
										</div>
                                        <div class="form-group">
                                            <label>Nama Sekolah</label>
                                            <input class="form-control" placeholder="Nama Sekolah" name="nama_sklh" value="<?php echo "$rs[nama_sklh]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat_sklh" rows="3"><?php echo "$rs[alamat_sklh]"; ?></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Telp</label>
                                            <textarea class="form-control" placeholder="Telp" name="telp_sklh" rows="3"><?php echo "$rs[telp_sklh]"; ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                    </form>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php } ?>
             