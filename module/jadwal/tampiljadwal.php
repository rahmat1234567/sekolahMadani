            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Jadwal Mengajar Guru</strong></h3> 
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default"> 
                        <div class="panel-heading"> 
                            Data Jadwal
                        </div> 
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <!--<th class="text-center" width="13%">Kode Kelas</th>-->
                                            <th class="text-center">Nama Guru</th>
                                            <th class="text-center">Nama Mata Pelajaran</th>
                                            <th class="text-center">Nama Kelas</th>
                                            <th class="text-center">TGL</th> 
                                            <th class="text-center">Jam</th>                                                    
                                            <?php if($level==2){ ?><th class="text-center">Aksi </th> <?php } ?>

                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$no=1;
include 'databasejadwal.php';
$db = new database();
$sql=mysql_query("select * from jadwal where nip='$uidi'");
	if($level==3){
    foreach($db->tampil_data1($uidi) as $rs)
	{
       
    ?>                                   <tr class="odd gradeX">
    										<td>
                                                <?php
                                                    if($rs['nip']!=0){
                                                        $kode_nip=$rs['nip']; 
                                                        $sqlzz=mysql_query("select nama_guru from guru where nip='$rs[nip]' ");
                                                        $countzz=mysql_num_rows($sqlzz);
                                                        $rszz=mysql_fetch_array($sqlzz);
                                                        echo "$rszz[nama_guru]";
                                                    }  
                                                ?>
                                            </td>
                                            <?php 
                                                $qjadwal = mysql_query("SELECT `id_matpel` FROM `jadwal` WHERE `id_jadwal`='$rs[id_jadwal]' ");
                                                $djadwal = mysql_fetch_array($qjadwal);

                                                $qmapel = mysql_query("SELECT `nama_matpel` FROM `matpel` WHERE `id_matpel`='$djadwal[id_matpel]' ");
                                                $dmapel = mysql_fetch_array($qmapel);
                                            ?>
											<td><?php echo $dmapel['nama_matpel']; ?></td>
                                            <?php 
                                                $qkelas = mysql_query("SELECT `nama_kls` FROM `kelas` WHERE `id_kls`='$rs[id_kls]' ");
                                                $dkelas = mysql_fetch_array($qkelas);
                                            ?>
                                            <td><?php echo $dkelas['nama_kls'];  ?></td>
                                            <td><?php echo"$rs[tgl]";  ?></td>
                                            <td><?php echo"$rs[jam]";  ?></td>
                
                                            <?php if($level==2){ ?>
                                        <td class="text-center">
										<a href="./././admin.php?module=inputjadwal&act=edit_jadwal&id_jadwal=<?php echo $rs['id_jadwal'] ?>"><button type="button" class="btn btn-info">Edit</button></a>
										<a href="././module/jadwal/prosesjadwal.php?aksi=hapus&id_jadwal=<?php echo $rs['id_jadwal'] ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
										</td>
                                        <?php } ?>

                                        </tr>

<?php
    }}

else{
foreach($db->tampil_data() as $rs)
    {
       
    ?>                                   <tr class="odd gradeX">
                                            <td>
                                                <?php
                                                    if($rs['nip']!=0){
                                                        $kode_nip=$rs['nip']; 
                                                        $sqlzz=mysql_query("select nama_guru from guru where nip='$rs[nip]' ");
                                                        $countzz=mysql_num_rows($sqlzz);
                                                        $rszz=mysql_fetch_array($sqlzz);
                                                        echo "$rszz[nama_guru]";
                                                    }  
                                                ?>
                                            </td>
                                            <?php 
                                                $qjadwal = mysql_query("SELECT `id_matpel` FROM `jadwal` WHERE `id_jadwal`='$rs[id_jadwal]' ");
                                                $djadwal = mysql_fetch_array($qjadwal);

                                                $qmapel = mysql_query("SELECT `nama_matpel` FROM `matpel` WHERE `id_matpel`='$djadwal[id_matpel]' ");
                                                $dmapel = mysql_fetch_array($qmapel);
                                            ?>
                                            <td><?php echo $dmapel['nama_matpel']; ?></td>
                                            <?php 
                                                $qkelas = mysql_query("SELECT `nama_kls` FROM `kelas` WHERE `id_kls`='$rs[id_kls]' ");
                                                $dkelas = mysql_fetch_array($qkelas);
                                            ?>
                                            <td><?php echo $dkelas['nama_kls'];  ?></td>
                                            <td><?php echo"$rs[tgl]";  ?></td>
                                            <td><?php echo"$rs[jam]";  ?></td>
                
                                            <?php if($level==2){ ?>
                                        <td class="text-center">
                                        <a href="./././admin.php?module=inputjadwal&act=edit_jadwal&id_jadwal=<?php echo $rs['id_jadwal'] ?>"><button type="button" class="btn btn-info">Edit</button></a>
                                        <a href="././module/jadwal/prosesjadwal.php?aksi=hapus&id_jadwal=<?php echo $rs['id_jadwal'] ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                                        </td>
                                        <?php } ?>

                                        </tr>

<?php
    }}
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