<?php
require "..koneksi/konesi.php";
$sql = mysqli_query($koneksi, "select * from user, pelanggan where user.id_user = pelanggan.id_user and id_pelanggan= $_GET[update]");
$data = mysqli_fetch_array($sql);
?>