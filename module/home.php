        <script src="http://maps.googleapis.com/maps/api/js?sensor=false&file=api&v=2&key=AIzaSyDTHdsatggoEPUvt0-1UBy0Km-lvWmrwz4"></script>
        <?php if($level!=1){ ?>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo "$nmsklh"; ?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

<?php
    }
    else{
        ?>
        <br>
        <?php
    }
    $sql=mysql_query("select * from sekolah where id_sklh='$idsklh'");
    $rs=mysql_fetch_array($sql);

?>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group" style="">
                    <?php
                        if($rs['lat']==""){
                            $lat1 = "0.5070628154890728";
                            $lng1 = "101.44805035605714";
                            $zooom= "13";
                        }
                        else{
                            $lat1 = $rs['lat'];
                            $lng1 = $rs['lng'];
                            $zooom= "17";
                        }
                    ?>
                    <fieldset class="gllpLatlonPicker push-col-md-4" style="">
                        <div class="gllpMap">Google Maps</div>
                        <input type="hidden" name="lati" class="gllpLatitude" value="<?php echo "$lat1"; ?>"/>
                        <input type="hidden" name="longi" class="gllpLongitude" value="<?php echo "$lng1"; ?>"/>
                        <input type="hidden" name="zoom" class="gllpZoom" value="<?php echo "$zooom" ?>"/>
                        <input type="hidden" name="satt" class="gllpSat" value="1"/>
                    </fieldset>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

            