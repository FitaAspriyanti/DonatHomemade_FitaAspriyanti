<?php
//include 'session.php';
include 'config/data_daftar.php';
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
                <li role="presentation"><a href="profile.php">Profile</a></li>
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
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                  </ol>
                </nav>
                <h2>Profile </h2>
                <h1>Disini Anda dapat menambah dan mengedit data profile.</h1>
                <table id="datadaftar" class="table table-striped table-bordered" style="width:100%; background-color: white; border:rgb(192, 77, 115);color:rgb(192, 77, 115);">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $q->fetch()) :
                    $id = $row['id'];
                    $namaawal = $row['nama_awal'];
                    $namaakhir = $row['nama_akhir'];
                    $namalengkap = $namaawal . " " . $namaakhir;
                    $email = $row['email'];
                    $password = $row['password'];
                ?>
                    <tr>
                        <td><?php echo $namalengkap; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $password; ?></td>
                        <td>
                            <!-- form edit -->
                            <form action="edit_daftar.php" method="POST">
                                <input type="hidden" name="id_reg" value="<?php echo $id; ?>" />
                                <input type="hidden" name="namaawal" value="<?php echo $namaawal; ?>" />
                                <input type="hidden" name="namaakhir" value="<?php echo $namaakhir; ?>" />
                                <input type="hidden" name="email" value="<?php echo $email; ?>" />
                                <input type="hidden" name="password" value="<?php echo $password; ?>" />
                                <button type="submit" class="btn btn-primary " style="color:white;background-color:rgb(192, 77, 115); border:rgb(192, 77, 115);">Edit Profile</a></button>
                            </form>

                            <!-- form view -->
                            <form action="profile.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                <button type="submit" class="btn btn-primary " style="color:white;background-color:#fd4d97f5;border:#fd4d97f5; wight:50px;">Detail Profile</a></button>
                            </form>
                        </td>
                        </form>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    
                </div>
                </div>
                </div>
                </div>
                <script>
    $(document).ready(function() {
        $('#datafavorite').DataTable({
            "aLengthMenu": [
                [5, 10, 25, -1,5 ,10 ,10 ,10],
                [5, 10, 25, "All", "All", "All", 10 ,10]
            ],
            "iDisplayLength": 5
        });
    });
</script>
      </body>
      </html>

<body>
   
