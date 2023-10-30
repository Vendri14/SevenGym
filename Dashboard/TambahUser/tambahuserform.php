<?php
$server     = "localhost";
$username   = "root";
$password   = "";
$db         = "sevengym";
$koneksi    = mysqli_connect($server,$username,$password,$db);

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal : " .mysqli_connect_error(); 
}

$nama_pelanggan = $_POST["nama_user"];
$usernm = $_POST["username"];
$pass = $_POST["password"];
$tgl_lhr = $_POST["tanggal_lahir"];
$gender = $_POST["jenis_kelamin"];
$tingban = $_POST["tb"];
$berban = $_POST["bb"];
$hp = $_POST["nohp"];

$query_sql = "INSERT INTO user (nama_lengkap, username, password, tanggal_lahir, jenis_kelamin, tb, bb, nohp, status) 
VALUES ('$nama_pelanggan','$usernm','$pass','$tgl_lhr','$gender','$tingban','$berban','$hp','pelanggan')";
$result = mysqli_query($koneksi, $query_sql);

if($result){
    header("Location:../dashboard.php");
}else{
    echo "Gagal " .mysqli_error($koneksi);
}
?>