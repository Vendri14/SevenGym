<?php

    session_start();
    require("../../../koneksi/konesi.php");

    // $query = mysqli_query($koneksi,"SELECT user.id_user, pelanggan.profil_pelanggan from user join pelanggan on user.id_user = pelanggan.id_user ");
    // $result = mysqli_fetch_assoc($query);

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
    <link rel="stylesheet" href="userexc.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.7/datatables.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.7/datatables.min.js"></script>

    <title>Admin Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="../../img/logo.png" alt="">
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
                <li><a href=" ../../koneksi/logout.php">
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
                    <span class="text">Tambah Data Pelanggan</span>
                </div>
            </div>

            <div id="customAlert" class="custom-alert"></div>


            <div class="profile-image">
             <form id="tambah" action="../../../koneksi/tambahuserpelanggan.php" method="POST" enctype="multipart/form-data">
                <img src="../../../img/profilephoto.png" alt="" id="showimg">
                
                
                <!-- <button class="btntambah"><img src="../img/Vector.png" alt=""></button> -->
                <div class="tambah-form">
                    <div class="label">
                   <h2 class="nmpelanggan">Nama Pelanggan :</h2>
                   <h3 >Sevri Vendrian</h3>
                   <h2 class="nmpelanggan">Nama Pelatih :</h2>
                   <h3 >Hamood</h3>
                    </div>

                    <table id="example" class="table borderless">   
                        <h4>Exercise :</h4>                     
                        <thead>
                            <tr>
                                <th scope="col">Gambar</th>
                                <th scope="col">Gambar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // $query_sql = "SELECT exercise.id_exercise,exercise.nama_exercise from exercise";
                            // $sql= mysqli_query($koneksi, $query_sql);
                            // $no = 1;
                            ?>
                            <?php
                            // while ($result = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr>
                                    <td>
                                       <p>Abtukan</p>
                                    </td>
                                    <td>
                                       <p>Abtukan</p>
                                    </td>
                                </tr>
                                <?php
                            // }
                            ?>
                        </tbody>
                    </table>

                   
                  
                     <!-- <button style="background-color: #707070; color: #fff;">Pilih Profile</button> -->
                     <!-- <button style="background-color: #FF7C7C ">Hapus Profile</button> -->
                </form>
              </div>

             

            
            </div>
        </div>
    </section>

    <script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable();
    });</script>

    <script src="../../JS/dashboard.js"></script>
    <script src="../../JS/validation.js"></script>
    <script src="../../JS/showpict.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.7.0.js"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"/>
</body>
</html>