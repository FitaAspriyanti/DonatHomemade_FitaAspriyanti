<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">  
       <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="css/stylelogin.css" > 
    </head>
    <body>
        <header> 
            <div class="container">
              <div class="header-left">
              Donuts Homemade Shop
              </div>
              <div class="header-right">
                <div class="header-right sm">
                    <li role="presentation"><a href="lokasi.php">Lokasi</a></li>
                </div>
                <div class="header-right sm">
                 <li role="presentation"><a href="index.php#tentang">Tentang</a></li>
              </div>
              <div class="header-right sm">
                <li role="presentation"><a href="index.php#info">Informasi</a></li>
            </div>
            <div class="header-right sm">
                <li role="presentation"><a href="index.php#home">Home</a></li>
          </div> </div> 
          </header>    
          <div class="row" >
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="container-login" >
                    <div class="card">
                    <div class="card-header">
                    <h4>Log In</h4>
                   <div class="sub-title">Silahkan <a href="daftar.php"> Daftar Akun</a> terlebih dahulu sebelum Log In</div></div>
                     <div class="icon-user"><h4 class="ti-user"></h4></div>
                       <div class="card-body">
                       <form action="config/login.php" method="POST" class="margin-t">
                       <div class="input-group mb-3">
                       <div class="input-group-prepend">
                       <span class="input-group-text"><i class="ti-email"></i></span></div>
                       <input type="text" name="email" class="form-control input-login" placeholder="Alamat email" require></div>
                       <div class="input-group mb-3">
                       <div class="input-group-prepend">
                       <span class="input-group-text"><i class="ti-lock"></i></span></div>
                       <input type="password" name="password" class="form-control input-login" placeholder="Kata sandi" require></div>
                       <div class="form-group"><label class="mz-check"><input type="checkbox">
                       <i class="mz-blue"></i>Ingat Selalu </label>
                       <label class="float-right"><a href="">Lupa Sandi?</a></label> </div>
                      
                           <button type="submit" class="btn btn-primary float-right" name="login"><a href="menuutama.php">Masuk</a></button>
                           </div> </div></div> </div>
            <footer>
                <div class="container" >
                <div class="text-center">
                 <h6 style="margin-top: 9px;">@Copyright by 18111055_FitaAspriyanti_TIFRP18CIDA_UASWEB1</h6>
               </div></div>
           </footer>
            <!-- <script type="text/javascript">
                function validasi() {
                    var email = document.getElementById("email").value;
                    var password = document.getElementById("password").value;
                    console.log(email,password)
                    if(username == "fitaas30@gmail.com" && password == "fita30"){
                        window.location.href = "menuutama.php"
                    }else if (username != "fitaas30@gmail.com" && password == "fita30") {
                        alert('Maaf Alamat Email yang dimasukkan Salah')
                    } else if (username == "fitaas30@gmail.com" && password != "fita30") {
                        alert('Maaf Kata Sandi yang dimasukkan Salah')
                    }  else{
                        alert('Silahkan isi Alamat Email dan Kata Sandi Terlebih Dahulu');
                    }
                }
             </script> -->
    </body>
</html>