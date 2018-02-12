
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