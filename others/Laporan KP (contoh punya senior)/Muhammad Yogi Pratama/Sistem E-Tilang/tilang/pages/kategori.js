function cek_kategori(){
	//ambil nilai combobox
	var cb = document.getElementById("cb").value;
	//ambil objek field
	var field = document.getElementById("field");
	//enable field ama button
	var button = document.getElementById("tombol");
	field.disabled = false;
	button.disabled = false;
	//cek nilai combobox
	if(cb == "notilang"){
		//kondisi search by no tilang
		//set input type = text, placeholder = masukkan no tilang
		field.type = "text";
		field.placeholder = "Masukkan Nomor Tilang";
	}
	else if(cb == "nama"){
		//kondisi search by nama
		//set input type = text, placeholder = masukkan nama
		field.type = "text";
		field.placeholder = "Masukkan Nama";
	}
	else if(cb == "tanggal"){
		//kondisi search by tanggal
		field.type = "date";
	}
}

function buttonHandling(){
	//ambil objek button
	var btn = document.getElementById("tombol");
	//ambil objek field
	var field = document.getElementById("field");
	
	//cek isi cb dan field
	if(field.value == "" || field.value == null){
		btn.disabled = true;
	}
	else{
		btn.disabled = false;
	}
}