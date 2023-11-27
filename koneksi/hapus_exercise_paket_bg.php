<?php
    require("konesi.php");

    $id = $_GET['id_exc'];

    $sqlhapus = mysqli_query($koneksi,"DELETE FROM detail_paket_exercise WHERE id_paket_exc = '$id'");

    if (mysqli_affected_rows($koneksi) > 0) {
        echo '<script>alert("Data Telah dihapus");</script>';
        echo '<script>window.location = "../Dashboard/exercise/dash_exercise.php";</script>';
    }


?>