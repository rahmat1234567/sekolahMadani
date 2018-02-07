<div class="row">
    <div class="col-lg-12">
		<h3 class="page-header"><strong>Input Data Absensi siswa</strong></h3>
    </div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Pilih Kelasnya
            </div>
			<div class="panel-body">
                <div class="row">
                    <form method="get" role="form" action="././admin.php?module=input_absen&jam=1">
                        <div class="col-lg-6">
							<input type="hidden" name="module" value="input_absen">
							<input type="hidden" name="jam" value="1">
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="id_kls">

											<?php 
											if($_SESSION['level']==3){
												$sql=mysql_query("select * from kelas where id_kls='$_SESSION[id_kls]'");
											}
											else{
												$sql=mysql_query("select * from kelas");	
											}
											while($rs=mysql_fetch_array($sql)){
											$sqla=mysql_query("select * from sekolah where id_sklh='$rs[id_sklh]'");
											$rsa=mysql_fetch_array($sqla);

											echo "<option value='$rs[idk]'>$rsa[nama] | $rs[nama]</option>";	
											}
											?>
                                         
                                            </select>
											<br>
											<button type="submit" class="btn btn-default">Submit Button</button>
                                        </div>
						</div>         

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