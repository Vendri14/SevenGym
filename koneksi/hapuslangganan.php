<?php
    require("konesi.php");

    $id = $_GET['pelanggan'];

    $sqlhapus = mysqli_query($koneksi,"DELETE FROM detail_langganan WHERE id_pelanggan = '$id'");

    if (mysqli_affected_rows($koneksi) > 0) {
        echo '<script>alert("Data Telah dihapus");</script>';
        echo '<script>window.location = "../Dashboard/Langganan/langganan.php";</script>';
    }


?>