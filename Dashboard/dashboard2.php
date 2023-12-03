<?php
    require("../koneksi/konesi.php");

    session_start();
    if (!isset($_SESSION["islogin"])) {
        header("Location: ../Login/login.php");
    }
    $totaluser = "SELECT count(id_user) as totuser from user";
    $usertotal= mysqli_query($koneksi, $totaluser);
    $totus = mysqli_fetch_assoc($usertotal);
    

    $totalpelanggan = "SELECT count(id_user) as totpel from pelanggan";
    $pelanggantotal= mysqli_query($koneksi, $totalpelanggan);
    $totpel = mysqli_fetch_assoc($pelanggantotal);

    $totaltrainner = "SELECT count(id_trainner) as tottrain from trainner";
    $trainnertotal= mysqli_query($koneksi, $totaltrainner);
    $tottrain = mysqli_fetch_assoc($trainnertotal);
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
        <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.7/datatables.min.css" rel="stylesheet">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="dashboardo.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- css untuk data table -->
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.7/datatables.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.7/datatables.min.js"></script>

    <title>Admin Dashboard Panel</title>
</head>

<script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable();
    });
</script>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../img/logo.png" alt="">
            </div>

            <span class="logo_name">SevenGym</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="dashboard.php">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">User</span>
                    </a></li>
                <li><a href="Langganan/langganan.php">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">Langganan</span>
                    </a></li>
                <li><a href="ecxercise/dash_exercise.php">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Exercise</span>
                    </a></li>
               
            </ul>

            <ul class="logout-mode">
                <li><a href="../koneksi/logout.php">
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
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <span class="text">Total User</span>
                        <span class="number"><?= $totus['totuser'];?></span>
                    </div>
                    <div class="box box2">
                        <span class="text">User Pelatih</span>
                        <span class="number"><?= $tottrain['tottrain'];?></span>
                    </div>
                    <div class="box box3">
                        <span class="text">User Pelanggan</span>
                        <span class="number"><?= $totpel['totpel'];?></span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Data User</span>
                </div>

                <div class="table-responsive">
                    <table id="example" class="table borderless" style="width: 100%;">
                        <a href="dashboard.php"><button style="border-right:0;" id="pilih">Akun Pelanggan </button></a> <a href="dashboard2.php"><button style="border-left: 0;" id="pilih2">Akun Pelatih</button></a>
                        <!-- <a href="TambahUser/tambahuser.php"><button class="btntambah"><img src="../img/Vector.png"
                                    alt=""> Tambah Pelanggan</button></a> -->
                        <a href="TambahPelatih/tambahpelatih.php"><button class="btntambah"><img src="../img/Vector.png" alt=""> Tambah Pelatih</button></a>
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
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
                           
                            $query_sql = "SELECT user.id_user,trainner.nama_lengkap,trainner.deskripsi_pelatih,user.username,user.password from trainner join user on user.id_user = trainner.id_user";
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
                                        <?php echo $result['nama_lengkap']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['username']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['password']; ?>
                                    </td>
                                    <!-- <td>
                                        <?php echo $result['tanggal_lahir']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['jenis_kelamin']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['tb']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['bb']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['nohp']; ?>
                                    </td> -->
                                    <td class="crud">
                                        <a href= "PelatihEdit/edit_pelatih.php?update=<?= $result['id_user'];?>">
                                        <button style="background-color: #3A3F47"><img src="../img/edit.png"alt=""></button></a>
                                        
                                        <a href="../koneksi/hapustrainner.php?delete=<?= $result['id_user']; ?>"><button><img src="../img/delete.png" alt="" class="hapus"></button></a>
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

        
    </section>

    

    <script src="../JS/dashboard.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.7/datatables.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.7.0.js"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"/>
</body>

</html>