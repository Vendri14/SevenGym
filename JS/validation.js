function showAlert(message) {
    var customAlert = document.getElementById('customAlert');
    customAlert.innerHTML = message;
    customAlert.style.display = 'block';
    customAlert.style.opacity = '1'; // Set opacity to 1 for fade-in effect
    setTimeout(function () {
      hideAlert();
  }, 2000);
}

function hideAlert() {
    var customAlert = document.getElementById('customAlert');
        customAlert.style.display = 'none';

}
function validateForm() {
  // Get input values
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  // Validate username
  if (username === "") {
      showAlert("isi Username!");
      return;
  }

  // Validate password
  if (password === "") {
      showAlert("Isi Password!");
      return;
  }
  if (username !== "" && password !== "") {
    document.getElementById('input').submit();
  }else {
    showAlert("Please fill in both username and password");
}
  // Jika semua Validasi Benar Jalankan 
  
}

function validateRegisterForm(){
  var nama_lengkap = document.getElementById('nama_lengkap').value;
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  var konfirmasi_pass = document.getElementById('konfirmasi_pass').value;
  var tanggal = document.getElementById('tanggal').value;
  var jenis_kelamin = document.getElementById('jenis_kelamin').value;
  var tb = document.getElementById('tb').value;
  var bb = document.getElementById('bb').value;
  var nohp = document.getElementById('nohp').value;

  if (nama_lengkap === "") {
    showAlert("isi Nama Lengkap!");
    return;
  }if (username === "") {
    showAlert("isi Username!");
    return;
  }if (password === "") {
    showAlert("isi Password!");
    return;
  }if (konfirmasi_pass === "") {
    showAlert("isi Konfirmasi Password!");
    return;
  }if (tanggal === "") {
    showAlert("isi Tanggal!");
    return;
  }if (jenis_kelamin === "") {
    showAlert("isi Jenis Kelamin!");
    return;
  }if (tb === "") {
    showAlert("isi Tinggi Badan!");
    return;
  }if (bb === "") {
    showAlert("isi Berat Badan!");
    return;
  }if (nohp === "") {
    showAlert("isi Berat Badan!");
    return;
  }if (nama_lengkap !== "" 
        && username !== "" 
        && password !== "" 
        && konfirmasi_pass !== "" 
        && tanggal !== "" 
        && jenis_kelamin !== "" 
        && tb !== "" 
        && bb !== "" 
        && nohp !== "") {
    document.getElementById('input').sub();
  }else {
    showAlert("Please fill in both username and password");
}


}

 function validateTambahPelanggan(){
  var nama_lengkap = document.getElementById('nama_user').value;
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  var jenis_kelamin = document.getElementById('jenis_kelamin').value;
  var tgl_lahir = document.getElementById('tgl_lahir').value;
  var bb = document.getElementById('bb').value;
  var tb = document.getElementById('tb').value;
  var nohp = document.getElementById('nohp').value;
  var gambar = document.getElementById('gambar').value;


  if (nama_lengkap === "") {
    showAlert("isi Nama Lengkap!");
    return;
  }
  if (username === "") {
    showAlert("isi Username!");
    return;
  }
  if (password === "") {
    showAlert("isi Password!");
    return;
  }
  if (jenis_kelamin === "") {
    showAlert("isi Jenis Kelamin!");
    return;
  }
  if (tgl_lahir === "") {
    showAlert("isi Tgl Lahir!");
    return;
  }
  if (bb === "") {
    showAlert("isi bb!");
    return;
  }
  if (tb === "") {
    showAlert("isi tb!");
    return;
  }
  if (nohp === "") {
    showAlert("isi Nomor HP!");
    return;
  }if (gambar === "") {
    showAlert("Pilih Gambar!");
    return;
  }if (nama_lengkap !== "" 
  && username !== "" 
  && password !== "" 
  && jenis_kelamin !== "" 
  && tgl_lahir !== "" 
  && bb !== "" 
  && tb !== "" 
  && nohp !== ""
  && gambar !== "") {
document.getElementById('tambah').submit();
}


}
 function validateUpdatePelanggan(){
  var nama_lengkap = document.getElementById('nama_user').value;
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  var jenis_kelamin = document.getElementById('jenis_kelamin').value;
  var tgl_lahir = document.getElementById('tgl_lahir').value;
  var bb = document.getElementById('bb').value;
  var tb = document.getElementById('tb').value;
  var nohp = document.getElementById('nohp').value;
  var gambar = document.getElementById('imglama').value;


  if (nama_lengkap === "") {
    showAlert("isi Nama Lengkap!");
    return;
  }
  if (username === "") {
    showAlert("isi Username!");
    return;
  }
  if (password === "") {
    showAlert("isi Password!");
    return;
  }
  if (jenis_kelamin === "") {
    showAlert("isi Jenis Kelamin!");
    return;
  }
  if (tgl_lahir === "") {
    showAlert("isi Tgl Lahir!");
    return;
  }
  if (bb === "") {
    showAlert("isi bb!");
    return;
  }
  if (tb === "") {
    showAlert("isi tb!");
    return;
  }
  if (nohp === "") {
    showAlert("isi Nomor HP!");
    return;
  }if (gambar === "") {
    showAlert("Pilih Gambar!");
    return;
  }if (nama_lengkap !== "" 
  && username !== "" 
  && password !== "" 
  && jenis_kelamin !== "" 
  && tgl_lahir !== "" 
  && bb !== "" 
  && tb !== "" 
  && nohp !== ""
  && gambar !== "") {
document.getElementById('tambah').submit();
}


}

function validateTambahPelatih(){
  var nama_lengkap = document.getElementById('nama_pelatih').value;
  var deskripsi = document.getElementById('deskripsi').value;
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  var jenis_kelamin = document.getElementById('jenis_kelamin').value;
  var tgl_lahir = document.getElementById('date').value;
  var bb = document.getElementById('bb').value;
  var tb = document.getElementById('tb').value;
  var nohp = document.getElementById('nohp').value;
  var harga = document.getElementById('harga').value;
  var gambar = document.getElementById('gambar').value;


  if (nama_lengkap === "") {
    showAlert("isi Nama Lengkap!");
    return;
  }
  if (deskripsi === "") {
    showAlert("isi Deskripsi!");
    return;
  }
  if (username === "") {
    showAlert("isi username!");
    return;
  }
  if (password === "") {
    showAlert("isi Password!");
    return;
  }
  if (jenis_kelamin === "") {
    showAlert("isi Jenis Kelamin!");
    return;
  }
  if (tgl_lahir === "") {
    showAlert("isi Tanggal Lahir!");
    return;
  }
  if (bb === "") {
    showAlert("isi Berat Badan!");
    return;
  }
  if (tb === "") {
    showAlert("isi Tinggi Badan!");
    return;
  }if (nohp === "") {
    showAlert("isi Nomor Hp!");
    return;
  }if (harga === "") {
    showAlert("Isi Harga!");
    return;
  }if (gambar === "") {
    showAlert("Pilih Gambar!");
    return;
  }if (nama_lengkap !== "" 
  && username !== "" 
  && password !== "" 
  && jenis_kelamin !== "" 
  && tgl_lahir !== "" 
  && bb !== "" 
  && tb !== "" 
  && nohp !== ""
  && harga !== ""
  && gambar !== "") {
document.getElementById('tambah').submit();
}


}

function validateUpdatePelatih(){
  var nama_lengkap = document.getElementById('nama_pelatih').value;
  var deskripsi = document.getElementById('deskripsi').value;
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  var jenis_kelamin = document.getElementById('jenis_kelamin').value;
  var tgl_lahir = document.getElementById('date').value;
  var bb = document.getElementById('bb').value;
  var tb = document.getElementById('tb').value;
  var nohp = document.getElementById('nohp').value;
  var harga = document.getElementById('harga').value;
  var gambar = document.getElementById('gambarlama').value;


  if (nama_lengkap === "") {
    showAlert("isi Nama Lengkap!");
    return;
  }
  if (deskripsi === "") {
    showAlert("isi Deskripsi!");
    return;
  }
  if (username === "") {
    showAlert("isi username!");
    return;
  }
  if (password === "") {
    showAlert("isi Password!");
    return;
  }
  if (jenis_kelamin === "") {
    showAlert("isi Jenis Kelamin!");
    return;
  }
  if (tgl_lahir === "") {
    showAlert("isi Tanggal Lahir!");
    return;
  }
  if (bb === "") {
    showAlert("isi Berat Badan!");
    return;
  }
  if (tb === "") {
    showAlert("isi Tinggi Badan!");
    return;
  }if (nohp === "") {
    showAlert("isi Nomor Hp!");
    return;
  }if (harga === "") {
    showAlert("Isi Harga!");
    return;
  }if (gambar === "") {
    showAlert("Pilih Gambar!");
    return;
  }if (nama_lengkap !== "" 
  && username !== "" 
  && password !== "" 
  && jenis_kelamin !== "" 
  && tgl_lahir !== "" 
  && bb !== "" 
  && tb !== "" 
  && nohp !== ""
  && harga !== ""
  && gambar !== "") {
document.getElementById('simpan').submit();
}


}

function validateTambahLangganan(){
  var namauser = document.getElementById('inputnamauser').value;
  var bulan = document.getElementById('months_input').value;
  var gambar = document.getElementById('months_input').value;
  
  if (namauser === "") {
    showAlert("Pilih Pelanggan Terlebih Dahulu!");
    return;
  }if (bulan === "") {
    showAlert("Isi Lama Beralangganan!");
    return;
  }if (namauser !== ""
  && bulan !== "") {
document.getElementById('simpan').submit();
}


}

function checkDatabase() {

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

          document.getElementById("result").innerHTML = this.responseText;
      }
  };

  xhttp.open("GET", "check_database.php", true);
  

  xhttp.send();
}

