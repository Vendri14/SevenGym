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
    document.getElementById('input').submit();
  }else {
    showAlert("Please fill in both username and password");
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

