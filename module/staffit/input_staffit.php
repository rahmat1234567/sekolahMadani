                                    <script>
                                        function preview_photo(imgg,idpreview){
                                            var gb = imgg.files;
                                            
                                            for (var i = 0; i < gb.length; i++){
                                                var gbPreview = gb[i];
                                                var imageType = /image.*/;
                                                var preview=document.getElementById(idpreview);            
                                                var reader = new FileReader();
                                                var file_size = $('#file')[0].files[0].size;
                                                
                                                if (gbPreview.type.match(imageType)) {

                                                    if(file_size>512000){
                                                        alert("File maksimal berukuran 512kb");
                                                        document.getElementById("file").value = "";
                                                        return false;
                                                    }

                                                    preview.file = gbPreview;
                                                    reader.onload = (function(element) { 
                                                        return function(e) { 
                                                            element.src = e.target.result; 
                                                        }; 
                                                    })(preview);
                                                    reader.readAsDataURL(gbPreview);
                                                }
                                                else{
                                                    alert("Type file tidak sesuai. Khusus image.");
                                                    document.getElementById("file").value = "";
                                                    return false;
                                                }
                                               
                                            }    
                                        }
                                    </script>
<?php
if($_GET['act']=="input"){
	?>
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Input Data Pegawai IT</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Pegawai IT
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="post" name="formin" enctype="multipart/form-data" role="form" action="././module/staffit/prosesstaffit.php?aksi=edit"
                                    onSubmit="

                                    var nohpValid = /^[0-9\-]*$/;
                                    var nohp      = formin.telp_pgw.value;
                                    var pass      = formin.pass_pgw.value;
                                    var pass1     = formin.pass_pgw1.value;
                                    var namaValid = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
                                    var nama      = formin.nama_pgw.value;
                                    var alamat    = formin.alamat_siswa.value;
                                    var nisnValid = /^[0-9]*$/;
                                    var sklh     = formin.id_sklh.value;
                                    var minchar   = 6;
                                    var pesan = '';
                                     
                                    if (pass != pass1) {
                                        pesan = '> Password harus sama\n';
                                    }
                                    
                                    if (sklh == '') {
                                        pesan = '> Harus pilih Sekolah\n';
                                    } 

                                    if (alamat == '') {
                                        pesan = '> Alamat harus diisi\n';
                                    } 

                                    if (nohp != '' && !nohp.match(nohpValid)) {
                                        pesan = '> Masukkan No HP valid\n';
                                    }
                                     
                                    if (nama != '' && !nama.match(namaValid)) {
                                        pesan += '> Nama tidak valid\n';
                                    }

                                    if (pass != '' && formin.pass_siswa.value.length < minchar) {
                                        pesan += '> Password minimal 6 karakter\n';
                                    }
                                    
                                    if (pesan != '') {
                                        alert('Maaf, ada kesalahan saat submit: \n'+pesan);
                                        return false;
                                    }
                                    return true;

                                    ">

                                <div class="col-lg-6">
										<input type="hidden" name="level" value="<?php echo "$level"; ?>">


                                        <div class="form-group" data-provides="fileupload" style="border-bottom: " >
                                            <label>Foto</label>

                                            <center><img id="previews" src="" alt="" height="200px" style="padding-bottom: 10px;" /></center>
                                            <input id="file" type="file" name='foto_pgw' accept="image/*" onchange="preview_photo(this,'previews');">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Nama" name="nama_pgw" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="L" 
                                                    checked>Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="P">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat_pgw" rows="3" required="required"></textarea>
                                        </div>
								</div>

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_pgw" type="password" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Ulangi Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_pgw1" type="password" required>
                                        </div>

                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input class="form-control" placeholder="No Telp" name="telp_pgw" required>
                                        </div>
										<div class="form-group">
                                            <label>Sekolah</label>
                                            <select class="form-control" name="id_sklh">
                                                <option value="">--- Pilih Sekolah ---</option>
                                            <?php

                                                $ssql=mysql_query("select * from sekolah ");
                                                $scount=mysql_num_rows($ssql);
                                                while($srs=mysql_fetch_array($ssql))
                                                {
                                                        $idid=$srs['id_sklh'];
                                                        $nmnm=$srs['nama_sklh'];
                                                    ?>
                                                    <option value="<?php echo $idid; ?>"> <?php echo $nmnm ?></option>
                                                    <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Akun</label>
                                            <div class="onoffswitch4">
                                                <input type="checkbox" name="status_akun" class="onoffswitch4-checkbox" id="myonoffswitch4" value="2">
                                                <label class="onoffswitch4-label" for="myonoffswitch4">
                                                    <span class="onoffswitch4-inner"></span>
                                                    <span class="onoffswitch4-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" value="simpan" class="btn btn-default">Submit Button</button>
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
if($_GET['act']=="edit"){
	?>
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Edit Data Staff IT</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Staff IT
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                            	$sql=mysql_query("select * from pegawai where nik='$_GET[nik]'");
								$rs=mysql_fetch_array($sql);
?>
                                    <form method="post" role="form" action="././module/staffit/prosesstaffit.php?aksi=edit">
<input type="hidden" name="nik" value="<?php echo $_GET['nik'] ?>" />
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>FOTO</label>
                                            <input style="padding-bottom:3%;" type="file" name="foto_pgw" value="<?php echo "$rs[foto_pgw]"; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Nama" name="nama_pgw" value="<?php echo "$rs[nama_pgw]"; ?>">
                                        </div>
                                        <div class="form-group">
                                             <label>Jenis Kelamin</label>

                                        <?php 
if($rs['jk']=="L"){
?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="L" 
                                                    checked>Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="P">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
<?php } ?>
        <?php if($rs['jk']=="P"){ ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="L" 
                                                    >Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="P" checked>
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
<?php } ?>
										<div class="form-group">
                                            <label>Alamat</label>
                                            <?php $almt=$rs["alamat_pgw"]; ?>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat_pgw" value="<?php echo $almt; ?>" rows="3"></textarea>
                                        </div>
</div>

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_pgw" type="password" value="">
                                            <input class="form-control" type="hidden" name="pass_lama" value="<?php echo "$rs[pass_pgw]"; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input class="form-control" placeholder="No Telp" name="telp_pgw" value="<?php echo "$rs[telp_pgw]"; ?>">
                                        </div>
										<div class="form-group">
                                            <label>Sekolah</label>
                                            <select class="form-control" name="id_sklh">
                                                <option value="">--- Pilih Sekolah ---</option>
                                            <?php

                                                $ssql=mysql_query("select * from sekolah");
                                                $scount=mysql_num_rows($ssql);
                                                while($srs=mysql_fetch_array($ssql))
                                                {
                                                        $idid=$srs['id_sklh'];
                                                        $nmnm=$srs['nama_sklh'];
                                                    ?>
                                                    <option value="<?php echo $idid; ?>"

                                                    <?php 
                                                        if($idid==$rs['id_sklh']){
                                                            echo "selected";
                                                        }
                                                        else{
                                                            echo"";
                                                        }
                                                    ?>

                                                    > <?php echo $nmnm ?></option>
                                                    <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Status Akun</label>
                                            <?php 
                                                if($rs['status_akun']==0){ ?>
                                                <div class="onoffswitch4">
                                                    <input type="checkbox" name="status_akun" class="onoffswitch4-checkbox" id="myonoffswitch4" value="2">
                                            <?php } 
                                                else{
                                            ?>
                                                <div class="onoffswitch4">
                                                    <input type="checkbox" name="status_akun" class="onoffswitch4-checkbox" id="myonoffswitch4" value="2" checked>
                                            <?php } ?>
                                                <label class="onoffswitch4-label" for="myonoffswitch4">
                                                    <span class="onoffswitch4-inner"></span>
                                                    <span class="onoffswitch4-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success">Edit Data</button>
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
             