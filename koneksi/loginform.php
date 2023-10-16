<?php 
    require ('konesi.php');
    $username =  $_POST['txtusername'];
    $password = $_POST['txtpass'];
        
        $query = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."' ";
        $result = mysqli_query($koneksi,$query);

        if (mysqli_num_rows($result)==0) {
            echo '<script language ="javascript">
            alert ("Username atau Password Salah silahkan coba lagi"); document.location="../Login/login.php"; </script>';
        }else {
            echo '<script language ="javascript">
            alert ("anda berhasil login"); document.location="home.php"; </script>';
            } 
?>