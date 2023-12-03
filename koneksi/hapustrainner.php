
<?php
    require("konesi.php");

    $id = $_GET['delete'];

    $sqlhapus = mysqli_query($koneksi,"DELETE FROM trainner WHERE id_user = '$id'");
    $sqlhapus = mysqli_query($koneksi,"DELETE FROM user WHERE id_user = '$id'");
    
    if (mysqli_affected_rows($koneksi) >0) {
        echo '<script>alert("Data Telah dihapus");</script>';
        echo '<script>window.location = "../Dashboard/dashboard.php";</script>';
    }elseif (mysqli_affected_rows($koneksi) ===0) {
        echo '<script>alert("Data Tidak dihapus");</script>';
    }


?>