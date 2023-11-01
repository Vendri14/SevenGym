<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="edituser.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">CodingLab</span>
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
                    <span class="text">Edit Data Pelanggan</span>
                </div>
            </div>

            <div class="profile-image">
             <form action="">
                <img src="../../img/profilephoto.png" alt="">
                
                <?php
                $server = "localhost";
                $username = "root";
                $password = "";
                $db = "gym";
                $koneksi = mysqli_connect($server, $username, $password, $db);

                if (mysqli_connect_errno()) {
                    echo "Koneksi Gagal : " . mysqli_connect_error();
                }

                // $query_sql = "select * from pelanggan";
                // if($koneksi->query($query_sql)===true){
                // echo "berhasil";

                // $ID = isset($_POST[""]) ? $_POST[""] :"";

                // $id = isset($_GET["id_pelanggan"]) ? intval($_GET["id_pelanggan"]) :null;
                //$id = isset($_GET["id"]) ? intval($_GET["id"]) :null;
                //$query = mysqli_query($koneksi, "select * from pelanggan where id_pelanggan = '$id'");
                $sql = mysqli_query($koneksi, "select * from user, pelanggan where user.id_user = pelanggan.id_user and id_pelanggan='$_GET[update]'");
                $data = mysqli_fetch_array($sql);
                //}
                ?>
                <!-- <button class="btntambah"><img src="../img/Vector.png" alt=""></button> -->
                <div class="tambah-form">
                    <div class="label">
                   Nama Pelanggan
                    </div>
                   <input type="text" name="nama_pelanggan" value="<?php echo $data['nama_pelanggan'];?>" placeholder="Ex : SEVRI VENDRIAN" >

                   
                   <div class="column">
                        <div class="label">
                        <label for="">Username</label> 
                        <input type="text" name="username" value="<?php echo $data['username'];?> "placeholder="Ex : SEVRI VENDRIAN" id="username">
                        </div>
                   
                     <div class="label">
                     <label for="">Password</label>
                     <input type="text" name="password" value="<?php echo $data['password'];?> "placeholder="Ex : SEVRI VENDRIAN" id="password">
                        </div>
                   </div>

                   
                    <div class="column">
                    <div class="label">
                        <label for="">Jenis Kelamin</label>
                        <br>
                        <select name="jenis_kelamin" value=<?php echo $data['jenis Kelamin'];?>>
                        <option>Perempuan</option>
                        <option>Laki-Laki</option>
                     </select>
                     </div>

                     <div class="label">
                        Tanggal Berlanggan <br>
                        <input type="date" name="tanggal_lahir" id="date">
                     </div>
                     <div class="label">
                        Akhir Berlanggan <br>
                        <input type="date" name="tanggal_lahir" id="date">
                     </div>
                  </div>
                   
                    <div class="column">
                    <div class="label">
                        Berat Badan <br>
                        <input type="text" name="tanggal_lahir" value="<?php echo $data['bb'];?> "placeholder="Ex : SEVRI VENDRIAN" id="bb">
                     </div>
                     <div class="label">
                         Tinggi Badan <br>
                        <input type="text" name="tanggal_lahir" placeholder="Ex : SEVRI VENDRIAN" id="tb">
                     </div>
                     
                    </div>
                    <div class="label">
                         NoHp <br>
                        <input type="text" name="tanggal_lahir" placeholder="Ex : SEVRI VENDRIAN" id="tb">
                     </div>
                     <button>Simpan</button>
                     <button style="background-color: #707070; color: #fff;">Pilih Profile</button>
                     <button style="background-color: #FF7C7C ">Hapus Profile</button>
                </form>
              </div>

             

            
            </div>
        </div>
    </section>

    <script src="../../JS/dashboard.js"></script>
</body>
</html>