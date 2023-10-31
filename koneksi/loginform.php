<?php 
    require ('konesi.php');
    $username =  $_POST['txtusername'];
    $password = $_POST['txtpass'];
        
        $query = "SELECT user.id_user, user.username, user.password, pelanggan.id_pelanggan, pelanggan.id_level FROM user JOIN pelanggan ON user.id_user = pelanggan.id_user WHERE username = ? AND password = ?";
        // $query = "select user.id_user, pelanggan.id_pelanggan as id, user.username, user.password from pelanggan join user on pelanggan.id_user = user.id_user union select user.id_user,trainner.id_trainner as id, user.username, user.password from trainner join user on trainner.id_user = user.id_user";
        $stmt = $koneksi->prepare("$query");
        if(!$stmt){
            die("Gagal : ".$koneksi->error);
        }

        $stmt->bind_param("ss", $username, $password);
        if($stmt->execute()){
            $result = $stmt->get_result();
            if($result->num_rows==1){
                $row = $result->fetch_assoc();
                $user_id = $row["id_user"];
                $username = $row["username"];
                $password = $row["password"];
                $id_pelanggan = $row["id_pelanggan"];
                $id_level = $row["id_level"];

                if($id_level == 2){
                    header("Location:../Dashboard/dashboard.php");
                }else{
                    header("Location:../Login/login.php");   
                }
            }
        }

        // if (mysqli_num_rows($result)==0) {
        //     echo '<script language ="javascript">
        //     alert ("Username atau Password Salah silahkan coba lagi"); document.location="../Login/login.php"; </script>';
        // }else {
        //     echo '<script language ="javascript">
        //     alert ("anda berhasil login"); document.location="../Dashboard/dashboard.php"; </script>';
        //     } 
?>