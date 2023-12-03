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

    $sqluser = "INSERT INTO user VALUES ('','$username','$password','1')";

    $sqlpelanggan = "INSERT INTO trainner (id_trainner,nama_lengkap,deskripsi_pelatih,tb,bb,harga_trainner,profil_trainner,id_user,id_level,tanggal_lahir,jenis_kelamin,nohp) 
                    VALUES ('','$nama_pelatih','$deskripsi','$tb','$bb','$harga_pelatih','$gambar',(SELECT user.id_user FROM user order by user.id_user desc limit 1),'1','$tgl_lhr','$gender','$nohp')";

    $resultuser = mysqli_query($koneksi, $sqluser);
    $resultpelanggan = mysqli_query($koneksi, $sqlpelanggan);
    if (mysqli_affected_rows($koneksi) > 0 && mysqli_affected_rows($koneksi) > 0) {
        echo '<script>alert("User Berhasil Ditambahkan");</script>';
        echo '<script>window.location = "../Dashboard/dashboard2.php";</script>';

    }



?>