<?php
    require('konesi.php');

    $idexc = $_POST['idexc'];
    $nama_exercise = $_POST['nama_exercise'];
    $waktuset = $_POST['waktuset'];
    $reps = $_POST['reps'];

    $sql = mysqli_query($koneksi,"UPDATE detail_paket_exercise SET 
    waktu_set = '$waktuset',
    repetisi = '$reps' where id_paket_exc = '$idexc' ");

    if (mysqli_affected_rows($koneksi) > 0) {
        echo '<script>window.location = "../Dashboard/exercise/dash_exercise.php";</script>';
    }

?>