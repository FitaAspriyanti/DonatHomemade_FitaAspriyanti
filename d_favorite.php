<?php

include 'config/d_data_favorite.php';
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
                    <li class="breadcrumb-item active" aria-current="page">Favorite</li>
                  </ol>
                </nav>
                <h2>Produk Favorite Anda</h2>
                <h1>Disini Anda dapat menambah ,mengedit, mengahapus produk donat yang Anda Sukai . Serta dapat memberi ulasan pada produk dan pesan untuk Kami . </h1>
                <h1>Jangan khawatir jika Anda salah Menulis ulasan ataupun pesan Anda dapat mengeditnya lalu kirim kembali atau menghapusnya produk favorite . </h1>
                <button type="submit" class="buttonfavorite" onclick ="window.location.href='tambah_dfavorite.php'">Tambah Produk Favorite</a></button>
             
   
        <table id="datafavorite" class="table table-striped table-bordered" style="width:100%; background-color: white; border:rgb(192, 77, 115);color:rgb(192, 77, 115);">
            <thead>
                <tr>
                    <th>Donat yang disukai </th>
                    <th>Rasa Donat</th>
                    <th>Toping Donat</th>
                    <th>Ulasan Produk</th>
                    <th>Pesan Untuk Kami</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $q->fetch()) :
                    $id = $row['id'];
                    $namadonat= $row['nama_donat'];
                    $jenisdonat =$row['jenis_donat'];
                    $rasadonat = $row['rasa_donat'];
                    $topingdonat =$row['toping_donat'];
                    $ulasanproduk = $row['ulasan_produk'];
                    $pesanuntukkami = $row['pesan_untuk_kami'];
                    $penilaian=$row['penilaian'];
                ?>
                    <tr>
                        <td><?php echo $namadonat; ?></td>
                        <td><?php echo $rasadonat; ?></td>
                        <td><?php echo $topingdonat; ?></td>
                        <td><?php echo $ulasanproduk; ?></td>
                        <td><?php echo $pesanuntukkami; ?></td>
                        <td>
                        <form action="edit_dfavorite.php" method="POST">
                                <input type="hidden" name="id_pro" value="<?php echo $id; ?>" />
                                <input type="hidden" name="namadonat" value="<?php echo $namadonat; ?>" />
                                <input type="hidden" name="jenisdonat" value="<?php echo $jenisdonat; ?>" />
                                <input type="hidden" name="rasadonat" value="<?php echo $rasadonat; ?>" />
                                <input type="hidden" name="topingdonat" value="<?php echo $topingdonat; ?>" />
                                <input type="hidden" name="ulasanproduk" value="<?php echo $ulasanproduk; ?>" />
                                <input type="hidden" name="pesanuntukkami" value="<?php echo $pesanuntukkami; ?>" />
                                <input type="hidden" name="penilaian" value="<?php echo $penilaian; ?>" />
                                <button type="submit" class="btn" style="color:white;background-color:rgb(192, 77, 115); border:rgb(192, 77, 115);">Edit  Produk Favorite</a></button>
                            </form>
                            <!-- form delete -->
                            <form action="config/hapus_dfavorite.php" method="POST">
                                <input type="hidden" name="id_pro" value="<?php echo $id; ?>" />
                                <button type="submit" class="btn " style="color:white;background-color:#fd4d97f5;border:#fd4d97f5;">Hapus  Produk Favorite</a></button>
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