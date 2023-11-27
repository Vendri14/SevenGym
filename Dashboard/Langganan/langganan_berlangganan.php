<?php
session_start();

require('../../koneksi/konesi.php');

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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="berlangganan.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.7/datatables.min.css" rel="stylesheet">
 
 <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.7/datatables.min.js"></script>

    <title>Admin Dashboard Panel</title>
</head>

<body>

<script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable();
    });
</script>

<div id="myModal" class="modal">
            <div class="modal-content">
                <span onclick="closeModal()" style="float: right; cursor: pointer;">&times;</span>
                <h2>Tambah Data Berlangganan</h2>
                <input style="padding: 12px;" type="text" placeholder="Search..">
                <!-- <p>This is a simple pop-up created with HTML and JavaScript.</p> -->
                <table class="table table-bordered">

                <div class="label">
                        <label for="">Jenis Berlangganan</label>
                        <br>
                        <select name="jenis_kelamin">
                        <option>Bulanan</option>
                        <option>Harian</option>
                     </select>
                     </div>
                     <div class="label">
                        Lama Berlangganan <br>
                        <input type="text" name="tanggal_lahir" id="date">
                     </div>

                        <label for="">Pilih User</label>
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                          

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $server = "localhost";
                            $username = "root";
                            $password = "";
                            $db = "sevengym";
                            $koneksi = mysqli_connect($server, $username, $password, $db);

                            if (mysqli_connect_errno()) {
                                echo "Koneksi Gagal : " . mysqli_connect_error();
                            }
                            $query_sql = "SELECT * FROM user";
                            $sql= mysqli_query($koneksi, $query_sql);
                            $no = 1;
                            ?>
                            <?php
                            while ($result = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo ++$no; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['nama_lengkap']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['username']; ?>
                                    </td>
                             
                                    <td class="crud"><a href="UserEdit/useredit.php"><button
                                                style="background-color: #3A3F47"><img src="../img/edit.png"
                                                    alt=""></button><button><img src="../img/delete.png" alt=""></button>
                                    </td></a>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <img src="../../img/profilephoto.png" alt="" id="profile">   
            </div>
            </div>
    
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
                <li><a href="../exercise/dash_exercise.php">
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
        <!-- The modal -->
        
        
            

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Data Pelanggan</span>
                </div>

                <div class="table-responsive">
                    <table id="example" class="table table-bordered">
                        <a href="langganan.php"><button style="border-right:0;" id="pilih">Proses Transaksi </button></a> <a href="langganan_berlangganan.php"><button style="border-left: 0;" id="pilih2">Sudah Berlangganan</button></a>

                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col">Tanggal Masuk</th>
                                <th scope="col">Tanggal Keluar</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Lama Berlangganan</th>
                                <th scope="col">Bukti Transaksi</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                          
                          $query_sql = "SELECT pelanggan.nama_pelanggan, detail_langganan.tanggal_masuk,detail_langganan.tanggal_keluar,detail_langganan.total_harga,detail_langganan.lama_berlangganan,detail_langganan.bukti_transaksi,detail_langganan.id_langganan,detail_langganan.id_pelanggan,detail_langganan.status from pelanggan join detail_langganan on pelanggan.id_pelanggan = detail_langganan.id_pelanggan where status = 'Terverifikasi' order by id_pelanggan desc";
                          $sql= mysqli_query($koneksi, $query_sql);
                            $no = 1;
                            ?>
                            <?php
                            while ($result = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['nama_pelanggan']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['tanggal_masuk']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['tanggal_keluar']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['total_harga']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['lama_berlangganan']; ?>
                                    </td>
                                    <td>
                                        <img src="../../img/<?php echo $result['bukti_transaksi']; ?>" alt="">
                                    </td>
                                    <td>
                                        <?php echo $result['status']; ?>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>

      

            <!-- The modal -->
            
    </section>

    <script src="../../JS/dashboard.js"></script>
    <script src="../../JS/modal.js"></script>

    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.7.0.js"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"/>
</body>

</html>