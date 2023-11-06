<?php
    require("konesi.php");

    $nama_pelanggan = $_POST["nama_user"];
    $usernm = $_POST["username"];
    $pass = $_POST["password"];
    $tgl_lhr = $_POST["tanggal_lahir"];
    $gender = $_POST["jenis_kelamin"];
    $tingban = $_POST["tb"];
    $berban = $_POST["bb"];
    $hp = $_POST["nohp"];

    $sqluser = "INSERT INTO user VALUES ('','$usernm','$pass','2')";

    $sqlpelanggan = "INSERT INTO pelanggan VALUES ('','$nama_pelanggan','$tingban','$berban','','$hp','$tgl_lhr','$gender',(SELECT user.id_user FROM user order by user.id_user desc limit 1),'2')";

    $resultuser = mysqli_query($koneksi, $sqluser);
    $resultpelanggan = mysqli_query($koneksi, $sqlpelanggan);
    if (mysqli_affected_rows($koneksi) > 0 && mysqli_affected_rows($koneksi) > 0) {
        echo '<script>alert("User Berhasil Ditambahkan");</script>';
        echo '<script>window.location = "../Dashboard/dashboard.php";</script>';

    }



?>