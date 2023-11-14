<?php
    require('konesi.php');

    $all_id = $_POST['idcheckbox'];
    
    // $gabung_id = implode(',', $all_id);

    foreach ($_POST['idcheckbox'] as $id => $value) {

        if(in_array($_POST['idcheckbox'][$id],$all_id)){
            $idcek = $_POST['idcheckbox'][$id];
            $namaexercise = $_POST['nama_exercise'][$id];
            $waktuset = $_POST['waktu_set'][$id];
            $rep = $_POST['repetisi'][$id];

                 $sql = "INSERT INTO detail_paket_exercise (id_paket,id_exercise,waktu_set,repetisi) VALUES ('1','$idcek','$waktuset','$rep')";

            $result = mysqli_query($koneksi,$sql);

            if(mysqli_affected_rows($koneksi) > 0) {
                echo '<script>alert("Exercise Berhasil Ditambahkan");</script>';
                echo '<script>window.location = "../Dashboard/exercise/dash_exercise.php";</script>';

            } else {
                echo 'GAGAL';
            }
            
        }

       
       

        
        // if (in_array($_POST['nama_exercise'][$id], $all_id)) {
        //     echo $_POST['nama_exercise'][$id];
            // $waktu_set = $_POST['waktu_set'];
            // $rep = $_POST['repetisi'];


            // $sql = "INSERT INTO detail_paket_exercise ('id_paket','id_exercise','waktu_set','repetisi') VALUES ('1','$id','$waktu_set','$rep')";

            // $result = mysqli_query($koneksi,$sql);

            // if(mysqli_affected_rows($koneksi) > 0) {
            //     echo '<script>alert("Exercise Berhasil Ditambahkan");</script>';
            // }

            // var_dump($result);
        // }else{
        //     echo '<script>alert("Gagal");</script>';

        // }
        
    }


    // foreach($all_id as $id) {

    //     $sql = "INSERT INTO detail_paket_exercise ('id_paket','id_exercise','waktu_set','repetisi') VALUES ('1','$id','$waktu_set','$rep')";
    //     $result = mysqli_query($koneksi,$sql);

    //     if (mysqli_affected_rows($koneksi) > 0) {
    //         echo '<script>alert("Exercise Berhasil Ditambahkan");</script>';
    //     }

    // }


    

?>