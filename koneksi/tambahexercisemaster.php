<?php
    require('konesi.php');

    $namaexc = $_POST['nama_exercise'];
    $posisi_awal = $_POST['posisi_awal'];
    $posisi_badan = $_POST['posisi_badan'];
    $gerakan = $_POST['gerakan'];

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

    $sqlInsert = mysqli_query($koneksi,"INSERT into exercise value ('','$namaexc','$gambar','$posisi_awal','$posisi_badan','$gerakan')"); 
    echo '<script>alert("Data Berhasil Ditambahkan");</script>';
    echo '<script>window.location = "../Dashboard/exercise/exercisemaster.php";</script>';



?>