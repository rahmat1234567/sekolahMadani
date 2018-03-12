<!--
<script type="text/javascript" src="maps/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="maps/css/jquery-gmaps-latlon-picker.css"/>
<script type="text/javascript" src="maps/js/jquery-gmaps-latlon-picker.js"></script>-->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&file=api&v=2&key=AIzaSyAXI2z-oCbyiz4Q21xANCbfU6oByBydmaM"></script>

<?php
if($_GET['act']=="input"){
	?>
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Input Data Sekolah</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Sekolah
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="post" role="form" action="././module/sekolah/prosessekolah.php?aksi=tambah">

                                <div class="col-lg-6">
                                            <?php
                                                $ssql=mysql_query("select * from sekolah");
                                                $scount=mysql_num_rows($ssql);
                                                while($srs=mysql_fetch_array($ssql))
                                                {
                                                        $idid=$srs['id_sklh'];
                                                }
                                                $xx = 0;
                                                $xx = $idid + 1;
                                            ?>
                                            <input class="form-control" type="hidden" name="id_sklh" value="<?php echo $xx; ?>">
                                        <div class="form-group">
                                            <label>Kode Sekolah</label>
                                            <p class="form-control"><?php echo $xx; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Sekolah</label>
                                            <input class="form-control" placeholder="Nama sekolah" name="nama_sklh" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea style="resize: vertical;" class="form-control" placeholder="Alamat" name="alamat_sklh" rows="2" required="required"></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Telp</label>
                                            <input class="form-control" placeholder="Telp" name="telp_sklh" required>
                                        </div>
<div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Email" name="email_sklh" value="" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Luas Sekolah (m<sup>2</sup>)</label>
                                        <input class="form-control" placeholder="Luas" name="luas_sklh" value="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jumlah Ruang Kelas</label>
                                        <input class="form-control" placeholder="Jumlah Kelas" name="jmlh_ruang_kls" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Laboratorium</label>
                                        <div class="a1">
                                            <input type="checkbox" name="laboratorium" class="a1-checkbox" id="mya1" value="1">
                                            <label class="a1-label" for="mya1">
                                                <span class="a1-inner"></span>
                                                <span class="a1-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mushola</label>
                                        <div class="a2">
                                            <input type="checkbox" name="musholla" class="a2-checkbox" id="mya2" value="1">
                                            <label class="a2-label" for="mya2">
                                                <span class="a2-inner"></span>
                                                <span class="a2-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Aula</label>
                                        <div class="a3">
                                            <input type="checkbox" name="aula" class="a3-checkbox" id="mya3" value="1">
                                            <label class="a3-label" for="mya3">
                                                <span class="a3-inner"></span>
                                                <span class="a3-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Perpustakaan</label>
                                        <div class="a6">
                                            <input type="checkbox" name="perpustakaan" class="a6-checkbox" id="mya6" value="1">
                                            <label class="a6-label" for="mya6">
                                                <span class="a6-inner"></span>
                                                <span class="a6-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Lapangan Basket</label>
                                        <div class="a4">
                                            <input type="checkbox" name="lap_basket" class="a4-checkbox" id="mya4" value="1">
                                            <label class="a4-label" for="mya4">
                                                <span class="a4-inner"></span>
                                                <span class="a4-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Lapangan Sepakbola</label>
                                        <div class="a5">
                                            <input type="checkbox" name="lap_sepakbola" class="a5-checkbox" id="mya5" value="1">
                                            <label class="a5-label" for="mya5">
                                                <span class="a5-inner"></span>
                                                <span class="a5-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <center><div class="form-group"><button type="submit" class="btn btn-success" style="width: 60%;transform: translateY(10px);">Edit Data</button></div></center>
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
if($_GET['act']=="edit_sekolah"){
	?>
          <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Data Sekolah</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Sekolah
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                            	$sql=mysql_query("select * from sekolah where id_sklh='$_GET[id_sklh]'");
								$rs=mysql_fetch_array($sql);

?>
                                    <form method="post" role="form" action="././module/sekolah/prosessekolah.php?aksi=update">
<input type="hidden" name="id_sklh" value="<?php echo $_GET['id_sklh'] ?>" />

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kode Sekolah</label>
                                            <input class="form-control" placeholder="Kode" name="id_sklh" value="<?php echo "$rs[id_sklh]"; ?>" disabled>
										</div>
                                        <div class="form-group">
                                            <label>Nama Sekolah</label>
                                            <input class="form-control" placeholder="Nama Sekolah" name="nama_sklh" value="<?php echo "$rs[nama_sklh]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea style="resize: vertical;" class="form-control" placeholder="Alamat" name="alamat_sklh" rows="1"><?php echo "$rs[alamat_sklh]"; ?></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Telp</label>
                                            <input class="form-control" placeholder="Telp" name="telp_sklh" value="<?php echo "$rs[telp_sklh]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Email" name="email_sklh" value="<?php echo "$rs[email_sklh]"; ?>">
                                        </div>
                                        <div class="form-group">
                                        <label>Luas Sekolah (m<sup>2</sup>)</label>
                                        <input class="form-control" placeholder="Luas" name="luas_sklh" value="<?php echo "$rs[luas_sklh]"; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Ruang Kelas</label>
                                        <input class="form-control" placeholder="Jumlah Kelas" name="jmlh_ruang_kls" value="<?php echo "$rs[jmlh_ruang_kls]"; ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                <?php
                                    if($rs['lat']==""){
                                        $lat1 = "0.5070628154890728";
                                        $lng1 = "101.44805035605714";
                                    }
                                    else{
                                        $lat1 = $rs['lat'];
                                        $lng1 = $rs['lng'];
                                    }
                                ?>
                                    <div class="form-group" style="">
                                        <label>Lokasi Sekolah</label>
                                        <fieldset class="gllpLatlonPicker push-col-md-4" style="">
                                            <div class="gllpMap">Google Maps</div>
                                            <input type="hidden" name="lati" class="gllpLatitude" value="<?php echo "$lat1"; ?>"/>
                                            <input type="hidden" name="longi" class="gllpLongitude" value="<?php echo "$lng1"; ?>"/>
                                            <input type="hidden" name="zoom" class="gllpZoom" value="13"/>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Laboratorium</label>
                                        <div class="a1">
                                            <input type="checkbox" name="laboratorium" class="a1-checkbox" id="mya1" value="1"
                                            <?php if($rs['laboratorium']=="1"){ echo " checked"; } ?>
                                            >
                                            <label class="a1-label" for="mya1">
                                                <span class="a1-inner"></span>
                                                <span class="a1-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mushola</label>
                                        <div class="a2">
                                            <input type="checkbox" name="musholla" class="a2-checkbox" id="mya2" value="1"
                                            <?php if($rs['musholla']=="1"){ echo " checked"; } ?>>
                                            <label class="a2-label" for="mya2">
                                                <span class="a2-inner"></span>
                                                <span class="a2-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Aula</label>
                                        <div class="a3">
                                            <input type="checkbox" name="aula" class="a3-checkbox" id="mya3" value="1"
                                            <?php if($rs['aula']=="1"){ echo " checked"; } ?>>
                                            <label class="a3-label" for="mya3">
                                                <span class="a3-inner"></span>
                                                <span class="a3-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Perpustakaan</label>
                                        <div class="a6">
                                            <input type="checkbox" name="perpustakaan" class="a6-checkbox" id="mya6" value="1"
                                            <?php if($rs['perpustakaan']=="1"){ echo " checked"; } ?>>
                                            <label class="a6-label" for="mya6">
                                                <span class="a6-inner"></span>
                                                <span class="a6-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Lapangan Basket</label>
                                        <div class="a4">
                                            <input type="checkbox" name="lap_basket" class="a4-checkbox" id="mya4" value="1"
                                            <?php if($rs['lap_basket']=="1"){ echo " checked"; } ?>>
                                            <label class="a4-label" for="mya4">
                                                <span class="a4-inner"></span>
                                                <span class="a4-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Lapangan Sepakbola</label>
                                        <div class="a5">
                                            <input type="checkbox" name="lap_sepakbola" class="a5-checkbox" id="mya5" value="1"
                                            <?php if($rs['lap_sepakbola']=="1"){ echo " checked"; } ?>>
                                            <label class="a5-label" for="mya5">
                                                <span class="a5-inner"></span>
                                                <span class="a5-switch"></span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <center><div class="form-group"><button type="submit" class="btn btn-success" style="width: 60%;transform: translateY(10px);">Edit Data</button></div></center>
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
             