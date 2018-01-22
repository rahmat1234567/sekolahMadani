<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sekolah Madani</title>

    <!-- Custom CSS - Include with every page -->
    <link href="assets/css/custom-css.css" rel="stylesheet">

    <!-- Core CSS - Include with every page -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">


</head>

<body id="custombg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Sekolah Smart Madani - Login</h3><center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" name="loginform" action="ceklog.php" onSubmit="return valid()">
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

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>
    <script>
        function valid(){
            var userValid = /^[0-9\-]*$/;
            var user      = loginform.username.value;
            var pass      = loginform.password.value;
            
            var pesan = '';
             
            if (pass1 == '') {
                pesan = '- Password harus diisi\n';
            }
             
            if (user == '') {
                pesan = '- Nama harus diisi\n';
            }
             
            if (user != '' && !user.match(userValid)) {
                pesan += '- NIP/NIS tidak valid\n';
            }
            
            if (pesan != '') {
                alert('Maaf, ada kesalahan saat login : \n'+pesan);
                return false;
            }
        return true
        }
    </script>


</body>



</html>
