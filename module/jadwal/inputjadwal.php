<?php
if($_GET['act']=="input"){
    ?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Input Jadwal</strong></h3> 
                </div> 
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Jadwal
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="post" role="form" action="././module/jadwal/prosesjadwal.php?aksi=tambah">

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>NIP Guru</label>
                                            <input class="form-control" placeholder="NIP Guru" name="nip">
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Mata Pelajaran</label>
                                            <input class="form-control" placeholder="Kode Mata Pelajaran" name="id_matpel">
                                        </div>
                                </div>
                                    <div class="col-lg-6">
                                        <?php
                                            $sqlc=mysql_query("select id_sklh from sekolah where nama_sklh='$nmsklh'");
                                            $countc=mysql_num_rows($sqlc);
                                            $rsc=mysql_fetch_array($sqlc);
                                            $idsk=$rsc['id_sklh'];
                                        ?>

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
                                        <div class="form-group">
                                            <label>TGL Mengajar</label>
                                            <input type="date" class="form-control" placeholder="TGL Mengajar" name="tgl">
                                        </div>
                                        <div class="form-group">
                                            <label>Jam Mengajar</label>
                                            <input type="text" class="form-control" placeholder="format cth: 08:30:00" name="jam">
                                        </div>

                                   
                                        <button  type="submit" value"simpan" class="btn btn-default">Submit Button</button>
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
if($_GET['act']=="edit_jadwal"){
    ?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Edit Data Jadwal</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data 
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                                $sql=mysql_query("select * from jadwal where id_jadwal='$_GET[id_jadwal]'");
                                $rs=mysql_fetch_array($sql);
?>
                                <form method="post" role="form" action="././module/jadwal/prosesjadwal.php?aksi=update">
                                <input type="hidden" name="id_jadwal" value="<?php echo $_GET['id_jadwal'] ?>" />
                                <div class="col-lg-6">
                                		<div class="form-group">
                                            <label>NIP Guru</label>
                                            <input class="form-control" placeholder="NIP Guru" name="nip" value="<?php echo "$rs[nip]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Mata Pelajaran</label>
                                            <input class="form-control" placeholder="Kode Mata Pelajaran" name="id_matpel" value="<?php echo "$rs[id_matpel]"; ?>">
                                        </div>
                                        
                                        <?php
                                            $sqlc=mysql_query("select id_sklh from sekolah where nama_sklh='$nmsklh'"); 
                                            $countc=mysql_num_rows($sqlc);
                                            $rsc=mysql_fetch_array($sqlc);
                                            $idsk=$rsc['id_sklh'];
                                        ?>

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
                                        <div class="form-group">
                                            <label>TGL Mengajar</label>
                                            <input type="date" class="form-control" placeholder="TGL Mengajar" name="tgl" value="<?php echo "$rs[tgl]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jam Mengajar</label>
                                            <input class="form-control" placeholder="Jam Mengajar" name="id_matpel" value="<?php echo "$rs[jam]"; ?>">
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
             