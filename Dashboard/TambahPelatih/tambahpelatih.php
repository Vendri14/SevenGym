<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="tambahpelatih.css">
     
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
                    <span class="text">Tambah Data Pelatih</span>
                </div>
            </div>

            <div class="profile-image">
             <form action="">
                <img src="../../img/profilephoto.png" alt="">
                
                
                <!-- <button class="btntambah"><img src="../img/Vector.png" alt=""></button> -->
                <div class="tambah-form">
                    <div class="label">
                   Nama Pelanggan
                    </div>
                   <input type="text" placeholder="Ex : SEVRI VENDRIAN" >

                   <div class="label">
                         Deskripsi Pelatih <br>
                        <input style="height: 140px;" type="text" name="tanggal_lahir" placeholder="Ex : SEVRI VENDRIAN" id="tb">
                     </div>
                   
                   <div class="column">
                        <div class="label">
                        <label for="">Username</label> 
                        <input type="text" placeholder="Ex : SEVRI VENDRIAN" id="username">
                        </div>
                   
                     <div class="label">
                     <label for="">Password</label>
                     <input type="text" placeholder="Ex : SEVRI VENDRIAN" id="password">
                        </div>
                   </div>

                   
                    <div class="column">
                    <div class="label">
                        <label for="">Jenis Kelamin</label>
                        <br>
                        <select name="jenis_kelamin">
                        <option>Perempuan</option>
                        <option>Laki-Laki</option>
                     </select>
                     </div>
                     <div class="label">
                        Tanggal Lahir <br>
                        <input type="date" name="tanggal_lahir" id="date">
                     </div>
                  </div>
                   
                    <div class="column">
                    <div class="label">
                        Berat Badan <br>
                        <input type="text" name="tanggal_lahir" placeholder="Ex : SEVRI VENDRIAN" id="bb">
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
                     <button>Tambah</button>
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