<?php
    require('../../koneksi/konesi.php');

    session_start();

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
    <link rel="stylesheet" href="exercises2.css">

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
    $(document).ready(function(){
        $('#example2').DataTable();
    });
</script>

<div id="myModal" class="modal">
            <div class="modal-content">
                <form action="../../koneksi/insert_exercise_paket.php" method="POST">
                <span onclick="closeModal()" style="float: right; cursor: pointer;">&times;</span>
                <h2>Tambah Exercise</h2>
                <!-- <input style="padding: 12px;" type="text" placeholder="Search.."> -->
                <!-- <p>This is a simple pop-up created with HTML and JavaScript.</p> -->
                <table id="example" class="table borderless">                        
                        <thead>
                            <tr>
                                <th scope="col">Gambar</th>
                                <th scope="col">Exercise</th>
                                <th scope="col">Waktu / Set</th>
                                <th scope="col">Repetisi</th>
                                <!-- <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tinggi Badan</th>
                                <th scope="col">Berat Badan</th>
                                <th scope="col">No Hp</th> -->
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query_sql = "SELECT exercise.id_exercise,exercise.nama_exercise from exercise";
                            $sql= mysqli_query($koneksi, $query_sql);
                            $no = 1;
                            ?>
                            <?php
                            while ($result = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr>
                                <!-- <td>
                                        <input type="checkbox">
                                    </td> -->
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <td>
                                    <?php echo $result['nama_exercise']; ?>
                                    <input type="hidden" name="nama_exercise[]" value="<?php echo $result['nama_exercise']; ?>"></input>
                                    </td>
                                    <td>
                                        <input type="text" name="waktu_set[]">
                                    </td>
                                    <td>
                                       <input type="text" name="repetisi[]">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="cek" name="idcheckbox[]" value="<?= $result['id_exercise'];  ?>">
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                                 <button style=""> Tambah Exercise</button>
                    </form>
                    
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
                <li><a href="../Langganan/langganan.php">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">Langganan</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Exercise</span>
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
                    <span class="text">Data Exercise</span>
                </div>

                <div class="table-responsive">
                    <table id="example2" class="table borderless">
                    <a href="dash_exercise.php"><button style="border-right:0;" id="pilih">Exercise Paket </button></a> <a href="dash_exercise2.php"><button style="border-left: 0;" id="pilih2">Exercise User</button></a>
                        <a href="TambahUser/tambahuser.php"></a>
                                    <br>
                        
                        <thead>
                            <tr>
                                <th scope="col">Check</th>
                                <th scope="col">No</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Pelatih</th>
                                <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query_sql = "SELECT pelanggan.nama_pelanggan,pelanggan.id_pelanggan,pelanggan.tanggal_lahir,pelanggan.jenis_kelamin,pelanggan.bb,pelanggan.tb,pelanggan.id_trainner from pelanggan;";
                            $sql= mysqli_query($koneksi, $query_sql);
                            $no = 1;
                            ?>
                            <?php
                            while ($result = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr>
                                    <td>
                                    <input type="checkbox" id="check">
                                    </td>
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <td>
                                        Gambar
                                    </td>
                                    <td>
                                        <?php echo $result['nama_pelanggan']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['tanggal_lahir']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['jenis_kelamin']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['id_trainner']; ?>
                                    </td>
                                    <td class="crud">
                                        <a href= "userexcercise/userexcercise.php?excuser <?php echo $result['id_pelanggan']; ?>">
                                        <button style="background-color: #3A3F47"><img src="../../img/edit.png"alt=""></button></a>
                                        
                                        <a href="../koneksi/hapususer.php"><button><img src="../../img/delete.png" alt="" class="hapus"></button></a>
                                    </td>
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