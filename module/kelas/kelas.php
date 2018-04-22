            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Kelas</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Kelas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="13%">Kode Kelas</th>
                                            <th class="text-center">Nama Kelas</th>
                                            <th class="text-center">Nama Wali Kelas</th>
                                            <th class="text-center">Nama Matapelajaran</th>
                                            <th class="text-center">Jam</th>
                                            <?php if($level==2){ ?><th class="text-center">Aksi</th> <?php } ?>

                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$no=1;
include 'databasekelas.php';
$db = new database();
$sql=mysql_query("select * from kelas");
	
    foreach($db->tampil_data() as $rs)
	{
        $sqlss = mysql_query("select * from jadwal where id_kls='$rs[id_kls]'");
        $countss = mysql_num_rows($sqlss);
        $rsss = mysql_fetch_array($sqlss);


                                                    $sqlzzz=mysql_query("select * from kelas,matpel,jadwal where jadwal.id_kls='$rs[id_kls]' and jadwal.id_matpel=matpel.id_matpel");
                                                    $countz=mysql_num_rows($sqlzzz);
                                                    $rszzz=mysql_fetch_array($sqlzzz);


        if($rs['id_sklh']==$idsklh && $rsss['id_kls']!=NULL){
?>                                        <tr class="odd gradeX">
                                            <td><?php echo"$rs[id_kls]";  ?></td>
                                            <td><?php echo"$rs[nama_kls]";  ?></td>
                                            <td>
                                                <?php
                                                    if($rs['id_wk']!=0){
                                                        $kode_wk=$rs['id_wk']; 
                                                        $sqlzz=mysql_query("select nama_guru from guru, walikelas where walikelas.id_wk='$kode_wk' and walikelas.nip=guru.nip");
                                                        $countzz=mysql_num_rows($sqlzz);
                                                        $rszz=mysql_fetch_array($sqlzz);
                                                        echo "$rszz[nama_guru]";
                                                    }
                                                    else{
                                                        echo "<span class='text-danger'>Belum Ada</span>";
                                                    }  
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    echo "$rszzz[nama_matpel]";
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    echo "$rszzz[jam]";
                                                ?>
                                            </td>
                                            <?php if($level==2){ ?>
                                        <td class="text-center">
										<a href="./././admin.php?module=input_kelas&act=edit_kelas&id_kls=<?php echo $rs['id_kls'] ?>"><button type="button" class="btn btn-info">Edit</button></a>
										<a href="././module/kelas/proseskelas.php?aksi=hapus&id_kls=<?php echo $rs['id_kls'] ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
										</td>
                                        <?php } ?>

                                        </tr>

<?php
    	}
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