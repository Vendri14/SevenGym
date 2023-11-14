<?php
    require("konesi.php");

    $nama_pelatih = $_POST["nama_pelatih"];
    $harga_pelatih = $_POST["harga"];
    $deskripsi = $_POST["deskripsi"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $tgl_lhr = $_POST["tanggal_lahir"];
    $gender = $_POST["jenis_kelamin"];
    $tb = $_POST["tb"];
    $bb = $_POST["bb"];
    $nohp = $_POST["nohp"];

    $sqluser = "INSERT INTO user VALUES ('','$username','$password','1')";

    $sqlpelanggan = "INSERT INTO trainner (id_trainner,nama_lengkap,deskripsi_pelatih,tb,bb,harga_trainner,profil_trainner,id_user,id_level,tanggal_lahir,jenis_kelamin,nohp) 
                    VALUES ('','$nama_pelatih','$deskripsi','$tb','$bb','$harga_pelatih','',(SELECT user.id_user FROM user order by user.id_user desc limit 1),'1','$tgl_lhr','$gender','$nohp')";

    $resultuser = mysqli_query($koneksi, $sqluser);
    $resultpelanggan = mysqli_query($koneksi, $sqlpelanggan);
    if (mysqli_affected_rows($koneksi) > 0 && mysqli_affected_rows($koneksi) > 0) {
        echo '<script>alert("User Berhasil Ditambahkan");</script>';
        echo '<script>window.location = "../Dashboard/dashboard.php";</script>';

    }



?>