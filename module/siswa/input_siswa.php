<?php
if($_GET['act']=="input"){
	?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Input Data Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="post" role="form" action="././module/siswa/prosessiswa.php?aksi=tambah">

                                <div class="col-lg-6">

                                        <div class="form-group">
                                            <input type="hidden" name="level" value="<?php echo "$level"; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" name="foto_siswa">
                                        </div>

                                        <div class="form-group">
                                            <label>NISN</label>
                                            <input class="form-control" placeholder="NISN" name="nisn">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Nama" name="nama_siswa">
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

                                        <?php
                                            $sqlc=mysql_query("select id_sklh from sekolah where nama_sklh='$nmsklh'");
                                            $countc=mysql_num_rows($sqlc);
                                            $rsc=mysql_fetch_array($sqlc);
                                            $idsk=$rsc['id_sklh'];
                                        ?>

                                        <input type="hidden" name="id_sklh" value="<?php echo $idsk; ?>">

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat_siswa" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="id_kls">
                                                <option value="">--- Pilih Kelas ---</option>
                                            <?php

                                                $ssql=mysql_query("select * from kelas where id_sklh='$idsk'");
                                                $scount=mysql_num_rows($ssql);
                                                while($srs=mysql_fetch_array($ssql))
                                                {
                                                        $idid=$srs['id_kls'];
                                                        $nmnm=$srs['nama_kls'];
                                                    ?>
                                                    <option value="<?php echo $idid; ?>"> <?php echo $nmnm ?></option>
                                                    <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group input-group">
                                            <label>Nomor Telepon Orang Tua</label>
                                            <input type="text" class="form-control" placeholder="No Telepon" name="telp_ortu">
                                        </div>
</div>

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input class="form-control" placeholder="Nama" name="nama_ayah">
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input class="form-control" placeholder="Nama" name="nama_ibu">
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_siswa" type="password">
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
                                        <button type="submit" class="btn btn-success">Submit</button>
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
					<h3 class="page-header"><strong>Edit Data Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                            	$sql=mysql_query("select * from siswa where nisn='$_GET[nisn]'");
								$rs=mysql_fetch_array($sql);
?>
                                    <form method="post" role="form" action="././module/siswa/prosessiswa.php?aksi=edit">
                                        <div class="col-lg-6">
                                            <input type="hidden" name="level" value="<?php echo "$level"; ?>">

                                        <div class="form-group">
                                            <label>NISN</label>
                                            <input class="form-control" value="<?php echo "$rs[nisn]"; ?>" placeholder="NISN" name="nisn">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" value="<?php echo "$rs[nama_siswa]"; ?>" placeholder="Nama" name="nama_siswa">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                        
                                        <?php
if($rs['jk']=="L"){
?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="L" checked>Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="P">
                                                    Perempuan
                                                </label>
                                            </div>
<?php
}else{
?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="L">Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="P" checked>Perempuan
                                                </label>
                                            </div>
<?php
}
?>
                                        </div>

                                        <?php
                                            $sqlc=mysql_query("select id_sklh from sekolah where nama_sklh='$nmsklh'");
                                            $countc=mysql_num_rows($sqlc);
                                            $rsc=mysql_fetch_array($sqlc);
                                            $idsk=$rsc['id_sklh'];
                                        ?>

                                        <input type="hidden" name="id_sklh" value="<?php echo $idsk; ?>">

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <?php $almt=$rs["alamat_siswa"]; ?>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat_siswa" value="<?php echo $almt; ?>" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="id_kls">
                                                <option value="">--- Pilih Kelas ---</option>
                                            <?php

                                                $ssql=mysql_query("select * from kelas where id_sklh='$idsk'");
                                                $scount=mysql_num_rows($ssql);
                                                while($srs=mysql_fetch_array($ssql))
                                                {
                                                        $idid=$srs['id_kls'];
                                                        $nmnm=$srs['nama_kls'];
                                                    ?>
                                                    <option value="<?php echo $idid; ?>"

                                                    <?php 
                                                        if($idid==$rs['id_kls']){
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
                                        <div class="form-group input-group">
                                            <label>Nomor Telepon Orang Tua</label>
                                            <input type="text" class="form-control" value="<?php echo $rs['telp_ortu']; ?>" placeholder="No Telepon" name="telp_ortu">
                                        </div>
</div>

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input class="form-control" placeholder="Nama" name="nama_ayah" value="<?php echo $rs['nama_ayah']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input class="form-control" placeholder="Nama" name="nama_ibu" value="<?php echo $rs['nama_ibu']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_siswa" type="password" value="">
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