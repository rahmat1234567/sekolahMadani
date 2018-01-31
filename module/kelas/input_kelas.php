<?php
if($_GET['act']=="input"){
	?>
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Input Data Kelas</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="post" role="form" action="././module/kelas/proseskelas.php?aksi=tambah">

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kode Kelas</label>
                                            <input  value="" class="form-control" placeholder="Kode Kelas" name="id_kls" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kelas</label>
                                            <input class="form-control" placeholder="Nama kelas" name="nama_kls">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Wali Kelas</label>
                                            <textarea class="form-control" placeholder="Nama Wali Kelas" name="id_wk" rows="3"></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Nama Sekolah</label>
                                            <textarea class="form-control" placeholder="Nama Sekolah" name="id_sklh" rows="3"></textarea>
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
           
           
           
           <?php
if($_GET['act']=="edit_kelas"){
	?>
          <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Data Kelas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                            	$sql=mysql_query("select * from kelas where id_kls='$_GET[id_kls]'");
								$rs=mysql_fetch_array($sql);

?>
                                    <form method="post" role="form" action="././module/kelas/proseskelas.php?aksi=update">
<input type="hidden" name="id_kls" value="<?php echo $_GET['id_kls'] ?>" />

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kode Kelas</label>
                                            <input class="form-control" placeholder="Kode Kelas" name="id_kls" value="<?php echo "$rs[id_kls]"; ?>" disabled>
										</div>
                                        <div class="form-group">
                                            <label>Nama Kelas</label>
                                            <input class="form-control" placeholder="Nama kelas" name="nama_kls" value="<?php echo "$rs[nama_kls]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Wali Kelas</label>
                                            <textarea class="form-control" placeholder="Nama Wali Kelas" name="id_wk" rows="3"><?php echo "$rs[id_wk]"; ?></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Nama Sekolah</label>
                                            <textarea class="form-control" placeholder="Nama Sekolah" name="id_sklh" rows="3"><?php echo "$rs[id_sklh]"; ?></textarea>
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
             