<?php
    require("konesi.php");

    $id = $_GET['id_pelanggan'];


    $sqlSelect = mysqli_query($koneksi, "SELECT * from detail_langganan where id_pelanggan = '$id'");

    if (mysqli_num_rows($sqlSelect) > 0) {
        $sqlhapus = mysqli_query($koneksi,"DELETE FROM pelanggan WHERE id_user = '$id'");
        $sqlhapus = mysqli_query($koneksi,"DELETE FROM user WHERE id_user = '$id'");
    
        if (mysqli_affected_rows($koneksi) > 0) {
            echo '<script>alert("Data Telah dihapus");</script>';
            echo '<script>window.location = "../Dashboard/dashboard.php";</script>';
        }
        }else{
            echo '<script>alert("User masih berlangganan, Tunggu langanan selesai");</script>';
            echo '<script>window.location = "../Dashboard/dashboard.php";</script>';

        }

   

?>