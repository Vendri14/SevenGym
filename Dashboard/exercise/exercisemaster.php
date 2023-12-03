<?php
    require("../../koneksi/konesi.php");

session_start();
if (!isset($_SESSION["islogin"])) {
    header("Location: ../../Login/login.php");
}
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="master.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="../../imag/logo.png" alt="">
            </div>

            <span class="logo_name">SevenGym</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="../dashboard.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">User</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Langganan</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Exercise</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Pendapatan</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Laporan</span>
                </a></li>
                
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Tambah Exercise Master</span>
                </div>
            </div>

                        <div id="customAlert" class="custom-alert"></div>


            <div class="profile-image">
             <form id="tambah" action="../../koneksi/tambahexercisemaster.php" method="POST" enctype="multipart/form-data">
                <img src="../../img/profilephoto.png" alt="" id="showimg">
                
                
                <!-- <button class="btntambah"><img src="../img/Vector.png" alt=""></button> -->
                <div class="tambah-form">
                <div class="label">
                    </div>
                   <input type="hidden" name="id" placeholder="Ex : SEVRI VENDRIAN" >
                    <div class="label">
                   Nama Exercise
                    </div>
                   <input type="text" placeholder="Ex : SEVRI VENDRIAN" name="nama_exercise" id="nama_pelatih" >

                   <div class="label">
                         Posisi Awal <br>
                        <input style="height: 140px;" type="text" name="posisi_awal" placeholder="Ex : SEVRI VENDRIAN" id="deskripsi" >
                     </div>
                   <div class="label">
                         Posisi Badan <br>
                        <input style="height: 140px;" type="text" name="posisi_badan" placeholder="Ex : SEVRI VENDRIAN" id="deskripsi" >
                     </div>
                   <div class="label">
                         Gerakan <br>
                        <input style="height: 140px;" type="text" name="gerakan" placeholder="Ex : SEVRI VENDRIAN" id="deskripsi" >
                     </div>
                     <button>Tambah</button>
                     <label style="margin-top: 15px" class="custom-file-upload">
                     Pilih Profile
                        <input type="file" name="gambar" id="gambar"/>
                    </label>
                     
                </form>
              </div>

             

            
            </div>
        </div>
    </section>

    <script src="../../JS/validation.js"></script>
    <script src="../../JS/showpict.js"></script>
    <script src="../../JS/dashboard.js"></script>
</body>
</html>