<?php


$id_register = $_POST["id_reg"];
$nama_awal = $_POST["namaawal"];
$nama_akhir = $_POST["namaakhir"];
$email = $_POST["email"];
$password = $_POST["password"];

include 'header.php';
?>


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
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="menuutama.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="data_profile.php">Profil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                  </ol>
                </nav>
                <h2>Edit Profile Anda</h2>
				<h1>Disini Anda dapat mengedit Nama dan password Anda untuk Email tidak bisa di edit . </h1>
				<form action="config/edit_daftar.php" method="POST" class="col-lg-6" style="color:white;">
				<!-- buat row form (baris ke 1 pada form) -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">Nama Depan</label>
						<input type="text" class="form-control" name="namaawal" value="<?php echo $nama_awal;?>">
					</div>
					<div class="form-group col-md-6">
						<label for="contoh2">Nama Belakang</label>
						<input type="text" class="form-control" name="namaakhir" value="<?php echo $nama_akhir?>">
					</div>
				</div>
				<!-- end baris 1 pada form -->

				<!-- baris ke 2 pada form -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">Email</label>
						<input type="text" class="form-control" name="email" value="<?php echo $email;?>"readonly>
					</div>
					<div class="form-group col-md-6">
						<label for="contoh2">Password</label>
						<input type="password" class="form-control" name="password" value="<?php echo $password;?>" >
</div>
				</div>
				<!-- end baris 2 pada form -->
				<input type="hidden" name="id_reg" value="<?php echo $id_register;?>"/>
				<button type="submit" class="btn btn-primary " style="color:rgb(192, 77, 115);background-color: white;border:white; margin-top:10px;">Edit Profile</a></button>
			</form>

</div>
</div>
</div>
</div>
</body>
</html>

