<?php
    require('konesi.php');

    $id_berlangganan = $_GET['id_langganan'];

    var_dump($id_berlangganan);

    $sqlVerif = mysqli_query($koneksi, "UPDATE detail_langganan SET status = 'Terverifikasi' WHERE id_berlangganan = '$id_berlangganan'");

    if (mysqli_affected_rows($koneksi) > 0) {
        echo '<script>alert("Berhasil Terverifikasi");</script>';
        echo '<script>window.location = "../Dashboard/Langganan/langganan_berlangganan.php";</script>';
    }else {
        echo '<script>alert("Gagal Verifikasi");</script>';
        echo '<script>window.location = "../Dashboard/Langganan/langganan.php";</script>';
    }

?>