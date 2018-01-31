<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>CSS Gallery</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

      <!-- Core CSS - Include with every page -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../assets/css/custom-css.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="../assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">

  
</head>

<body>

<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading" style="z-index:990;">
                        <center><h3 class="panel-title">Sekolah Smart Madani - Login</h3></center>
                    </div>
                    <div class="panel-body">
                        <form method="post" name="loginform" action="../ceklog.php" onSubmit="

                        var userValid = /^[0-9\-]*$/;
                        var user      = loginform.username.value;
                        var pass      = loginform.password.value;
                        var pesan = '';
                         
                        if (pass == '') {
                            pesan = '> Password harus diisi\n';
                        }
                         
                        if (user == '') {
                            pesan = '> NIP/NIS harus diisi\n';
                        }
                         
                        if (user != '' && !user.match(userValid)) {
                            pesan += '> NIP/NIS tidak valid\n';
                        }
                        
                        if (pesan != '') {
                            alert('Maaf, ada kesalahan saat login: \n'+pesan);
                            return false;
                        }
                        return true;

                        ">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="NIP/NIS" name="username"  autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="main-container" style="z-index: -1;">
  <div class="img img-1"></div>
  <div class="img img-2"></div>
  <div class="img img-3"></div>
  <div class="img img-4"></div>
  <div class="img img-5"></div>
  <div class="title title-1">SMP Negeri 1 Pekanbaru</div>
  <div class="title title-2">SMP Negeri 2 Pekanbaru</div>
  <div class="title title-3">SMP Negeri 3 Pekanbaru</div>
  <div class="title title-4">SMP Negeri 5 Pekanbaru</div>
  <div class="title title-5">SMP Negeri 6 Pekanbaru</div>
  <div class="info-container">
    <h3>Sekolah Smart Madani - Information System</h3>
    <h4>Frontend Programmer</h4>
    <p><a href="instagram.com/lukmention">Lukmannil</a> Hakim</p>
    <p>M Muflih <a href="instagram.com/muflih_fikri">Fikri</a> Al Azdi</p>
    <p><a href="instagram.com/rahmat_wib21">Rahmat</a> Wibowo</p>
    <h4>Backend Programmer</h4>
    <p><a href="instagram.com/nidyans">Nidya</a> Nur Syafiqoh</p>
  </div>
  
</div>
<div class="preloaded"></div>


  <script src='https://cdnjs.cloudflare.com/ajax/libs/PreloadJS/1.0.1/preloadjs.js'></script>

  

    <script  src="js/index.js"></script>

<!-- Core Scripts - Include with every page -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="../assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="../assets/js/sb-admin.js"></script>


</body>

</html>
