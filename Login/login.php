<?php
    require("../koneksi/konesi.php");
    session_start();
    if (isset($_SESSION["islogin"])) {
        header("Location: ../Dashboard/dashboard.php");
    }
    if (isset($_SESSION['idpelanggan'])) {
      header("Location: ../Landing/landing_pelanggan.php");
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Multi Step Form | CodingNepal</title>
      <link rel="stylesheet" href="loginn.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>

   <div id="customAlert" class="custom-alert"></div>

      
      <div class="container">
         <header>Login</header>
         
         <div class="form-outer">
            <form id="input" action="../koneksi/loginform.php" method="POST">
               <div class="page slide-page">
                  <div class="page">
                     <div class="field">
                     <div class="label">
                        Username
                     </div>
                     <input type="text" name="txtusername" id="username">
                  </div>
                  <div class="field">
                     <div class="label">
                        Password
                     </div>
                     <input type="password" name="txtpass" id="password">
                  </div>
                  <div class="field btns">
                     <button type="button" onclick="validateForm()" class="masuk">Masuk</button>
                  </div>
               </div>
            </form>
            <span>Belum Punya Akun? <a href="register.php">Klik Disini</a></span>
         </div>
      </div>
      
      
      
      
      <script src="../JS/fungsi.js"></script>
      <script src="../JS/validationn.js"></script>
   </body>
</html>