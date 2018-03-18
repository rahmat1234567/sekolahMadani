<?php
    if($level==1){
        $dsf=$_GET['nisn'];
    }                      
    else{
        $dsf=$uidi;
    }      
	$sql=mysql_query("select * from siswa where nisn='$dsf'");
	$rs=mysql_fetch_array($sql);
?>
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong><?php echo "$rs[nama_siswa]"; ?></strong></h3>
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
                        <div class="panel-body">
                            <div class="row">

                               
                                <div class="col-lg-6">
                                        <fieldset>

                                        <div class="form-group" data-provides="fileupload" style="border-bottom: " >
                                            <label>Foto</label>
                                            <?php 
                                                if($rs['foto_siswa']==""){
                                                    $foto = "default.jpg";
                                                }
                                                else{
                                                    $foto = $rs['foto_siswa'];
                                                }
                                            ?>
                                            <center><img class="gambar" src="assets/img/<?php echo $foto; ?>" alt="" height="200px" style="padding-bottom: 10px;" /></center>
                                        </div>

                                        <div class="form-group">
                                            <label>NISN</label>
                                            <p class="form-control"><?php echo "$rs[nisn]"; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <p class="form-control"><?php echo "$rs[nama_siswa]"; ?></p>
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
                                            <p class="form-control" style="height: 400%;"><?php echo "$rs[alamat_siswa]"; ?></p>
                                        </div>
                                         <div class="form-group">
                                            <label>Kelas</label>
                                            <p class="form-control" name="id_kls">
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
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Telepon Orang Tua</label>
                                            <p class="form-control"><?php echo $rs['telp_ortu']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <p class="form-control"><?php echo "$rs[nama_ayah]"; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <p class="form-control"><?php echo "$rs[nama_ibu]"; ?></p>
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
