<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sekolah Madani</title>

    <!-- Custom CSS - Include with every page -->
    <link href="../assets/css/custom-css.css" rel="stylesheet">
    <link href="../assets/css/style-animate.css" rel="stylesheet">

    <!-- Core CSS - Include with every page -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">


</head>

<body id="custombg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Sekolah Smart Madani - Login</h3></center>
                    </div>
                    <div class="panel-body">
                        <form method="post" name="loginform" action="ceklog.php" onSubmit="

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

    <div class="main-container">
  <div class="img img-1"></div>
  <div class="img img-2"></div>
  <div class="img img-3"></div>
  <div class="img img-4"></div>
  <div class="img img-5"></div>
  <div class="title title-1">Lukmen</div>
  <div class="title title-2">Bowok</div>
  <div class="title title-3">Nidya</div>
  <div class="title title-4">Fikri</div>
  <div class="title title-5">Fii</div>
  <div class="info-container">
    <h3>CSS gallery powered by <a href="http://animista.net" target="_blank">Animista.net</a></h3>
    <h4>Appearing animations</h4>
    <p><a href="http://animista.net/play/background/ken-burns/kenburns-top" target="_blank">kenburns-top</a>, <a href="http://animista.net/play/background/ken-burns/kenburns-bottom" target="_blank">kenburns-bottom</a>, <a href="http://animista.net/play/background/ken-burns/kenburns-left" target="_blank">kenburns-left</a>, <a href="http://animista.net/play/background/ken-burns/kenburns-right" target="_blank">kenburns-right</a></p>
    <p><a href="http://animista.net/play/text/focus-in/focus-in-contract" target="_blank">focus-in-contract</a></p>
    <p><a href="http://animista.net/play/entrances/slide-in/slide-in-bottom" target="_blank">slide-in-bottom</a></p>
    <h4>Disappearing animations</h4>
    <p><a href="http://animista.net/play/exits/fade-out/fade-out" target="_blank">fade-out</a></p>
    <p><a href="http://animista.net/play/text/blur-out/text-blur-out" target="_blank">text-blur-out</a></p>
  </div>
  
</div>
<div class="preloaded"></div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/PreloadJS/1.0.1/preloadjs.js'></script>

  

    <script  src="js/index.js"></script>



    <!-- Core Scripts - Include with every page -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="../assets/js/sb-admin.js"></script>
    


</body>



</html>
