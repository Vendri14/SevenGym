

<!DOCTYPE html>
<html lang ="en">
    <head>
        <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel = "stylesheet" type="text/css" href="login.css">
        <title>Halaman Login</title>
        <!-- <img src = "logo kiri.png" id ="logo kiri" class="kiri"> -->
    </head>
    <!-- <body>
        <div class = "desain" id = "desain">
            <form>
                
            </form>
         </div>
    </body>  -->
    <body>
        <!-- <img src = "logo kiri.png" id ="logo kiri" class="kiri"> -->
        <div class = "container" id = "container">
            <div class = "form-container login">
                <form action="../koneksi/loginform.php" method="POST">
                    <img src = "../img/logo.png" id="logo" class="gambar">
                    <h1>Login</h1>
                    <input type = "text" placeholder="Username" name="txtusername">
                    <i class='bx bx-user'></i>
                    <input type = "password" placeholder="Password" name="txtpass">
                    <i class='bx bxs-key'></i>
                    <span>Lupa Password? <a href="#">Klik Disini</a></span>
                    <span>Belum Punya Akun? <a href="register.html">Klik Disini</a></span>
                    <button type="submit">Masuk</button>
                </form>
            </div>
        </div>
        <script src = "script.js"></script>
    </body>
</html>