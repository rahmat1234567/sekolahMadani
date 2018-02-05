<?php
if($_GET['act']=="input"){
	?>
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Input Data Mata Pelajaran</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Mata Pelajaran
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="post" role="form" action="././module/matpel/prosesmatpel.php?aksi=tambah">

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Mata Pelajaran</label>
                                            <input class="form-control" placeholder="Nama Mata Pelajaran" name="nama_matpel">
                                        </div>
										
										<button type="submit" value"simpan" class="btn btn-default">Submit Button</button>
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
if($_GET['act']=="edit_matpel"){
	?>
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Edit Data Mata Pelajaran</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Mata Pelajaran
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                            	$sql=mysql_query("select * from matpel where id_matpel='$_GET[id_matpel]'");
								$rs=mysql_fetch_array($sql);
?>
                                    <form method="post" role="form" action="././module/matpel/prosesmatpel.php?aksi=update">
<input type="hidden" name="nip" value="<?php echo $_GET['id_matpel'] ?>" />
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Mata Pelajaran</label>
                                            <input class="form-control" placeholder="Nama Mata Pelajaran" name="nama_matpel" value="<?php echo "$rs[nama_matpel]"; ?>">
                                        </div>

                                        <button type="submit" value="Simpan" class="btn btn-default">Submit Button</button>
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
             