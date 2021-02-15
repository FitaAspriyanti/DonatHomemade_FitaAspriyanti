<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">  
       <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="css/styledaftar.css" > 
    </head>
    <body>
        <header> 
            <div class="container">
              <div class="header-left">
              Donuts Homemade Shop
              </div>
              <div class="header-right">
                <div class="header-right sm">
                    <li role="presentation"><a href="login.php">Masuk Akun</a></li>
                </div>
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
          </div></div> 
          </header>  
          <div class="row" >
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
                <div class="container-daftar">
                    <div class="card">
                    <div class="card-header">
                    <h4>Daftar Akun</h4>
                    <div class="sub-title">
                    Silahkan isi dengan benar sebelum melihat lebih lanjut
                    </div></div>
                    <div class="icon-user">
                    <h4 class="ti-user"></h4></div>
                    <div class="card-body">
                    <form action="config/daftar.php" method="POST" class="margin-t">
                        <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nama1">Nama Depan</label>
                        <input type="text" class="form-control" name="namaawal" required></div>
                         <div class="form-group col-md-6">
                         <label for="nama2">Nama Belakang </label>
                         <input type="text" class="form-control" name="namaakhir" required></div></div>
                         <div class="form-group">
                         <label for="email1">Email</label>
                         <input type="email" class="form-control" name="email" placeholder="cakebakeryshop@gmail.com" required>
                         </div>
                         <div class="form-group">
                         <label for="password1">Password</label>
                         <input type="password" class="form-control" name="password" required></div>
                         <div class="form-group">
                         <label for="password2">Konfirmasi Password</label>
                         <input type="password" class="form-control" name="konfirmasipassword" required></div>
                         <div class="form-group">
                         <div class="form-check">
                         <input class="form-check-input" type="checkbox" id="gridCheck">
                         <label class="form-check-label" for="gridCheck">Pastikan data yang Anda input sudah benar</label></div>
                         </div>
                         <button type="submit" class="btn btn-primary float-right">Lanjutkan</a></button>
                        </div> 
                    </div> 
                      </div>
                      </div>
                  </div>
                  </div> 
                  <footer>
                <div class="container" >
                <div class="text-center">
                 <h6 style="margin-top: 9px;">@Copyright by 18111055_FitaAspriyanti_TIFRP18CIDA_UASWEB1</h6>
               </div></div>
           </footer>
                    
 </body>
</html>