<?php                            
    $sql=mysql_query("select * from siswa where nisn='$uidi'");
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
                            Data Aktivitas Ekskul Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">

                               
                                <div class="col-lg-6">
                                    <fieldset>

                                        <div class="form-group">
                                            <?php
                                                $qdsenin = mysql_query("SELECT `nama_ekskul` FROM `ekskul` WHERE `id_ekskul`='$rs[id_ekskul]' ");
                                                $qsenin = mysql_fetch_array($qdsenin);
                                            ?>
                                            <label>SENIN</label>
                                            <p class="form-control"><?php echo $qsenin['nama_ekskul']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <?php
                                                $qdselasa = mysql_query("SELECT `nama_ekskul` FROM `ekskul` WHERE `id_ekskul`='$rs[id_ekskul]' ");
                                                $qselasa = mysql_fetch_array($qdselasa);
                                            ?>
                                            <label>SELASA</label>
                                            <p class="form-control"><?php echo $qselasa['nama_ekskul']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <?php
                                                $qdrabu = mysql_query("SELECT `nama_ekskul` FROM `ekskul` WHERE `id_ekskul`='$rs[id_ekskul]' ");
                                                $qrabu = mysql_fetch_array($qdrabu);
                                            ?>
                                            <label>RABU</label>
                                            <p class="form-control"><?php echo $qrabu['nama_ekskul']; ?></p>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-lg-6">
                              <fieldset readonly>
                                        <div class="form-group">
                                            <?php
                                                $qdkamis = mysql_query("SELECT `nama_ekskul` FROM `ekskul` WHERE `id_ekskul`='$rs[id_ekskul]' ");
                                                $qkamis = mysql_fetch_array($qdkamis);
                                            ?>
                                            <label>KAMIS</label>
                                            <p class="form-control"><?php echo $qkamis['nama_ekskul']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <?php
                                                $qdjumat = mysql_query("SELECT `nama_ekskul` FROM `ekskul` WHERE `id_ekskul`='$rs[id_ekskul]' ");
                                                $qjumat = mysql_fetch_array($qdjumat);
                                            ?>
                                            <label>JUMAT</label>
                                            <p class="form-control"><?php echo $qjumat['nama_ekskul']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <?php
                                                $qdsabtu = mysql_query("SELECT `nama_ekskul` FROM `ekskul` WHERE `id_ekskul`='$rs[id_ekskul]' ");
                                                $qsabtu = mysql_fetch_array($qdsabtu);
                                            ?>
                                            <label>SABTU</label>
                                            <p class="form-control"><?php echo $qsabtu['nama_ekskul']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <?php
                                                $qdminggu = mysql_query("SELECT `nama_ekskul` FROM `ekskul` WHERE `id_ekskul`='$rs[id_ekskul]' ");
                                                $qminggu = mysql_fetch_array($qdminggu);
                                            ?>
                                            <label>MINGGU</label>
                                            <p class="form-control"><?php echo $qminggu['nama_ekskul']; ?></p>
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
