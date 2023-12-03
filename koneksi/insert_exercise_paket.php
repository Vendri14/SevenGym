<?php
    require('konesi.php');

    $all_id = $_POST['idcheckbox'];
    
    // $gabung_id = implode(',', $all_id);

    foreach ($_POST['idcheckbox'] as $id => $value) {

        if(in_array($_POST['idcheckbox'][$id],$all_id)){
            $idcek = $_POST['idcheckbox'][$id];
            $namaexercise = $_POST['nama_exercise'][$id];
            $waktuset = $_POST['waktuset'][$id];
            $rep = $_POST['reps'][$id];


                 $sql = "INSERT INTO detail_paket_exercise (id_paket,id_exercise,waktu_set,repetisi) VALUES ('1','$idcek','$waktuset','$rep')";

            $result = mysqli_query($koneksi,$sql);
      
        }

            if(mysqli_affected_rows($koneksi) > 0) {
                echo '<script>alert("Exercise Berhasil Ditambahkan");</script>';
                var_dump($waktuset,$rep,$idcek);
                // echo '<script>window.location = "../Dashboard/exercise/dash_exercise.php";</script>';

            } else {
                echo 'GAGAL';
            }
            
        }

       
?>