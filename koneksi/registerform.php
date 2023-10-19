<?php
require 'konesi.php';
$nama_lengkap = $_POST["nama_lengkap"];
$username = $_POST["username"];
$password = $_POST["password"];
$konfirpass = $_POST["repass"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$tb = $_POST["tb"];
$bb = $_POST["bb"];
$nohp = $_POST["nohp"];

$reps;

$query_sql = "INSERT INTO user (nama_lengkap, username, password, tanggal_lahir, jenis_kelamin, tb, bb, nohp) 
VALUES ('$nama_lengkap','$username','$password','$tanggal_lahir','$jenis_kelamin','$tb','$bb','$nohp')";
$result = mysqli_query($koneksi, $query_sql);

if($result){
    header("Location:../Login/login.php");
}else{
    echo "Gagal " .mysqli_error($koneksi);
}
?>