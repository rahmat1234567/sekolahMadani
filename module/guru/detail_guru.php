<?php                            
 					$sql=mysql_query("select * from guru where nip='$_GET[nip]'");
					$rs=mysql_fetch_array($sql);
?>

          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Guru : <?php echo "$rs[nama_guru]"; ?></strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Guru
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-lg-6">
                                        <fieldset>

                                        <div class="form-group" data-provides="fileupload" style="border-bottom: " >
                                            <label>Foto</label>
                                            <?php 
                                                if($rs['foto_guru']==""){
                                                    $foto = "default.jpg";
                                                }
                                                else{
                                                    $foto = $rs['foto_guru'];
                                                }
                                            ?>
                                            <center><img class="gambar" src="assets/img/<?php echo $foto; ?>" alt="" height="200px" style="padding-bottom: 10px;" /></center>
                                            </div>

                                        <div class="form-group">
                                            <label>NIP</label>
                                            <p class="form-control"><?php echo "$rs[nip]"; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <p class="form-control"><?php echo "$rs[nama_guru]"; ?></p>
                                        </div>
</fieldset>
</div>

                                <div class="col-lg-6">
                              <fieldset readonly>
                                        <div class="form-group">
         
                                           <label>Jenis Kelamin</label>
        <?php if($rs['jk']=="L"){ ?>
                                            <div class="form-group">
                                                <p class="form-control">Laki-laki</p>
                                            </div>
<?php } ?>
        <?php if($rs['jk']=="P"){ ?>
                                            <div class="form-group">
                                                <p class="form-control">Perempuan</p>
                                            </div>
                                        </div>
<?php } ?>


                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <p class="form-control" style="height: 400%;"><?php echo "$rs[alamat_guru]"; ?></p>
                                        </div>
                                         <div class="form-group">
                                            <label>Kelas</label>
                                            <p class="form-control" name="id_kls"><!--
                                            <?php

                                                $ssql=mysql_query("select * from kelas where id_sklh='$rs[id_sklh]'");
                                                $scount=mysql_num_rows($ssql);
                                                while($srs=mysql_fetch_array($ssql))
                                                {
                                                        $idid=$srs['id_kls'];
                                                        $nmnm=$srs['nama_kls'];
                                                        
                                                        if($idid==$rs['id_kls']){
                                                            echo $nmnm;
                                                        }
                                                }
                                            ?>
                                            -->
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Telepon</label>
                                            <p class="form-control"><?php echo $rs['telp_guru']; ?></p>
                                        </div>
</fieldset>                                        
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
