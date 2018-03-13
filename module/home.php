        <script src="http://maps.googleapis.com/maps/api/js?sensor=false&file=api&v=2&key=AIzaSyDTHdsatggoEPUvt0-1UBy0Km-lvWmrwz4"></script>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo "$nmsklh"; ?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
<?php
    $sql=mysql_query("select * from sekolah where id_sklh='$idsklh'");
    $rs=mysql_fetch_array($sql);
?>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group" style="">
                    <label>Lokasi Sekolah</label>
                    <fieldset class="gllpLatlonPicker push-col-md-4" style="">
                        <div class="gllpMap">Google Maps</div>
                        <input type="hidden" name="lati" class="gllpLatitude" value="<?php echo "$rs[lat]"; ?>"/>
                        <input type="hidden" name="longi" class="gllpLongitude" value="<?php echo "$rs[lng]"; ?>"/>
                        <input type="hidden" name="zoom" class="gllpZoom" value="13"/>
                    </fieldset>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

            