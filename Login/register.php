<?php
require "../koneksi/konesi.php";
if(isset($_POST["btn_next"])){
   $newusername=$_POST['username'];

   function isUsernameUnique($koneksi, $username){
      if(isset($_POST["btn_next"])){
         $newusername=$_POST['username'];
      
      $sql = "SELECT count(username) as cek_username FROM user WHERE username = '$newusername'";
      $stmt = $koneksi->prepare($sql);
      $stmt->bindParam("s", $username);
      $stmt->execute();
      $result = $stmt->get_result();
      $stmt->close();
   
      if($result->num_rows > 0){
         $row = $result->fetch_assoc();
         $cek = $row["cek_username"];
         if($cek != 0){
            return false;
         }else{
            return true;
         }
      }
      }     
   }
   if(isUsernameUnique($koneksi, $newusername)){
      echo '<script language ="javascript">
      alert ("Username Disimpan"); document.location="../Login/register.php"; </script>';
   }else{
      echo '<script language ="javascript">
      alert ("Username Sudah Ada"); document.location="../Login/register.php"; </script>';
   }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Multi Step Form | CodingNepal</title>
      <link rel="stylesheet" href="register.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="container">
      <!-- <img src="../img/logo.png" id="logo" class="gambar"> -->
         <header>Register</header>
        
         <div class="form-outer">
            <form action="../koneksi/registerform.php" method="POST">
               
               <div class="page slide-page">
                  <div class="field">
                     <div class="label">
                        Nama Lengkap
                     </div>
                     <input type="text" name="nama_pelanggan">
                  </div>
                  <div class="field">
                     <div class="label">
                        Username
                     </div>
                     <input type="text" name="username">
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
                     <input type="password" name="password">
                  </div>
                  <div class="field">
                     <div class="label">
                        Konfirmasi Password
                     </div>
                     <input type="password" name="repass">
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
                     <input type="date" name="tanggal_lahir">
                  </div>
                  <div class="field">
                     <div class="label">
                        Gender
                     </div>
                     <select name="jenis_kelamin">
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
                     <input type="text" name="tb">
                  </div>
                  <div class="field">
                     <div class="label">
                        Berat Badan
                     </div>
                     <input type="text" name="bb">
                  </div>
                  <div class="field">
                     <div class="label">
                        No Hp
                     </div>
                     <input type="text" name="nohp">
                  </div>
                  <div class="field btns">
                     <button class="prev-3 prev">Previous</button>
                     <button class="submit">Submit</button>
                  </div>
               </div>
            </form>
            <span>Sudah Punya Akun? <a href="#">Klik Disini</a></span>
         </div>
      </div>
      <script src="../JS/fungsi.js"></script>
   </body>
</html>