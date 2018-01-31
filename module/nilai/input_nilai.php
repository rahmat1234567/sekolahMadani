<?php
if($_GET['act']=="input"){
	?>
<style type="text/css">
    .navbar-brand { position: relative; z-index: 2; }

.navbar-nav.navbar-left .btn { position: relative; z-index: 2; padding: 4px 20px; margin: 10px auto; }

.navbar .navbar-collapse { position: relative; }
.navbar .navbar-collapse .navbar-left > li:last-child { padding-left: 0px; }

.navbar .nav-collapse { position: absolute; z-index: 1; top: 0; left: 0; right: 0; bottom: 0; margin: 0; padding-right: 0px; padding-left: 0px; width: 100%; }
.navbar.navbar-default .nav-collapse { background-color: #f8f8f8; }
.navbar.navbar-inverse .nav-collapse { background-color: #222; }
.navbar .nav-collapse .navbar-form { border-width: 0; box-shadow: none; }
.nav-collapse>li { float: left; }

.btn.btn-circle { border-radius: 50px; }
.btn.btn-outline { background-color: transparent; }

@media screen and (max-width: 767px) {
    .navbar .navbar-collapse .navbar-left > li:last-child { padding-left: 0px; padding-right: 0px; } 
    
    .navbar .nav-collapse { margin: 7.5px auto; padding: 0; }
    .navbar .nav-collapse .navbar-form { margin: 0; }
    .nav-collapse>li { float: none; }
}
</style>

    <div class="container-fluid">
    <!-- Second navbar for categories -->
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li>
            <a  href="?page=th_nilai">Tugas Harian</a>
            </li>
            <li><a href="javascript:;">&raquo;</a></li>
            <li>
            <a  href="#">Ulangan Harian</a>
            </li>
            <li>
            <a  href="#">Ujian Tengah Semester</a>
            </li>
            <li>
            <a  href="#">Ujian Akhir Semester</a>
            </li>
            <li><a  href="#">R E M E D I A L</a>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
    

    </nav><!-- /.navbar -->
</div><!-- /.container-fluid -->
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Input Nilai Siswa</strong></h3>
                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="post" role="form" action="././module/simpan.php?act=input_kelas">

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Sekolah</label>
                                            <select class="form-control" name="id">
  <?php 
	$sql=mysql_query("select * from sekolah");
	while($rs=mysql_fetch_array($sql)){
if($_SESSION['level']=="admin_guru"){
if($rs['id']==$_SESSION['id']){
		
	echo "<option value='$rs[id]'>$rs[nama]</option>";	
}
}else{
		echo "<option value='$rs[id]'>$rs[nama]</option>";	

	}
}
?>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kelas</label>
                                            <input class="form-control" placeholder="Kelas" name="nama">
                                        </div>

                                        
                                        <button type="submit" class="btn btn-default">Submit Button</button>
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
                    <h1 class="page-header">Edit Data Kelas</h1>
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
                            	$sql=mysql_query("select * from kelas where idk='$_GET[idk]'");
								$rs=mysql_fetch_array($sql);

?>
                                    <form method="post" role="form" action="././module/simpan.php?act=edit_kelas">
<input type="hidden" name="idk" value="<?php echo $_GET['idk'] ?>" />

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="id">
  <?php 
	$sqla=mysql_query("select * from sekolah");
	while($rsa=mysql_fetch_array($sqla)){
if($_SESSION['level']=="admin_guru"){
if($rsa['id']==$_SESSION['id']){

if($rs['id']==$rsa['id']){

	echo "<option value='$rsa[id]' selected='selected'>$rsa[nama]</option>";	
}else{
	echo "<option value='$rsa[id]'>$rsa[nama]</option>";		
}

}
}else{
if($rs['id']==$rsa['id']){

	echo "<option value='$rsa[id]' selected='selected'>$rsa[nama]</option>";	
}else{
	echo "<option value='$rsa[id]'>$rsa[nama]</option>";		
}

}
}
?>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Sekolah</label>
                                            <input class="form-control" placeholder="Kelas" name="nama" value="<?php echo $rs['nama'] ?>">
                                        </div>

                                        <button type="submit" class="btn btn-default">Submit Button</button>
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
             