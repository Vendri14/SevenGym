<?php 
                require("../../koneksi/konesi.php");
                
                $id = $_GET['update'];
                
                $query = mysqli_query($koneksi,"SELECT user.id_user, pelanggan.nama_pelanggan,pelanggan.profil_pelanggan, user.username,user.password,pelanggan.jenis_kelamin,pelanggan.tanggal_lahir,pelanggan.bb,pelanggan.tb,pelanggan.nohp FROM pelanggan JOIN user ON pelanggan.id_user = user.id_user where pelanggan.id_pelanggan = '$id' ");
                $result = mysqli_fetch_assoc($query);
          

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
    <link rel="stylesheet" href="edituserb.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>
<body>
<div id="customAlert" class="custom-alert"></div>

    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
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
                <li><a href="../../koneksi/logout.php">
                    <i class="uil uil-signout"></i>
                    <a href=""><span class="link-name">Logout</span></a>
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
                    <span class="text">Edit Data Pelanggan</span>
                </div>
            </div>
            
           
            <div class="profile-image">
             <form id="tambah" action="../../koneksi/updateuserpelanggan.php" method="POST" enctype="multipart/form-data">
                <img src="../../img/<?php echo $result['profil_pelanggan'];?>" alt="" id="showimg">

                <input id="imglama" type="hidden" name="imglama" value="<?php echo $result['profil_pelanggan']?>">
                
                
                <!-- <button class="btntambah"><img src="../img/Vector.png" alt=""></button> -->
                <div class="tambah-form">
                <div class="label">
                    </div>
                   <input type="hidden" name="id" placeholder="Ex : SEVRI VENDRIAN" value="<?= $result["id_user"]; ?>">
                    <div class="label">
                   Nama User
                    </div>
                   <input id="nama_user" type="text" name="nama_user" placeholder="Ex : SEVRI VENDRIAN" value="<?= $result["nama_pelanggan"]; ?>">

                   
                   <div class="column">
                        <div class="label">
                        <label for="">Username</label> 
                        <input id="username" type="text" name= "username" placeholder="Ex : SEVRI VENDRIAN" id="username" value="<?= $result["username"]; ?>">
                        </div>
                        
                   
                     <div class="label">
                     <label for="">Password</label>
                     <input id="password" type="text" name="password" placeholder="Ex : SEVRI VENDRIAN" id="password" value="<?= $result["password"]; ?>">
                        </div>
                   </div>

                   
                    <div class="column">
                    <div class="label">
                        <label for="">Jenis Kelamin</label>
                        <br>
                        <select id="jenis_kelamin" style="width:230px;" name="jenis_kelamin" value="<?= $result["jenis_kelamin"]; ?>">
                        <option>Perempuan</option>
                        <option>Laki-Laki</option>
                     </select>
                     </div>

                     <div class="label">
                        Tanggal Lahir <br>
                        <input id="tgl_lahir" style="width: 230px;" type="date" name="tanggal_lahir" id="date" value="<?= $result["tanggal_lahir"]; ?>">
                     </div>
                     <!-- <div class="label">
                        Akhir Berlanggan <br>
                        <input type="date" name="tanggal_lahir" id="date">
                     </div> -->
                  </div>
                   
                    <div class="column">
                    <div class="label">
                        Berat Badan <br>
                        <input id="bb" type="text" name="bb" placeholder="Ex : SEVRI VENDRIAN" id="bb" value="<?= $result["bb"]; ?>">
                     </div>
                     <div class="label">
                         Tinggi Badan <br>
                        <input id="tb" type="text" name="tb" placeholder="Ex : SEVRI VENDRIAN" id="tb" value="<?= $result["tb"]; ?>">
                     </div>
                     
                    </div>
                    <div class="label">
                         NoHp <br>
                        <input id="nohp" type="text" name="nohp" placeholder="Ex : SEVRI VENDRIAN" id="tb" value="<?= $result["nohp"]; ?>">
                     </div>
                        <button type="button" onclick="validateUpdatePelanggan()" class="submit" value="update">Simpan</button>
                        <label style="margin-top: 15px" class="custom-file-upload">
                     Pilih Profile
                        <input type="file" name="gambar" id="gambar"/>
                </form>
              </div>

              
              
            </div>
        </div>
    </section>


    <script src="../../JS/showpict.js"></script>
    <script src="../../JS/validation.js"></script>
    <script src="../../JS/dashboard.js"></script>
</body>
</html>