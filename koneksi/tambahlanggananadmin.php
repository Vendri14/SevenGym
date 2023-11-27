<?php
    require('konesi.php');


        $tanggal_masuk = $_POST['current_date'];
        $tanggal_keluar = $_POST['one_month_later'];
        $total_harga = $_POST['total_price'];
        $lama_berlangganan = $_POST['lama_berlangganan'];
        // $tanggal_masuk = $_POST['current_date'];
        $id_pelanggan = $_POST['id_pelanggan'];
        $jenis_langganan = $_POST['jenis_langganan'];
        $gambarlama = $_POST['imglama'];
        
    
        function upload(){
        
            $namafile = $_FILES ["gambar"]["name"];
            $ukuranfile = $_FILES ["gambar"]["size"];
            $error = $_FILES ["gambar"]["error"];
            $tmpname = $_FILES ["gambar"]["tmp_name"];
        
            // // cek ada gambar di upload atau tidak
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
        
        if ($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarlama;
        }else {
            $gambar = upload();
        }
            if(!$gambar){
                echo '<script>alert("Data Gagal Ditambahkan");</script>';
                echo '<script>window.location = "../Dashboard/Langganan/langganan.php";</script>';
                return false;
                
            }
    

    $sqlSelectData = mysqli_query($koneksi, "SELECT * from detail_langganan where id_pelanggan = '$id_pelanggan'");

    if (mysqli_num_rows($sqlSelectData) === 0) {
        $sqlinsert = mysqli_query($koneksi,"INSERT into detail_langganan values ('','$tanggal_masuk','$tanggal_keluar','$total_harga','$lama_berlangganan','$jenis_langganan','$gambar','3','$id_pelanggan','Belum Terverivikasi')");

        if (mysqli_affected_rows($koneksi) > 0) {
            echo '<script>alert("Data Berhasil Ditambahkan");</script>';
            echo '<script>window.location = "../Dashboard/Langganan/langganan.php";</script>';

        }
        }elseif (mysqli_num_rows($sqlSelectData) === 1) {
         

            $sqlinsert = mysqli_query($koneksi,"UPDATE detail_langganan SET 
            tanggal_masuk = '$tanggal_masuk',
            tanggal_keluar = '$tanggal_keluar',
            total_harga = '$total_harga',
            lama_berlangganan = '$lama_berlangganan',
            jenis_langganan = '$jenis_langganan',
            bukti_transaksi = '$gambar',
            id_pelanggan = '$id_pelanggan' where id_pelanggan = '$id_pelanggan'");

            if (mysqli_affected_rows($koneksi) > 0) {
                echo '<script>alert("Data Berhasil Di Update");</script>';
                echo '<script>window.location = "../Dashboard/Langganan/langganan.php";</script>';
            }else {
                echo '<script>alert("Data Gagal");</script>';

            }
        }


   
  
?>