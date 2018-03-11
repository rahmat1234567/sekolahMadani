<?php
if($_GET['act']=="input"){
?>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script> 
    
        
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><strong>Input Nilai Ulangan Siswa</strong></h3>
            <form method="post" role="form" action="././module/nilai/prosesulangan.php?aksi=tambah">
            <div class="col-md-12">
                <button type="submit" class="btn btn-sm btn-info pull-right" style="background: green; margin-right: -15px; margin-bottom: 1rem;">Simpan</button>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 panel-wrap" id="panel-wrap">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mengisi Nilai Ulangan <span class="judul_tugas"></span>
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="table_intugas">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 10px;">NO</th>
                                            <th class="text-center" >Nama</th>                                      
                                            <th class="text-center" >Nilai UH</th>
                                            <th class="text-center" >Keterangan</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php
$no=1;
$addnumb = 0;
$remnumb = 0;
$uhnumb1 = 0;
$uhnumb2 = 0;
$uhnumb3 = 0;
$uhnumb4 = 0;
$uhnumb5 = 0;
$uhnumb6 = 0;
$uhnumb7 = 0;
$uhnumb8 = 0;
$inuhNum = 0;
$sql=mysql_query("SELECT * FROM `siswa` WHERE `id_kls`='$_GET[id_kelas]' ");

    $noxxx = 1;
    while($rs=mysql_fetch_array($sql))
    {

?>  
                                            <tr class="odd gradeX">
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo"$rs[nama_siswa]";  ?></td>
                                                <td id="in_uh_<?php echo $inuhNum++; ?>">
                                                    <input type="hidden" name="nisn[]" value="<?php echo $rs['nisn']; ?>">
                                                    <input type="hidden" name="id_jadwal" value="<?php echo $_GET['id_jadwal']; ?>">
                                                    <input type="hidden" name="id_kelas" value="<?php echo $_GET['id_kelas']; ?>">
                                                    <input type="text" class="form-control" type="text" placeholder="Nilai UH 1 0 - 100" pattern="[0-9]{0,3}" name="uh1[]" id="uh1_<?php echo $uhnumb1++;?>"/> 
                                                    <input type="hidden" class="form-control" type="text" placeholder="Nilai UH 2 0 - 100" pattern="[0-9]{0,3}" name="uh2[]" id="uh2_<?php echo $uhnumb2++;?>"/>
                                                    <input type="hidden" class="form-control" type="text" placeholder="Nilai UH 3 0 - 100" pattern="[0-9]{0,3}" name="uh3[]" id="uh3_<?php echo $uhnumb3++;?>"/>
                                                    <input type="hidden" class="form-control" type="text" placeholder="Nilai UH 4 0 - 100" pattern="[0-9]{0,3}" name="uh4[]" id="uh4_<?php echo $uhnumb4++;?>"/>
                                                    <input type="hidden" class="form-control" type="text" placeholder="Nilai UH 5 0 - 100" pattern="[0-9]{0,3}" name="uh5[]" id="uh5_<?php echo $uhnumb5++;?>"/>
                                                    <input type="hidden" class="form-control" type="text" placeholder="Nilai UH 6 0 - 100" pattern="[0-9]{0,3}" name="uh6[]" id="uh6_<?php echo $uhnumb6++;?>"/>
                                                    <input type="hidden" class="form-control" type="text" placeholder="Nilai UH 7 0 - 100" pattern="[0-9]{0,3}" name="uh7[]" id="uh7_<?php echo $uhnumb7++;?>"/>
                                                    <input type="hidden" class="form-control" type="text" placeholder="Nilai UH 8 0 - 100" pattern="[0-9]{0,3}" name="uh8[]" id="uh8_<?php echo $uhnumb8++;?>"/>
                                                    <button type="button" data-clicked="3" class="btn btn-sm btn-info pull-right add" name="add" id="add_<?php echo $addnumb++;?>" style="margin-top: 5px; margin-left: 5px;"><i class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-sm btn-danger pull-right remove" name="remove" id="remove_<?php echo $remnumb++;?>" style="margin-top: 5px;"><i class="fa fa-minus"></i></button>
                                                </td>
                                                <td><textarea class="form-control" placeholder="Keterangan" name="ket_uh[]" rows="2" style="resize: vertical;"></textarea></td>
                                            </tr>
<?php
$noxxx++;
}
?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        </form>
                        <!-- /.panel-body -->
                    </div>
                    
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-11 -->
            </div>
            <!-- /.row -->
<?php } ?>

<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '.add', function(elt) {
            let idElt = elt.target.id;
            let idNum = idElt.substring(4,5);
            //console.log(idNum);
            $('#in_uh_'+ idNum).children('#add_'+ idNum)[0].dataset["clicked"]++;

            if($('#in_uh_'+ idNum).children('#add_'+ idNum)[0].dataset["clicked"] > 10) {
                $('#in_uh_'+ idNum).children('#add_'+ idNum)[0].dataset["clicked"] = 10;
            }

            console.log($('#in_uh_'+ idNum).children()[$('#in_uh_'+ idNum).children('#add_'+ idNum)[0].dataset["clicked"]]);
            $('#in_uh_'+ idNum).children()[$('#in_uh_'+ idNum).children('#add_'+ idNum)[0].dataset["clicked"]].type = "text";
            //console.log(i);
        });

        $(document).on('click', '.remove', function(elt) {
            let idElt = elt.target.id;
            let idNum = idElt.substring(7,8);
            //console.log(idNum);
            if($('#in_uh_'+ idNum).children('#add_'+ idNum)[0].dataset["clicked"] < 3) {
                $('#in_uh_'+ idNum).children('#add_'+ idNum)[0].dataset["clicked"] = 3;
            }
            

            if($('#in_uh_'+ idNum).children('#add_'+ idNum)[0].dataset["clicked"] == 3) {
                $('#in_uh_'+ idNum).children()[$('#in_uh_'+ idNum).children('#add_'+ idNum)[0].dataset["clicked"]].type = "text";
            } else {
                $('#in_uh_'+ idNum).children()[$('#in_uh_'+ idNum).children('#add_'+ idNum)[0].dataset["clicked"]].type = "hidden";
            }
            //console.log(i);
            if($('#in_uh_'+ idNum).children('#add_'+ idNum)[0].dataset["clicked"] == 3) {

            } else {
                $('#in_uh_'+ idNum).children('#add_'+ idNum)[0].dataset["clicked"]--;
            }
        });
    });
</script>