<?php
if($_GET['act']=="input"){
	?>
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Input Data Staff IT</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Staff IT
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="post" role="form" action="././module/staffit/prosesstaffit.php?aksi=tambah">

                                <div class="col-lg-6">
										<div class="form-group">
                                            <label>FOTO</label>
                                            <input style="padding-bottom:3%;" type="file" name="foto_staffit">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Nama" name="nama_staffit">
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
										<div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat_staffit" rows="3"></textarea>
                                        </div>
								</div>

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_staffit" type="password">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input class="form-control" placeholder="No Telp" name="telp_guru">
                                        </div>
										<div class="form-group">
                                            <label>Sekolah</label>
                                            <select class="form-control" name="id_sklh">
                                                <option value="">--- Pilih Sekolah ---</option>
                                            <?php

                                                $ssql=mysql_query("select * from sekolah ");
                                                $scount=mysql_num_rows($ssql);
                                                while($srs=mysql_fetch_array($ssql))
                                                {
                                                        $idid=$srs['id_sklh'];
                                                        $nmnm=$srs['nama_sklh'];
                                                    ?>
                                                    <option value="<?php echo $idid; ?>"> <?php echo $nmnm ?></option>
                                                    <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Akun</label>
                                            <div class="onoffswitch4">
                                                <input type="checkbox" name="status_akun" class="onoffswitch4-checkbox" id="myonoffswitch4" value="4">
                                                <label class="onoffswitch4-label" for="myonoffswitch4">
                                                    <span class="onoffswitch4-inner"></span>
                                                    <span class="onoffswitch4-switch"></span>
                                                </label>
                                            </div>
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
if($_GET['act']=="edit"){
	?>
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Edit Data Staff IT</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Staff IT
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                            	$sql=mysql_query("select * from staffit where id_staffit='$_GET[id_staffit]'");
								$rs=mysql_fetch_array($sql);
?>
                                    <form method="post" role="form" action="././module/staffit/prosesstaffit.php?aksi=update">
<input type="hidden" name="id_staffit" value="<?php echo $_GET['id_staffit'] ?>" />
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>FOTO</label>
                                            <input style="padding-bottom:3%;" class="form-control" type="file" name="foto_staffit" value="<?php echo "$rs[foto_staffit]"; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Nama" name="nama_staffit" value="<?php echo "$rs[nama_staffit]"; ?>">
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
										<div class="form-group">
                                            <label>Alamat</label>
                                            <?php $almt=$rs["alamat_staffit"]; ?>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat_staffit" value="<?php echo $almt; ?>" rows="3"></textarea>
                                        </div>
</div>

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_staffit" type="password" value="">
                                            <input class="form-control" type="hidden" name="pass_lama" value="<?php echo "$rs[pass_staffit]"; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input class="form-control" placeholder="No Telp" name="telp_staffit" value="<?php echo "$rs[telp_staffit]"; ?>">
                                        </div>
										<div class="form-group">
                                            <label>Sekolah</label>
                                            <select class="form-control" name="id_sklh">
                                                <option value="">--- Pilih Sekolah ---</option>
                                            <?php

                                                $ssql=mysql_query("select * from sekolah");
                                                $scount=mysql_num_rows($ssql);
                                                while($srs=mysql_fetch_array($ssql))
                                                {
                                                        $idid=$srs['id_sklh'];
                                                        $nmnm=$srs['nama_sklh'];
                                                    ?>
                                                    <option value="<?php echo $idid; ?>"

                                                    <?php 
                                                        if($idid==$rs['id_sklh']){
                                                            echo "selected";
                                                        }
                                                        else{
                                                            echo"";
                                                        }
                                                    ?>

                                                    > <?php echo $nmnm ?></option>
                                                    <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Status Akun</label>
                                            <?php 
                                                if($rs['status_akun']==0){ ?>
                                                <div class="onoffswitch4">
                                                    <input type="checkbox" name="status_akun" class="onoffswitch4-checkbox" id="myonoffswitch4" value="4">
                                            <?php } 
                                                else{
                                            ?>
                                                <div class="onoffswitch4">
                                                    <input type="checkbox" name="status_akun" class="onoffswitch4-checkbox" id="myonoffswitch4" value="4" checked>
                                            <?php } ?>
                                                <label class="onoffswitch4-label" for="myonoffswitch4">
                                                    <span class="onoffswitch4-inner"></span>
                                                    <span class="onoffswitch4-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success">Edit Data</button>
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
             