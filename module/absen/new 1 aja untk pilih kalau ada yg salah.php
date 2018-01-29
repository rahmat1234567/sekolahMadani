 </select>
                                        </div>
                                        
                                <div class="col-lg-4">

                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <select class="form-control" name="tanggal">
<?php 
$tt=1;
while($tt<=31){
if(date("d")==$tt){
	echo "<option selected>$tt</option>";	
}else{
	echo "<option>$tt</option>";	

}
$tt++;
}?>
                                         </select>
                                        </div>
</div>         
                                <div class="col-lg-4">

                                        <div class="form-group">
                                            <label>Bulan</label>
                                            <select class="form-control" name="bulan">
<?php 
$bt=1;
while($bt<=12){
if(date("m")==$bt){
	echo "<option selected>$bt</option>";	
}else{
	echo "<option>$bt</option>";	

}
$bt++;
}?>
                                            </select>
                                        </div>
</div>         
                                <div class="col-lg-4">

                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <select class="form-control" name="tahun">
<?php 
$ht=2000;
while($ht<=2050){
if(date("Y")==$ht){
	echo "<option selected>$ht</option>";	
}else{
	echo "<option>$ht</option>";	
	
}
$ht++;
}