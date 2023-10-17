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
            <form action="#">
               
               <div class="page slide-page">
                  <div class="field">
                     <div class="label">
                        Nama Lengkap
                     </div>
                     <input type="text">
                  </div>
                  <div class="field">
                     <div class="label">
                        Username
                     </div>
                     <input type="text">
                  </div>
                  <div class="field">
                     <button class="firstNext next">Next</button>
                  </div>
               </div>
               <div class="page">
                  
                  <div class="field">
                     <div class="label">
                        Password
                     </div>
                     <input type="password">
                  </div>
                  <div class="field">
                     <div class="label">
                        Konfirmasi Password
                     </div>
                     <input type="password">
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
                     <input type="date">
                  </div>
                  <div class="field">
                     <div class="label">
                        Gender
                     </div>
                     <select>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
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
                     <input type="text">
                  </div>
                  <div class="field">
                     <div class="label">
                        Berat Badan
                     </div>
                     <input type="text">
                  </div>
                  <div class="field">
                     <div class="label">
                        No Hp
                     </div>
                     <input type="text">
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