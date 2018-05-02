<?php
if($_GET['act']=="input"){
    ?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Input Kelas</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Kelas 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="post" role="form" action="././module/kelas/proseskelas.php?aksi=tambah">

                                <div class="col-lg-6">
                                        <?php
                                                $ssql=mysql_query("select * from kelas");
                                                $scount=mysql_num_rows($ssql);
                                                while($srs=mysql_fetch_array($ssql))
                                                {
                                                        $idid=$srs['id_kls'];
                                                }
                                                $xx = 0;
                                                $xx = $idid + 1; 
                                            ?>
                                            <input class="form-control" type="hidden" name="id_kls" value="<?php echo $xx; ?>">
                                        <div class="form-group">
                                            <label>Kode Kelas</label>
                                            <p class="form-control"><?php echo $xx; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kelas</label>
                                            <input class="form-control" placeholder="Nama kelas" name="nama_kls">
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Wali Kelas</label>
                                            <input class="form-control" placeholder="Id walikelas" name="id_wk">
                                        </div>
                                        <?php
                                            $sqlc=mysql_query("select id_sklh from sekolah where nama_sklh='$nmsklh'");
                                            $countc=mysql_num_rows($sqlc);
                                            $rsc=mysql_fetch_array($sqlc);
                                            $idsk=$rsc['id_sklh'];
                                        ?>
                                        <input type="hidden" name="id_sklh" value="<?php echo $idsk; ?>">

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
if($_GET['act']=="edit_kelas"){
    ?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Edit Data Kelas</strong></h3>
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
                                            <label>Nama Kelas</label>
                                            <input class="form-control" placeholder="Nama Kelas" name="nama_kls" value="<?php echo "$rs[nama_kls]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Wali Kelas</label>
                                            <input class="form-control" placeholder="Kode Wali Kelas" name="id_wk" value="<?php echo "$rs[id_wk]"; ?>">
                                        </div>
                                        <?php
                                            $sqlc=mysql_query("select id_sklh from sekolah where nama_sklh='$nmsklh'");
                                            $countc=mysql_num_rows($sqlc);
                                            $rsc=mysql_fetch_array($sqlc);
                                            $idsk=$rsc['id_sklh'];
                                        ?>

                                        <input type="hidden" name="id_sklh" value="<?php echo $idsk; ?>">

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
             