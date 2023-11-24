<script src="../JS/validationn.js"></script>
<?php
require 'konesi.php';

if (!isset($_POST['submit'])) {

$nama_lengkap = $_POST["nama_pelanggan"];
$username = $_POST["username"];
$password = $_POST["password"];
$konfirpass = $_POST["repass"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$tb = $_POST["tb"];
$bb = $_POST["bb"];
$nohp = $_POST["nohp"];

$queryuser = " INSERT INTO user VALUES ('','$username','$password','2')";
$querypelanggan = "INSERT INTO pelanggan VALUES ('','$nama_lengkap','$tb','$bb','','$nohp','$tanggal_lahir','$jenis_kelamin',(SELECT user.id_user FROM user order by user.id_user desc limit 1),'2','0')";
// $querypelanggan = "INSERT INTO pelanggan (id_pelanggan,nama_pelanggan,tb,bb,profil_pelanggan,nohp,tanggal_lahir,jenis_kelamin,id_user,id_level,id_trainner) VALUES ('','$nama_lengkap','$tb','$bb','','$nohp','$tanggal_lahir','$jenis_kelamin',(SELECT user.id_user FROM user order by user.id_user desc limit 1),'2','')";

      mysqli_query($koneksi,$queryuser);
      mysqli_query($koneksi,$querypelanggan);
      if (mysqli_affected_rows($koneksi) > 0) {
         echo '<script>showAlert("Berhasil Register");</script>';
         echo '<script>window.location = "../Login/login.php";</script>';
      }
  
}




// $result = mysqli_query($koneksi, $query_sql);

// if($result){
    
// }else{
//     echo "Gagal " .mysqli_error($koneksi);
// }
?>