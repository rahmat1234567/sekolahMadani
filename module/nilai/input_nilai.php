    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script> 
    
        <div class="container">
        <h1>Input Nilai Siswa</h1> 
        <div class="tab-content">
            <div class="tab-pane fade in active">
            <div class="row">
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-11">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Nilai Ulangan Harian
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="#" class="btn btn-sm btn-info pull-right" style="margin-bottom: 1rem;">Tambah</a>
							<form name="form">
                                <table class="table table-striped table-bordered table-hover" id="input-nilai">
                                    <thead>
                                        <tr>
											<th class="text-center" style="width: 10px;">NO</th>
                                            <th class="text-center" >Nama</th>
                                            <th class="text-center" style="width: 80px;">Nilai UH1</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php
$no=1;
include 'databasenilaiulangan.php';
$db = new database();
    foreach($db->tampil_data() as $rs)
	{

//if($level==1 and $level==2){
										
    ?>                                      <tr class="odd gradeX">
												<td><?php echo $no++; ?></td>
                                                <td><?php echo"$rs[nisn]";  ?></td>
												<td><input type="number" name="nilai_uh" min="0" max="100" step="5" type="text" pattern="[0-9]" value="<?php echo"$rs[nilai_uh]";?>" required/></td>
                                            </tr>
    <?php
    
//}

}
?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive --><center>
							<button type="submit" class="btn btn-sm btn-info" style="background: green;">Simpan</button></center>
							</form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-11 -->
            </div>
            <!-- /.row -->
