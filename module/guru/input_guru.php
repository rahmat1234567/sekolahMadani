<?php
if($_GET['act']=="input"){
	?>
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Input Data Guru</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Guru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="post" role="form" action="././module/guru/prosesguru.php?aksi=tambah">

                                <div class="col-lg-6">
										<div class="form-group">
                                            <label>FOTO</label>
                                            <input style="padding-bottom:3%;" type="file" name="foto_guru">
                                        </div>
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input class="form-control" placeholder="NIP" name="nip">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Nama" name="nama_guru">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="L" 
                                                    checked>Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="P">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
</div>

                                <div class="col-lg-6">

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat_guru" rows="3"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_guru" type="password">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input class="form-control" placeholder="No Telp" name="telp_guru">
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
if($_GET['act']=="edit_guru"){
	?>
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Edit Data Guru</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Guru
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                            	$sql=mysql_query("select * from guru where nip='$_GET[nip]'");
								$rs=mysql_fetch_array($sql);
?>
                                    <form method="post" role="form" action="././module/guru/prosesguru.php?aksi=update">
<input type="hidden" name="nip" value="<?php echo $_GET['nip'] ?>" />
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input class="form-control" placeholder="NIP" name="nip" value="<?php echo "$rs[nip]"; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Nama" name="nama_guru" value="<?php echo "$rs[nama_guru]"; ?>">
                                        </div>
                                        <div class="form-group">
         
                                           <label>Jenis Kelamin</label>
        <?php if($rs['jk']=="L"){ ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="L" 
                                                    checked>Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="P">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
<?php } ?>
        <?php if($rs['jk']=="P"){ ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="L" 
                                                    >Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="P" checked>
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
<?php } ?>

</div>

                                <div class="col-lg-6">

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat_guru" rows="3"><?php echo "$rs[alamat_guru]"; ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_guru" type="password" value="">
                                            <input class="form-control" type="hidden" name="pass_lama" value="<?php echo "$rs[pass_guru]"; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input class="form-control" placeholder="No Telp" name="telp_guru" value="<?php echo "$rs[telp_guru]"; ?>">
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
             