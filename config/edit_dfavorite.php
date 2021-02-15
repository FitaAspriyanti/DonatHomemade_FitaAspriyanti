<?php
require_once "koneksi.php";
$id_produk= $_POST["id_pro"];
$nama_donat = $_POST['namadonat'];
$jenis_donat =$_POST['jenisdonat'];
$rasa_donat = $_POST['rasadonat'];
$toping_donat =$_POST['topingdonat'];
$ulasan_produk = $_POST['ulasanproduk'];
$pesan_untuk_kami = $_POST['pesanuntukkami'];
$penilaian =$_POST['penilaian'];

$q = $database_connection->prepare("UPDATE `favorite` SET `nama_donat` = ?, 
`jenis_donat` = ?, `rasa_donat` = ?, `toping_donat`=?,`ulasan_produk`=?, `pesan_untuk_kami`=? ,`penilaian`=?WHERE `favorite`.`id` = ?");
$q->execute([$nama_donat, $jenis_donat, $rasa_donat, $toping_donat,$ulasan_produk,$pesan_untuk_kami,$penilaian,$id_produk]);
header("Location: ../d_favorite.php");
?>
