function valids(){
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
    return true;
}