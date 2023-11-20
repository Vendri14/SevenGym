<?php
  require("../koneksi/konesi.php");
  session_start();
  

  if (!isset($_SESSION['idpelanggan'])) {
    echo '<script>window.location = "../Login/login.php";</script>';
  }

  $userid = $_SESSION['idpelanggan'];
  $sql = mysqli_query($koneksi,"SELECT * from pelanggan where id_pelanggan = '$userid'");
  $result = mysqli_fetch_assoc($sql);

  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="stylem.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    
  <nav class="navbar sticky-top navbar-expand-lg ">
  <div class="container">
    <img src="../img/logo.png" alt="">
    <span class="pd" >SG</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#konten2">Tentang Kita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pelayanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pelatih Kita</a>
        </li>
      </ul>

      <!-- butonnya -->
      <li class="nav">
        <a href="../koneksi/logout.php"><button>Download Aplikasi</button></a>
      </li>
      <li class="nav">
        <img style="border-radius: 50%;
        height: 60px; width: 70px;" src="../img/<?php echo $result['profil_pelanggan']; ?>" alt="">
      </li>
      <!-- <span class="navbar-text">
        Navbar text with an inline element
      </span> -->
    </div>
  </div>
</nav>

<div class="hero-section">
  <div class="opacity">
    <div class="hero-content">
      <img src="../img/logo.png" alt="">
      <h1><label for="">SEVEN</label><label style="color: #F9A021;" for="">GYM</label></h1>
      <p >Lorem ipsum dolor sit amet consectetur <br> adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. <br>Pellentesque sit amet sapien.</p>
      <a href="#cta" class="cta-button">Daftar Sekarang</a>
      
  </div>
</div>
</div>


  <section class="parent">
    <section style="background-color: #F9A021;" class="child">
      <div class="konten" >
        <h1 data-aos="fade-right"> <h1 data-aos="fade-right" >Mengapa</h1> <br>  <h1 data-aos="fade-right">Memilih</h1> <br>  <h1 data-aos="fade-right">Kita?</h1></h1>
      </div>
    </section>

    <section class="child">
      <div class="konten2">
        
        <div class="container_isi">
          <h2 data-aos="zoom-in-up" data-aos-duration="1500">Fasilitas Lengkap</h2>
          <div data-aos="zoom-in-up" data-aos-duration="1500" class="isi">
            <img src="../img/fasilitas.png" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.</p>
          </div>
        <div data-aos="zoom-in-up" class="container_isi">
          <h2>Pelatih Terbaik</h2>
          <div data-aos="zoom-in-up" data-aos-duration="1000"class="isi">
            <img src="../img/pelatih_terbaik.png" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.</p>
          </div>
        <div class="container_isi">
          <h2 data-aos="zoom-in-up">Harga Terjangkau</h2>
          <div data-aos="zoom-in-up" data-aos-duration="1000"class="isi">
            <img src="../img/money.png" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.</p>
          </div>
      
      
        
      </div>
    </section>
  </section>

  <div  data-aos="zoom-in" class="centerlogo">
    <img src="../img/logocenter.png" alt="">
  </div>


  <section class="parent">
    <!-- <img src="../img/logocenter.png" alt=""> -->
    <section class="child">
      <div class="pict">
        <img data-aos="fade-right"src="../img/pullup.png" id="kiw" alt="">
        <img data-aos="fade-right"src="../img/kuwi.png" id="pullup"alt="">
      </div>
    </section>

    <section class="child">
      <div class="label">
        <h1 data-aos="fade-left">Tentang <br> Seven <label style="color: #F9A021;" for="">Gym</label></h1>
      </div>
        <div class="description">
          <p data-aos="fade-left" data-aos-duration="2000" >Dibuka pada tahun <label style="font-weight: 700;" for="">2023</label>, <label style="font-weight: 700;" for="">Seven<label style="color: #F9A021;" for="">Gym</label></label> telah berkomitmen untuk membantu anggota kami mencapai hasil yang luar biasa dalam perjalanan mereka menuju gaya hidup yang lebih sehat. Dengan berbagai jenis peralatan canggih, pelatih pribadi berpengalaman, dan beragam kelas kebugaran yang menginspirasi, <label style="font-weight: 700;" for="">kami menyediakan semua yang Anda butuhkan untuk mencapai tujuan kesehatan Anda.</label></p>
        </div>
    </section>

  </section>

  <section class="daftar-harga">

    <section class="listing">
      <h1 data-aos="fade-right">List Harga</h1>

      <!-- <a href=""> <button style="border-right:0;" id="pilih">Proses Transaksi <button style="border-left: 0;" id="pilih">Sudah Berlangganan</button></button> </a> -->
    </section>

    <section class="langganan">
    </div>
    
    </div>
    <div class="card" data-aos="flip-left" data-aos-duration="1000" >
      <div class="card-body">
        <h5 class="card-title">BULANAN</h5>
        <h3 class="card-price">Rp 150.000<label style="font-size:20px;" for="">/bln</label> </h3>
        <p class="card-text">Semua Fasilitas.</p>
        <button onclick="openModal(myModal2)" class="btn btn-primary">Daftar Sekarang</button>
      </div>
    </div>
    <div class="card" data-aos="flip-right" data-aos-duration="1000" >
      <div class="card-body">
        <h5 class="card-title">TAHUNAN</h5>
        <h3 class="card-price">Rp 150.000<label style="font-size: 20px;" for="">/thn</label> </h3>
        <p class="card-text">Semua Fasilitas.</p>
        <button onclick="openModal(myModal2)" class="btn btn-primary">Daftar Sekarang</button>
      </div>
    </div>

  </section>
  </section>


  <section class="pelayanan">
    <div class="layanan">
      <h1 data-aos="fade-up"> Pelayanan Kami</h1>

      <div id="card-container">
        <div class="cards" data-aos="zoom-in" data-aos-duration="1100">
          <img src="../img/fasilitas.png" alt="Card 1">
          <div class="card-content">
            <h3 class="card-title">Title 1</h3>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="cards" data-aos="zoom-in" data-aos-duration="1500">
          <img src="../img/hero.png" alt="Card 2">
          <div class="card-content">
            <h3 class="card-title">Title 2</h3>
            <p class="card-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <div class="cards" data-aos="zoom-in" data-aos-duration="1900">
          <img src="../img/kuwi.png" alt="Card 3">
          <div class="card-content">
            <h3 class="card-title">Title 3</h3>
            <p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>
        </div>
        <!-- Add more cards as needed -->
      </div>

  </section>

  <section class="trainner">
    <div class="train">

      <h1>Trainner Kami</h1>

      <div id="image-grid" data-aos="fade-up" data-aos-duration="1500">
        <div class="grid-item">
          <img src="../img/fasilitas.png" alt="Image 1">
        </div>
        <div class="grid-item">
          <img src="../img/fasilitas.png" alt="Image 2">
        </div>
        <div class="grid-item">
          <img src="../img/fasilitas.png" alt="Image 3">
        </div>
        <div class="grid-item">
          <img src="../img/fasilitas.png" alt="Image 3">
        </div>
        <div class="grid-item">
          <img src="../img/fasilitas.png" alt="Image 3">
        </div>
        <div class="grid-item">
          <img src="../img/fasilitas.png" alt="Image 3">
        </div>
        <div class="grid-item">
          <img src="../img/fasilitas.png" alt="Image 3">
        </div>
        <div class="grid-item">
          <img src="../img/fasilitas.png" alt="Image 3">
        </div>
        <!-- Add more grid items as needed -->
      </div>


    </div>

  </section>

  <section class="lokasi">
    <div class="location">

      <div id="map-container" data-aos="fade-up" data-aos-duration="1000">
        <!-- Replace the "YOUR_GOOGLE_MAPS_EMBED_URL" with your actual Google Maps Embed URL -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.868188538572!2d113.85023117420859!3d-7.908835778710694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6dd52243974c1%3A0x7decdfc807ba91f9!2sSEVEN%20GYM%20Bondowoso!5e0!3m2!1sid!2sid!4v1700240876432!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

  </section>

  <section class="footer">
    <div class="footersection">
      <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
          <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-white text-decoration-none">
              <img style="width: 100px;" src="../img/logo.png" alt="">
            </a>
            <p style="color: white !important;" class="text-muted">&copy; 2022</p>
          </div>
      
          <div class="col mb-3">
      
          </div>
      
          <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>
      
          <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>
      
          <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>
        </footer>
      </div>
    </div>
  </section>

  <div id="myModal2" class="modal2">
    <div class="modal-content2">
        <span onclick="closeModal(myModal2)" style="float: right; cursor: pointer;">&times;</span>
       <!-- insert Langganan -->
        <form action="../koneksi/tambahlangganan.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="id" placeholder="Ex : SEVRI VENDRIAN" value="<?= $result["id_user"]; ?>">
        <input type="hidden" name="id" placeholder="Ex : SEVRI VENDRIAN" value="<?= $result["id_user"]; ?>">
        <section class="ortu">
    <!-- <img src="../img/logocenter.png" alt=""> -->
    <section class="bayu">
    <h2>Berlangganan</h2>
        <h3 class="price">Rp 150.000<label style="font-size: 20px;" for="">/thn</label> </h3>
        <h5 class="fasility">Semua Fasilitas</h5>
      </section>
      <section class="bayi">
        <h2>Pembayaran</h2>
        <div class="image">
        <img class="wa" src="../img/mastercard.png" alt="">
        <div class="iso">
          <p>4716056368808860</p>
        </div>
      </div>
    </section>
  </section>

  <section class="atasan">
          <section class="bawahan">
          <div class="datadiri">
            <H3>Cara Pembayaran</H3>
            <label for="">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit essDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.e cillum dolore eu fugiat nulla pariatur.</label><br>
          </div>
          </section>
          <section class="bawahan">
          <div class="bukpem">
            <h3>Bukti Pembayaran</h3>
            <img id="showimg" src="../img/profilephoto.png" alt="">
            <label style="font-size: 25px; margin-bottom: 10px;" for="months_input">Lama Berlangganan</label>
              <input type="text" id="months_input" oninput="updateDates()" name="lama_berlangganan"required> 
              
              <input type="hidden" id="" name="id_pelanggan" value="<?php echo $result['id_pelanggan']; ?>">
              <input type="hidden" id="currentDateInput" name="current_date">
              <input type="hidden" id="oneMonthLaterInput" name="one_month_later">
              <input type="hidden" id="totalPriceInput" name="total_price">

              <p style="font-weight: 600; margin-left: -2px" class="dato" id="currentDate"></p>
              <p style="font-weight: 700; margin-left: -2px" class="dato" id="totalPrice"></p>

            <p style="color: red;  margin-left: -2px;">Upload Bukti Pembayaran</p>
            <label style="" class="custom-file-upload">
                     <p style="margin-top: 15px">Pilih File</p>
                        <input type="file" name="gambar" id="gambar"/></div>
          </section>
  </section>
          

  <button class="butonlanggan">Berlangganan Sekarang</button>
        </form>
    </div>
 </div>

 
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

 <script src="../JS/modals.js"></script>
 <script src="../JS/showpict.js"></script>
 <script>
  AOS.init();
 </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


