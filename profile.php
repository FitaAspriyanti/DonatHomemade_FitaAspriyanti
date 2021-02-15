<?php

$iddaf = $_POST["id"];
require_once 'config/koneksi.php';

try{
$sql = "SELECT penggunaa.id, penggunaa.id_daftar, penggunaa.alamat, 
 penggunaa.kelurahan,penggunaa.kecamatan,penggunaa.kota,penggunaa.provinsi,
 penggunaa.kode_pos,penggunaa.no_tlp,penggunaa.foto,
pendaftarann.nama_awal, pendaftarann.nama_akhir, pendaftarann.email, pendaftarann.password,pendaftarann.konfirmasi_password
FROM penggunaa RIGHT JOIN pendaftarann ON penggunaa.id = pendaftarann.id WHERE pendaftarann.id=?";
$q = $database_connection->prepare($sql);
$q->execute([$iddaf]);
}catch(PDOException $e){
die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

foreach ($q as $row) {
    $id = $row['id'];
    $id_daftar =  $row['id_daftar'];
    $namaawal = $row['nama_awal'];
    $namaakhir = $row['nama_akhir'];
    $namalengkap = $namaawal . " " . $namaakhir;
    $email = $row['email'];
    $photo = $row['foto'];
    $alamatrumah = $row['alamat'];
    $kelurahan = $row['kelurahan'];
    $kecamatan = $row['kecamatan'];
    $kota = $row['kota'];
    $provinsi = $row['provinsi'];
    $kodepos = $row['kode_pos'];
    $tlp =$row['no_tlp'];
   
}

include 'header.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
  
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/profile.css">
      
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
                <li role="presentation"><a href="d_favorite.php">Favorite</a></li>
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
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="menuutama.php">Home</a></li>
              <li class="breadcrumb-item"><a href="data_profile.php">Profile</a></li>
              <li class="breadcrumb-item active" aria-current="page">Detail Profile</li>
            </ol>
          </nav>
         <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $photo;?>" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $namalengkap;?></h4>
                      <p class="text-secondary mb-1"><?php echo $email;?></p>
                      <a href="<?php echo $photo;?>">Download Foto Profil</a>
                      <form action="config/upload_photo_user.php" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="id_daftar" value="<?php echo $id_daftar?>">
                      <input type="file" name="file" id="file">
                      <button type="submit">update foto</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0" style="color:black;">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $namalengkap;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"style="color:black;">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> <?php echo $email;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"style="color:black;">Alamat Rumah</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $alamatrumah . " , " . $kelurahan ."," . $kecamatan;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"style="color:black;">Kota</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $kota;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"style="color:black;">Provinsi</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $provinsi;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"style="color:black;">Kode Pos</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $kodepos;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"style="color:black;">No Telepon</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $tlp;?> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>    
</div>
</div>
</di>
</div>
</body>
</html>

