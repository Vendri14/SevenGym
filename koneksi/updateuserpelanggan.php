<?php 
    require('konesi.php');
   


    $id = $_POST['id'];
    $nama_pelanggan = $_POST["nama_user"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $gender = $_POST["jenis_kelamin"];
    $tb = $_POST["tb"];
    $bb = $_POST["bb"];
    $nohp = $_POST["nohp"];
    $gambarlama = $_POST['imglama'];

    function upload(){
    
        $namafile = $_FILES ["gambar"]["name"];
        $ukuranfile = $_FILES ["gambar"]["size"];
        $error = $_FILES ["gambar"]["error"];
        $tmpname = $_FILES ["gambar"]["tmp_name"];
    
        // cek ada gambar di upload atau tidak
        
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

    
        if ($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarlama;
        }else {
            $gambar = upload();
        }
       

    $queryupdateuser = mysqli_query($koneksi,"UPDATE user SET 
                    username = '$username', 
                    password = '$password' where id_user = '$id'");
                    if (mysqli_affected_rows($koneksi) > 0 ) {
                        echo '<script>alert("User Berhasil Di Edit");</script>';
                        echo '<script>window.location = "../Dashboard/dashboard.php";</script>';
                    }

    $queryupdatepelanggan = mysqli_query($koneksi,"UPDATE pelanggan SET
                    nama_pelanggan = '$nama_pelanggan',
                    tanggal_lahir = '$tanggal_lahir',
                    jenis_kelamin = '$gender',
                    tb = '$tb',
                    bb = '$bb',
                    profil_pelanggan = '$gambar',
                    nohp = '$nohp' where id_user = '$id'");

        if (mysqli_affected_rows($koneksi) > 0 ) {
            echo '<script>alert("User Berhasil Di Edit");</script>';
            echo '<script>window.location = "../Dashboard/dashboard.php";</script>';
        }

?>