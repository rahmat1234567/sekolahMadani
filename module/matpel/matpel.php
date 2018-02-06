            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Mata Pelajaran</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Mata Pelajaran
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th class="text-center" width="6%">NO</th>
											<th class="text-center">Nama Mata Pelajaran</th>
                                            <?php if($level==2){ ?>
                                            <th class="text-center">Aksi</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php
$no=1;
include 'databasematpel.php';
$db = new database();
	$sql=mysql_query("select * from matpel");

	
    foreach($db->tampil_data() as $rs)
	{

//if($level==1 and $level==2){

    ?>                                        <tr class="odd gradeX">
												<td><?php echo $no++; ?></td>
												<td><?php echo"$rs[nama_matpel]";  ?></td>

                                               <?php if($level==2){ ?> 
                                             <td class="text-center"> 
    										 <a href="./././admin.php?module=input_matpel&act=edit_matpel&id_matpel=<?php echo $rs['id_matpel'] ?>">
    										 <button type="button" class="btn btn-info">Edit</button> 
    										 
    										 <a href="././module/matpel/prosesmatpel.php?id_matpel=<?php echo $rs['id_matpel'] ?>&aksi=hapus">
    										 <button type="button" class="btn btn-danger">Hapus</button></a></td>
                                             <?php } ?>
                                            </tr>
    <?php
    
//}

}
?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
