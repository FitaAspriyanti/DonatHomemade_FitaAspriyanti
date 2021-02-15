<?php

include "header.php";
?>

<body>
	<!-- buat class container -->
    <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
  
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/favorite.css">
      
  </head>
  <body>
  <header class="fixed-top header-transparent">
        <div class="container">
          <div class="header-left">
          Donuts Homemade Shop
          </div>
          <div class="header-right">
          <div class="header-right sm">
                <li role="presentation"><a href="config/logout.php">Logout</a></li>
            </div>
          <div class="header-right sm">
                <li role="presentation"><a href="data_profile.php">Profile</a></li>
            </div>
            <div class="header-right sm">
                <li role="presentation"><a href="lokasi.php">Lokasi</a></li>
            </div>
            <div class="header-right sm">
             <li role="presentation"><a href="tentang.php">Tentang</a></li>
           </div>
          <div class="header-right sm">
            <li role="presentation"><a href="menuutama.php">Home</a></li>
          </div></div>
      </header>
      <div class="row">
        <div class="favorite" >
          <div class="isi">
          <div class="container ">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="menuutama.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="d_favorite.php">Favorit</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Data Favorite</li>
                  </ol>
                </nav>
                <h2>Tambah Data Favorite Anda</h2>
                <form action="config/d_favorite.php" method="POST" class="col-lg-6" style="color:white;">  
                <div class="form-group">
                         <label for="nama">Nama Produk</label>
                         <input type="text" class="form-control" name="namadonat" ></div>
                         <div class="form-group">
                         <label for="jenis">Jenis Produk</label>
                         <input type="text" class="form-control" name="jenisdonat" ></div>
                         <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="rasa">Rasa Donat</label>
                        <input type="text" class="form-control" name="rasadonat" ></div>
                         <div class="form-group col-md-6">
                         <label for="toping">Toping Donat </label>
                         <input type="text" class="form-control" name="topingdonat" ></div></div>
                         <div class="form-group">
                         <label for="ulasan">Ulasan Produk</label>
                         <input type="text" class="form-control" name="ulasanproduk" ></div>
                         <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="pesan">Pesan Untuk Kami</label>
                        <input type="text" class="form-control" name="pesanuntukkami" ></div>
                         <div class="form-group col-md-6">
                         <label for="penilaian">Penilaian </label>
                         <input type="text" class="form-control" name="penilaian" ></div></div>
                   
                         <button type="submit" class="btn btn-primary " style="color:rgb(192, 77, 115);background-color: white;border:white; margin-left:160px;">Tambah Produk Favorite</a></button>
            </form>


</div>
</div>
</div>
</div>
</body>
</html>