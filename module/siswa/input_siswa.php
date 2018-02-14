
<?php
if($_GET['act']=="input"){
	?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Input Data Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <script>
                                        function preview_photo(imgg,idpreview){
                                            var gb = imgg.files;
                                            
                                            for (var i = 0; i < gb.length; i++){
                                                var gbPreview = gb[i];
                                                var imageType = /image.*/;
                                                var preview=document.getElementById(idpreview);            
                                                var reader = new FileReader();
                                                
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
                                                }else{
                                                    alert("Type file tidak sesuai. Khusus image.");
                                                }
                                               
                                            }    
                                        }
                                    </script>
                                    <form method="post" enctype="multipart/form-data" name="formin" role="form" action="././module/siswa/prosessiswa.php?aksi=tambah"
                                    onSubmit="

                                    var nohpValid = /^[0-9\-]*$/;
                                    var nohp      = formin.telp_ortu.value;
                                    var pass      = formin.pass_siswa.value;
                                    var pass1     = formin.pass_siswa1.value;
                                    var namaValid = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
                                    var nama      = formin.nama_siswa.value;
                                    var nisnValid = /^[0-9]*$/;
                                    var nisn      = formin.nisn.value;
                                    var kelas     = formin.id_kls.value;
                                    var ibu       = formin.nama_ibu.value;
                                    var ayah      = formin.nama_ayah.value;
                                    var alamat    = formin.alamat_siswa.value;
                                    var minchar   = 6;
                                    var pesan = '';
                                     
                                    if (pass != pass1) {
                                        pesan = '> Password harus sama\n';
                                    }
                                    
                                    if (kelas == '') {
                                        pesan = '> Harus pilih kelas\n';
                                    } 

                                    if (alamat == '') {
                                        pesan = '> Alamat harus diisi\n';
                                    } 

                                    if (nisn != '' && !nisn.match(nisnValid)) {
                                        pesan = '> Masukkan NISN valid\n';
                                    }
                                     
                                    if (nama != '' && !nama.match(namaValid)) {
                                        pesan += '> Nama tidak valid\n';
                                    }

                                    if (ibu != '' && !ibu.match(namaValid)) {
                                        pesan += '> Nama Ibu tidak valid\n';
                                    }

                                    if (ayah != '' && !ayah.match(namaValid)) {
                                        pesan += '> Nama Ayah tidak valid\n';
                                    }

                                    if (formin.pass_siswa.value.length < minchar) {
                                        pesan += '> Password minimal 6 karakter\n';
                                    }


                                    if (formin.alamat.value.length < minchar) {
                                        pesan += '> Alamat terlalu singkat\n';
                                    }
                                    
                                    if (pesan != '') {
                                        alert('Maaf, ada kesalahan saat submit: \n'+pesan);
                                        return false;
                                    }
                                    return true;

                                    ">

                                <div class="col-lg-6">

                                        <div class="form-group">
                                            <input type="hidden" name="level" value="<?php echo "$level"; ?>">
                                        </div>

                                        

                                        <div class="form-group" data-provides="fileupload" style="border-bottom: ">
                                            <label>Foto</label>
                                            <center><img id="preview" src="" alt="" height="200px" style="padding-bottom: 10px;" /></center>
                                            <input type="file" name='foto_siswa' accept="image/*" onchange="preview_photo(this,'preview')">
                                        </div>

                                        <div class="form-group">
                                            <label>NISN</label>
                                            <input class="form-control" placeholder="NISN" name="nisn" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Nama" name="nama_siswa" required>
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

                                        <?php
                                            $sqlc=mysql_query("select id_sklh from sekolah where nama_sklh='$nmsklh'");
                                            $countc=mysql_num_rows($sqlc);
                                            $rsc=mysql_fetch_array($sqlc);
                                            $idsk=$rsc['id_sklh'];
                                        ?>
                                        <input type="hidden" name="id_sklh" value="<?php echo $idsk; ?>">

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat_siswa" rows="3" required="required"></textarea>
                                        </div>

</div>

                                <div class="col-lg-6">
                                        
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="id_kls">
                                                <option value="">--- Pilih Kelas ---</option>
                                            <?php

                                                $ssql=mysql_query("select * from kelas where id_sklh='$idsk'");
                                                $scount=mysql_num_rows($ssql);
                                                while($srs=mysql_fetch_array($ssql))
                                                {
                                                        $idid=$srs['id_kls'];
                                                        $nmnm=$srs['nama_kls'];
                                                    ?>
                                                    <option value="<?php echo $idid; ?>"> <?php echo $nmnm ?></option>
                                                    <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group input-group">
                                            <label>Nomor Telepon Orang Tua</label>
                                            <input type="text" class="form-control" placeholder="No Telepon" name="telp_ortu" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input class="form-control" placeholder="Nama" name="nama_ayah" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input class="form-control" placeholder="Nama" name="nama_ibu" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_siswa" value="" type="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Ulangi Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_siswa1" type="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Akun</label>
                                            <div class="onoffswitch4">
                                                <input type="checkbox" name="status_akun" class="onoffswitch4-checkbox" id="myonoffswitch4" value="4">
                                                <label class="onoffswitch4-label" for="myonoffswitch4">
                                                    <span class="onoffswitch4-inner"></span>
                                                    <span class="onoffswitch4-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit</button>
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
					<h3 class="page-header"><strong>Edit Data Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                            	$sql=mysql_query("select * from siswa where nisn='$_GET[nisn]'");
								$rs=mysql_fetch_array($sql);
?>
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
                                                }
                                               
                                            }    
                                        }
                                    </script>
                                    <form method="post" name="formin" enctype="multipart/form-data" role="form" action="././module/siswa/prosessiswa.php?aksi=edit"
                                    onSubmit="

                                    var nohpValid = /^[0-9\-]*$/;
                                    var nohp      = formin.telp_ortu.value;
                                    var pass      = formin.pass_siswa.value;
                                    var pass1     = formin.pass_siswa1.value;
                                    var namaValid = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
                                    var nama      = formin.nama_siswa.value;
                                    var alamat    = formin.alamat_siswa.value;
                                    var nisnValid = /^[0-9]*$/;
                                    var nisn      = formin.nisn.value;
                                    var kelas     = formin.id_kls.value;
                                    var ibu       = formin.nama_ibu.value;
                                    var ayah      = formin.nama_ayah.value;
                                    var minchar   = 6;
                                    var pesan = '';
                                     
                                    if (pass != pass1) {
                                        pesan = '> Password harus sama\n';
                                    }
                                    
                                    if (kelas == '') {
                                        pesan = '> Harus pilih kelas\n';
                                    } 

                                    if (alamat == '') {
                                        pesan = '> Alamat harus diisi\n';
                                    } 

                                    if (nisn != '' && !nisn.match(nisnValid)) {
                                        pesan = '> Masukkan NISN valid\n';
                                    }
                                     
                                    if (nama != '' && !nama.match(namaValid)) {
                                        pesan += '> Nama tidak valid\n';
                                    }

                                    if (ibu != '' && !ibu.match(namaValid)) {
                                        pesan += '> Nama Ibu tidak valid\n';
                                    }

                                    if (ayah != '' && !ayah.match(namaValid)) {
                                        pesan += '> Nama Ayah tidak valid\n';
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

                                            <center><img class="gambar" src="assets/img/<?php echo $rs['foto_siswa']; ?>" alt="" height="200px" style="padding-bottom: 10px;" /></center>
                                            <center><img id="previews" src="" alt="" height="200px" style="padding-bottom: 10px;" /></center>
                                            <input id="file" type="file" name='foto_siswa' accept="image/*" onchange="$('.gambar').hide();preview_photo(this,'previews');">
                                        </div>

                                        <input type="hidden" name="foto_lama" value="<?php $rs[foto_siswa] ?>">

                                        <div class="form-group">
                                            <label>NISN</label>
                                            <input class="form-control" value="<?php echo "$rs[nisn]"; ?>" placeholder="NISN" name="nisn" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" value="<?php echo "$rs[nama_siswa]"; ?>" placeholder="Nama" name="nama_siswa" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                        
                                        <?php
if($rs['jk']=="L"){
?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="L" checked>Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="P">
                                                    Perempuan
                                                </label>
                                            </div>
<?php
}else{
?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="L">Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="P" checked>Perempuan
                                                </label>
                                            </div>
<?php
}
?>
                                        </div>

                                        <?php
                                            $sqlc=mysql_query("select id_sklh from sekolah where nama_sklh='$nmsklh'");
                                            $countc=mysql_num_rows($sqlc);
                                            $rsc=mysql_fetch_array($sqlc);
                                            $idsk=$rsc['id_sklh'];
                                        ?>

                                        <input type="hidden" name="id_sklh" value="<?php echo $idsk; ?>">

                                        <div class="form-group">
                                            <?php $almt=$rs["alamat_siswa"]; ?>
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat_siswa" rows="3"><?php echo $rs['alamat_siswa']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="id_kls">
                                                <option value="">--- Pilih Kelas ---</option>
                                            <?php

                                                $ssql=mysql_query("select * from kelas where id_sklh='$idsk'");
                                                $scount=mysql_num_rows($ssql);
                                                while($srs=mysql_fetch_array($ssql))
                                                {
                                                        $idid=$srs['id_kls'];
                                                        $nmnm=$srs['nama_kls'];
                                                    ?>
                                                    <option value="<?php echo $idid; ?>"

                                                    <?php 
                                                        if($idid==$rs['id_kls']){
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
                                        <div class="form-group input-group">
                                            <label>Nomor Telepon Orang Tua</label>
                                            <input type="text" class="form-control" value="<?php echo $rs['telp_ortu']; ?>" placeholder="No Telepon" name="telp_ortu" required>
                                        </div>
</div>

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input class="form-control" placeholder="Nama" name="nama_ayah" value="<?php echo $rs['nama_ayah']; ?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input class="form-control" placeholder="Nama" name="nama_ibu" value="<?php echo $rs['nama_ibu']; ?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_siswa" type="password" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Ulangi Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_siswa1" type="password" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Status Akun</label>
                                            <?php 
                                                if($rs['status_akun']==0){ ?>
                                                <div class="onoffswitch4">
                                                    <input type="checkbox" name="status_akun" class="onoffswitch4-checkbox" id="myonoffswitch4" value="4">
                                            <?php } 
                                                else{
                                            ?>
                                                <div class="onoffswitch4">
                                                    <input type="checkbox" name="status_akun" class="onoffswitch4-checkbox" id="myonoffswitch4" value="4" checked>
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