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
         <header>Login</header>
        
         <div class="form-outer">
            <form action="../koneksi/loginform.php" method="POST">
               <div class="page slide-page">
                
        
               <div class="page">
                  <div class="field">
                     <div class="label">
                        Username
                     </div>
                     <input type="text">
                  </div>
                  <div class="field">
                     <div class="label">
                        Password
                     </div>
                     <input type="password">
                  </div>
                  <div class="field btns">
                     <button class="submit">Masuk</button>
                  </div>
               </div>
            </form>
            <span>Belum Punya Akun? <a href="register.php">Klik Disini</a></span>
         </div>
      </div>
      <script src="../JS/fungsi.js"></script>
   </body>
</html>