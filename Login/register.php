
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Multi Step Form | CodingNepal</title>
      <link rel="stylesheet" href="registers.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>

   <div id="customAlert" class="custom-alert"></div>
      <div class="container">
      <!-- <img src="../img/logo.png" id="logo" class="gambar"> -->
         <header>Register</header>
        
         <div class="form-outer">
            <form id="input" action="../koneksi/registerform.php" method="POST">
               
               <div class="page slide-page">
                  <div class="field">
                     <div class="label">
                        Nama Lengkap
                     </div>
                     <input type="text" name="nama_pelanggan" id="nama_lengkap">
                  </div>
                  <div class="field">
                     <div class="label">
                        Username
                     </div>
                     <input type="text" name="username" id="username">
                     <?php
                     
                     ?>
                  </div>
                  <div class="field">
                     <button class="firstNext next" name="btn_next">Next</button>
                  </div>
               </div>
               <div class="page" name="next_pass">
                  
                  <div class="field">
                     <div class="label">
                        Password
                     </div>
                     <input type="password" name="password" id="password">
                  </div>
                  <div class="field">
                     <div class="label">
                        Konfirmasi Password
                     </div>
                     <input type="password" name="repass" id="konfirmasi_pass">
                  </div>
                  <div class="field btns">
                     <button class="prev-1 prev">Previous</button>
                     <button class="next-1 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  
                  <div class="field">
                     <div class="label">
                        Date
                     </div>
                     <input type="date" name="tanggal_lahir" id="tanggal">
                  </div>
                  <div class="field">
                     <div class="label">
                        Gender
                     </div>
                     <select name="jenis_kelamin" id="jenis_kelamin">
                        <option>Perempuan</option>
                        <option>Laki-Laki</option>
                     </select>
                  </div>
                  <div class="field btns">
                     <button class="prev-2 prev">Previous</button>
                     <button class="next-2 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  
                  <div class="field">
                     <div class="label">
                        Tinggi Badan
                     </div>
                     <input type="text" name="tb" id="tb">
                  </div>
                  <div class="field">
                     <div class="label">
                        Berat Badan
                     </div>
                     <input type="text" name="bb" id="bb">
                  </div>
                  <div class="field">
                     <div class="label">
                        No Hp
                     </div>
                     <input type="text" name="nohp" id="nohp">
                  </div>
                  <div class="field btns">
                     <button class="prev-3 prev">Previous</button>
                     <button type="button" onclick="validateRegisterForm()" class="submit">Submit</button>
                  </div>
               </div>
            </form>
            <span>Sudah Punya Akun? <a href="login.php">Klik Disini</a></span>
         </div>
      </div>
      <script src="../JS/fungsi.js"></script>
      <script src="../JS/validation.js"></script>
   </body>
</html>