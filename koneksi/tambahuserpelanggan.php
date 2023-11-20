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

function upload(){
    
    $namafile = $_FILES ["gambar"]["name"];
    $ukuranfile = $_FILES ["gambar"]["size"];
    $error = $_FILES ["gambar"]["error"];
    $tmpname = $_FILES ["gambar"]["tmp_name"];

    // cek ada gambar di upload atau tidak
    if ($error === 4) {
        echo '<script>alert("Pilih Gambar terlebih dahulu");</script>';
        return false;
    }
    
    //cek apakah yang di upload itu adalah gambar
    $ekstensigambarvalid = ['jpg','jpeg','png']; //tentukan file apa saja yang boleh masuk / di upload
    $ekstensigambar = explode('.',$namafile); // memecah nama file menjadi array
    $ekstensigambar = strtolower(end($ekstensigambar));
    if (!in_array($ekstensigambar, $ekstensigambarvalid)) {
        echo '<script>alert("Yang Anda Upload Bukan Gambar");</script>';
        return false;
    }

    //cek ukuran gambar jika size gambar terlalu besar

    if ($ukuranfile > 8000000) {
        echo '<script>alert("Ukuran Gambar Terlalu Besar");</script>';
        return false;
    }

    $namaFilebaru = uniqid();
    $namaFilebaru .= '.';
    $namaFilebaru .= $ekstensigambar; 
    //lolos semua validasi gambar
    move_uploaded_file($tmpname, '../img/'. $namaFilebaru);
    return $namaFilebaru;

}

    $gambar = upload();
    if(!$gambar){
        echo '<script>alert("Data Gagal Ditambahkan");</script>';
        echo '<script>window.location = "../Dashboard/TambahUser/tambahuser.php";</script>';
        return false;
        
    }

    $sqluser = "INSERT INTO user VALUES ('','$usernm','$pass','2')";

    $sqlpelanggan = "INSERT INTO pelanggan VALUES ('','$nama_pelanggan','$tingban','$berban','$gambar','$hp','$tgl_lhr','$gender',(SELECT user.id_user FROM user order by user.id_user desc limit 1),'2','')";

    $resultuser = mysqli_query($koneksi, $sqluser);
    $resultpelanggan = mysqli_query($koneksi, $sqlpelanggan);


    if (mysqli_affected_rows($koneksi) > 0) {
        echo '<script>alert("User Berhasil Ditambahkan");</script>';
        echo '<script>window.location = "../Dashboard/dashboard.php";</script>';
    }else{
        echo '<script>alert("User Berhasil Ditambahkan");</script>';

    }
    



?>