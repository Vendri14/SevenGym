<?php 
    require('konesi.php');

    $nama_pelanggan = $_POST["nama_user"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $gender = $_POST["jenis_kelamin"];
    $tb = $_POST["tb"];
    $bb = $_POST["bb"];
    $nohp = $_POST["nohp"];

    $queryupdateuser = mysqli_query($koneksi,"UPDATE user SET 
                    username = '$username', 
                    password = '$password'");

    $queryupdatepelanggan = mysqli_query($koneksi,"UPDATE pelanggan SET
                    nama_pelanggan = '$nama_pelanggan',
                    tanggal_lahir = '$tanggal_lahir',
                    jenis_kelamin = '$gender',
                    tb = '$tb',
                    bb = '$bb',
                    nohp = '$nohp'");

        if (mysqli_affected_rows($koneksi) > 0 ) {
            echo '<script>alert("User Berhasil Di Edit");</script>';
            echo '<script>window.location = "../Dashboard/dashboard.php";</script>';
        }

?>