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
    <link rel="stylesheet" href="exercisesss.css">

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
                <span onclick="closeModal(myModal)" style="float: right; cursor: pointer;">&times;</span>
                <h2>Tambah Exercise</h2>
                <table id="example" class="table borderless">                        
                        <thead>
                            <tr>
                                <th scope="col">Gambar</th>
                                <th scope="col">Exercise</th>
                                <th scope="col">Waktu / Set</th>
                                <th scope="col">Repetisi</th>
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
                        <button onclick="openModal(myModal)" class="btntambah"><img src="../img/Vector.png"
                                    alt=""> Tambah Data</button>
                                    <br>
                                     <button style="" id="beginner">Beginner </button> <a href="dash_exercise_medium.php"><button style="" id="medium">Medium </button></a>  <a href="dash_exercise_expert.php"><button style="" id="expert">Expert</button></a>

                                     <div class="exercise-container">
                                     <!-- <?php
                                    function getExerciseId($action)
                                    {
                                        require('../../koneksi/konesi.php');
                                    
                                        // Fetch the current exercise ID from the URL
                                        $currentExerciseId = isset($_GET['id_exercises']) ? $_GET['id_exercises'] : 1;

                                        $selectfirst = mysqli_query($koneksi,"SELECT * from exercises where id_exercises = '$currentExerciseId' limit 1");
                                        $res = mysqli_fetch_assoc($selectfirst);
                                        var_dump($currentExerciseId);
                                    
                                        // Check if 'action' is set
                                        if (isset($action)) {
                                            if ($action == 'next') {
                                                // Fetch the next exercise
                                                $sqlNextExercise = mysqli_query($koneksi, "SELECT * FROM exercises WHERE id_exercises > $currentExerciseId ORDER BY id_exercises ASC LIMIT 1");
                                                $nextExercise = mysqli_fetch_assoc($sqlNextExercise);
                                                var_dump($nextExercise);

                                    
                                                if ($nextExercise) {
                                                    // Access the next exercise's data
                                                    return $nextExercise['id_exercises'];
                                                } else {
                                                    // No more exercises, handle accordingly
                                                    return $currentExerciseId;
                                                }
                                            } elseif ($action == 'prev') {
                                                // Fetch the previous exercise
                                                $sqlPrevExercise = mysqli_query($koneksi, "SELECT * FROM exercises WHERE id_exercises < $currentExerciseId ORDER BY id_exercises DESC LIMIT 1");
                                                $prevExercise = mysqli_fetch_assoc($sqlPrevExercise);
                                    
                                                if ($prevExercise) {
                                                    // Access the previous exercise's data
                                                    return $prevExercise['id_exercises'];
                                                } else {
                                                    // No previous exercise found, handle accordingly
                                                    return $currentExerciseId;
                                                }
                                            }
                                        }
                                    
                                        // Return the current exercise ID if 'action' is not set or if there is an issue fetching the next or previous exercise
                                        return $currentExerciseId;
                                    }
                                    
                                    // Initialize $currentExerciseId
                                    $currentExerciseId = getExerciseId(null);
                                    $prevExercise = getExerciseId('prev');
                                    $nextExercise = getExerciseId('next');
                                    ?>
                                    
                                    <div class="exercise-container">
                                        <a href="?action=prev&id_exercises=<?= $prevExercise; ?>">
                                            <button class="previous-button">Previous</button>
                                        </a>
                                        <div class="exercise-label">Exercise ID <?= $currentExerciseId; ?></div>
                                        <a href="?action=next&id_exercises=<?= $nextExercise; ?>">
                                            <button class="next-button">Next</button>
                                        </a>
                                    </div> -->


                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Exercise</th>
                                <th scope="col">Waktu / Set</th>
                                <th scope="col">Repetisi</th>
                                <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query_sql = "select exercise.nama_exercise,detail_paket_exercise.id_paket_exc , detail_paket_exercise.waktu_set,detail_paket_exercise.repetisi from exercise join detail_paket_exercise on exercise.id_exercise = detail_paket_exercise.id_exercise where detail_paket_exercise.id_paket = 1";
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
                                        Gambar
                                    </td>
                                    <td>
                                        <?php echo $result['nama_exercise']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['waktu_set']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['repetisi']; ?>
                                    </td>
                                    <td class="crud">
                                        <button data-idexc="<?php echo $result['id_paket_exc']; ?>" data-namaex="<?php echo $result['nama_exercise']; ?>" data-waktu-set ="<?php echo $result['waktu_set']; ?>" data-rep="<?php echo $result['repetisi']; ?>" class="btnupdate"  style="background-color: #3A3F47"><img src="../../img/edit.png"alt=""></button>
                                        <a href="../../koneksi/hapus_exercise_paket_bg.php?id_exc=<?= $result['id_paket_exc']; ?>"><button><img src="../../img/delete.png" alt="" class="hapus"></button></a>

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

        <div id="myModal2" class="modal2">
            <div class="modal-content2">
                <span onclick="closeModal(myModal2)" style="float: right; cursor: pointer;">&times;</span>
                <h2>Tambah Data Berlangganan</h2>

                <form action="../../koneksi/updateexcpaket.php" method="POST">

                <input type="hidden" name="idexc" id="idexc">
                <label for="">nama_exercise</label>
                <input name="nama_exercise" id="nama_exercise" style="padding: 12px;" type="text" placeholder="Search.." > 
                <label for="">Waktu / Set</label>
                <input name="waktuset" id="waktuset" style="padding: 12px;" type="text" placeholder="Search..">
                <label for="">Repetisi</label> 
                <input name="reps" id="reps" style="padding: 12px;" type="text" placeholder="Search..">

                <button style=""> Edit Exercise</button>
                </form>

                <script>
                    var myInput = document.getElementById('nama_exercise');

                    myInput.disabled = true;
                </script>
                
                
     
            </div>
         </div>

       
            <!-- The modal -->
            
    </section>

    <script src="../../JS/dashboard.js"></script>
    <script src="../../JS/modal.js"></script>
    <script src="../../JS/nextprev.js"></script>

    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.7.0.js"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"/>
</body>

</html>