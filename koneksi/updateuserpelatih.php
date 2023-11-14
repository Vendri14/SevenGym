<?php 
    require('konesi.php');

    $id = $_POST['id'];
    $nama_pelanggan = $_POST["nama_pelatih"];
    $deskripsi = $_POST['deskripsi'];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $gender = $_POST["jenis_kelamin"];
    $tb = $_POST["tb"];
    $bb = $_POST["bb"];
    $nohp = $_POST["nohp"];
    $harga_pelatih = $_POST["harga"];

    $queryupdateuser = mysqli_query($koneksi,"UPDATE user SET 
                    username = '$username', 
                    password = '$password' 
                    where id_user = '$id'");

                    if (mysqli_affected_rows($koneksi) > 0 ) {
                        echo '<script>alert("User Berhasil Di Edit");</script>';
                        echo '<script>window.location = "../Dashboard/dashboard.php";</script>';
                    }

    $queryupdatepelanggan = mysqli_query($koneksi,"UPDATE trainner SET
                    nama_lengkap = '$nama_pelanggan',
                    tanggal_lahir = '$tanggal_lahir',
                    jenis_kelamin = '$gender',
                    tb = '$tb',
                    bb = '$bb',
                    nohp = '$nohp',
                    deskripsi_pelatih = '$deskripsi',
                    harga_trainner = '$harga_pelatih'
                    where id_user = '$id'");

        if (mysqli_affected_rows($koneksi) > 0 ) {
            echo '<script>alert("User Berhasil Di Edit");</script>';
            echo '<script>window.location = "../Dashboard/dashboard.php";</script>';
        }

?>