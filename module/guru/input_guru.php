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
                    <h3 class="page-header"><strong>Input Data Guru</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default"> 
                        <div class="panel-heading">
                            Input Data Guru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                
                                    
                                    <form method="post" enctype="multipart/form-data" name="formin" role="form" action="././module/guru/prosesguru.php?aksi=tambah" 
                                    onSubmit="

                                    var nohpValid = /^[0-9\-]*$/;
                                    var nohp      = formin.telp_guru.value;
                                    var pass      = formin.pass_guru.value;
                                    var pass1     = formin.pass_guru1.value;
                                    var namaValid = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
                                    var nama      = formin.nama_guru.value;
                                    var nisnValid = /^[0-9]*$/;
                                    var nisn      = formin.nip.value;                       
                                    var alamat    = formin.alamat_guru.value;
                                    var minchar   = 6;
                                    var pesan = '';
                                     
                                    if (pass != pass1) {
                                        pesan = '> Password harus sama\n';
                                    }
                                    
                                    if (alamat == '') {
                                        pesan = '> Alamat harus diisi\n';
                                    } 

                                    if (nip != '' && !nip.match(nipValid)) {
                                        pesan = '> Masukkan NIP valid\n';
                                    }
                                     
                                    if (nama != '' && !nama.match(namaValid)) {
                                        pesan += '> Nama tidak valid\n';
                                    }
                                 
                                    if (formin.pass_guru.value.length < minchar) {
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
                                            <label>FOTO</label>
                                            <center><img id="preview" src="" alt="" height="200px" style="padding-bottom: 10px;"/></center>
                                            <input id="file" type="file" name="foto_guru" accept="image/*" onchange="preview_photo(this,'preview');">
                                        </div>
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input class="form-control" placeholder="NIP" name="nip">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Nama" name="nama_guru">
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
                                            <label>Status Wali Kelas</label>
                                            <input class="form-control" placeholder="0/1" name="wk_status">
                                        </div>
                                        
                                        <?php
                                            $sqlc=mysql_query("select id_sklh from sekolah where nama_sklh='$nmsklh'");
                                            $countc=mysql_num_rows($sqlc);
                                            $rsc=mysql_fetch_array($sqlc);
                                            $idsk=$rsc['id_sklh'];
                                        ?>
                                        <input type="hidden" name="id_sklh" value="<?php echo $idsk; ?>">
                                        
                                        
</div>

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat_guru" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input class="form-control" placeholder="No Telp" name="telp_guru">
                                        </div>             
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_guru" value="" type="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Ulangi Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_guru1" type="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Akun</label>
                                            <div class="onoffswitch4">
                                                <input type="checkbox" name="status_akun" class="onoffswitch4-checkbox" id="myonoffswitch4" value="3">
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
if($_GET['act']=="edit_guru"){
    ?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Edit Data Guru</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Guru
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                                $sql=mysql_query("select * from guru where nip='$_GET[nip]'");
                                $rs=mysql_fetch_array($sql);
?>
                                
                                    <form method="post" name="formin" enctype="multipart/form-data" role="form" action="././module/guru/prosesguru.php?aksi=update"
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

                                            <center><img class="gambar" src="assets/img/<?php echo $rs['foto_guru']; ?>" alt="" height="200px" style="padding-bottom: 10px;" /></center>
                                            <center><img id="previews" src="" alt="" height="200px" style="padding-bottom: 10px;" /></center>
                                            <input id="file" type="file" name='foto_guru' accept="image/*" onchange="$('.gambar').hide();preview_photo(this,'previews');">
                                        </div>

                                        <input type="hidden" name="foto_lama" value="<?php $rs[foto_guru] ?>">
                                        
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input class="form-control" placeholder="NIP" name="nip" value="<?php echo "$rs[nip]"; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Nama" name="nama_guru" value="<?php echo "$rs[nama_guru]"; ?>">
                                        </div>
                                        <div class="form-group">
         
                                           <label>Jenis Kelamin</label>
        <?php if($rs['jk']=="L"){ ?>
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

</div>

                                <div class="col-lg-6">

                                        <div class="form-group">
                                            <?php $almt=$rs["alamat_guru"]; ?>
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat_guru" rows="3"><?php echo "$rs[alamat_guru]"; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input type="text" class="form-control" placeholder="No Telp" name="telp_guru" value="<?php echo "$rs[telp_guru]"; ?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_guru" type="password" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Ulangi Password</label>
                                            <input class="form-control" placeholder="Password" name="pass_guru1" type="password" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Status Akun</label>
                                            <?php 
                                                if($rs['status_akun']==0){ ?>
                                                <div class="onoffswitch4">
                                                    <input type="checkbox" name="status_akun" class="onoffswitch4-checkbox" id="myonoffswitch4" value="3">
                                            <?php } 
                                                else{
                                            ?>
                                                <div class="onoffswitch4">
                                                    <input type="checkbox" name="status_akun" class="onoffswitch4-checkbox" id="myonoffswitch4" value="3" checked>
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
             