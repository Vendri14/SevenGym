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
    <link rel="stylesheet" href="userlangganan.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.7/datatables.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.7/datatables.min.js"></script>

    <title>Admin Dashboard Panel</title>
</head>

<body>




<script type="text/javascript">
    $(document).ready(function(){
        $('#contoh').DataTable();
    });
    $(document).ready(function(){
        $('#contoh2').DataTable();
    });
</script>

        <div id="myModal" class="modal">
        <div id="customAlert" class="custom-alert"></div>
            <div class="modal-content">
                <span onclick="closeModal(myModal)" style="float: right; cursor: pointer;">&times;</span>
                <h2>Tambah Data Berlangganan</h2>
            
                <section class="parent">

                <section class="child">
                <div class="table-responsive-hd">
                    <table id="contoh2" class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                          
                          $sql_pelanggan = "SELECT * from pelanggan";
                          $sqlall= mysqli_query($koneksi, $sql_pelanggan);
                            $no = 1;
                            ?>
                            <?php
                            while ($result2 = mysqli_fetch_assoc($sqlall)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <td>
                                        <?php echo $result2['nama_pelanggan']; ?>
                                    </td>
                                   
                                    <td class="crud">
                                        <button onclick="selectPelanggan('<?php echo $result2['nama_pelanggan']; ?>', '<?php echo $result2['id_pelanggan']; ?>')">Pilih</button>
                                    </td></a>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                </section>
                        
                            <section class="child">
                                
                            <form id="simpan" action="../../koneksi/tambahlanggananadmin.php" method="POST" enctype="multipart/form-data">
                                <div class="input_langganan">
                                    <h3>Nama Pelanggan</h3>
                                    <label style="color: #F9A021;" id="namauser" for="">Pilih User Yang <br> Ingin Ditambahkan</label>
                                    <input type="hidden" id="inputnamauser" name="id_pelanggan" >
                                    <input type="hidden" id="imglama" name="imglama">


                                    <div class="column">
                                        <div class="label">
                                        <label for="">Lama Berlangganan</label> <br>
                                        <input type="text" name= "lama_berlangganan" placeholder="" id="months_input" oninput="updateDates3()">

                                        <input type="hidden" id="currentDateInput" name="current_date">
                                        <input type="hidden" id="oneMonthLaterInput" name="one_month_later">
                                        <input type="hidden" id="totalPriceInput" name="total_price">
                                        </div>

                                        <div class="label">
                                        <label for="">Jenis Langganan</label> <br>
                                        <select name="jenis_langganan" id="jenis_langganan">
                                        <option>Tahun</option>
                                        <option>Bulan</option>
                                    </select>                                        
                                </div>
                                <p style="font-weight: 600; margin-left: -2px" class="dato" id="currentDate"></p>
                                        <p style="font-weight: 700; margin-left: -2px" class="totprice" id="totalPrice"></p>

                                </div>
                                
                            </section>

                            <section class="child">
                                <div class="pict">
                                    <h3 class="buktitrans">Bukti Transaksi</h3>
                                    <img id="showimg" src="../../img/profilephoto.png" alt="">
                                </div>
                                <div class="button">
                                    <label class="custom-file-upload">
                                        Upload Bukti
                                        <input type="file" name="gambar" id="gambar"/>
                                    </label>
                                    <button type="button" onclick="validateTambahLangganan()" class="submit" name="tambahkan" id="tambahkan"> Tambah</button>

                                </div>
                            </section>

                </section>

                </form>

                <?php
                ?>
              
 
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
                    <table id="contoh" class="table table-bordered">
                        <a href="langganan.php"><button style="border-right:0;" id="pilih">Proses Transaksi </button></a> <a href="langganan_berlangganan.php"><button style="border-left: 0;" id="pilih2">Sudah Berlangganan</button></a>
                        <button onclick="openModal(myModal)" class="btntambah"><img src="../img/Vector.png" alt=""> Tambah Pelanggan Berlangganan</button>
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col">Tanggal Masuk</th>
                                <th scope="col">Tanggal Keluar</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Jenis Langganan</th>
                                <th scope="col">Lama Berlangganan</th>
                                <th scope="col">Bukti Transaksi</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                          
                          $query_sql = "SELECT pelanggan.nama_pelanggan,pelanggan.id_pelanggan, detail_langganan.tanggal_masuk,detail_langganan.id_berlangganan,detail_langganan.tanggal_keluar,detail_langganan.total_harga,detail_langganan.lama_berlangganan,detail_langganan.bukti_transaksi,detail_langganan.id_langganan,detail_langganan.id_pelanggan,detail_langganan.status,detail_langganan.jenis_langganan from pelanggan join detail_langganan on pelanggan.id_pelanggan = detail_langganan.id_pelanggan where status = 'Belum Terverivikasi'";
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
                                        <?php echo $result['jenis_langganan']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['lama_berlangganan']; ?>
                                    </td>
                                    <td>
                                        <img src="../../img/<?php echo $result['bukti_transaksi']; ?>" alt="">
                                    </td>
                                    <td>
                                        <?php echo $result['status']; ?>
                                    </td>
                                    <td class="crud"> <a href= "../../koneksi/verifikasi_langganan.php?id_langganan=<?= $result['id_berlangganan']; ?>"><button name="verifikasi" style="background-color: #A9FF65"><img src="../../img/centang.png" alt=""></button></a>
                                    <button class="updatemodal" name="updatemodal" data-nama="<?php echo $result ['nama_pelanggan']; ?>" data-id="<?php echo $result ['id_pelanggan'];?>" data-gambar="<?php echo $result ['bukti_transaksi'];?>" style="background-color: #3A3F47"><img src="../../img/edit.png" alt=""></button>
                                    <a href="../../koneksi/hapuslangganan.php?pelanggan=<?= $result['id_pelanggan']; ?>"><button><img src="../../img/delete.png" alt="" class="hapus"></button></a>

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
    <script src="../../JS/validation.js"></script>
    <script src="../../JS/showpict.js"></script>
    <script src="../../JS/modal.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.7.0.js"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"/>
</body>

</html>