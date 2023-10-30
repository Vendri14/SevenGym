<?php
require 'konesi.php';
$nama_lengkap = $_POST["nama_pelanggan"];
$username = $_POST["username"];
$password = $_POST["password"];
$konfirpass = $_POST["repass"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$tb = $_POST["tb"];
$bb = $_POST["bb"];
$nohp = $_POST["nohp"];

$query_sql = "INSERT INTO user (id_user, username, password) VALUES ('id_user','$username','$password')";
if($koneksi->query($query_sql)===true){
    echo "berhasil";

    // $queryID_User = "SELECT user.id_user FROM user ORDER BY user.id_user DESC LIMIT 1";
    // $getID_User = mysqli_query($koneksi, $queryID_User);
    // $rowID_User = mysqli_fetch_array($getID_User);
    // $ID_User = $rowID_User['id_user']+1;

    $ID_User = mysqli_insert_id($koneksi);
    $sql = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, tb, bb, id_trainner, profil_pelanggan, nohp, tanggal_lahir, jenis_kelamin, id_user, id_level) VALUES ('id_pelanggan','$nama_lengkap','$tb','$bb','','','$nohp','$tanggal_lahir','$jenis_kelamin','$ID_User','2')";
   
     if($koneksi->query($sql)===true){
        echo "Registrasi Berhasil";
        header("Location:../Login/login.php");
     }else{
        echo "Error : ".$sql. "<br>". $koneksi->error;
     }
}else{
    echo "Error : " .$query_sql . "<br>" . $koneksi->error;
}
// $result = mysqli_query($koneksi, $query_sql);

// if($result){
    
// }else{
//     echo "Gagal " .mysqli_error($koneksi);
// }
?>