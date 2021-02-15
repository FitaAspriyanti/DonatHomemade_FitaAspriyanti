
<?php
require_once "koneksi.php";
$nama_donat = $_POST["namadonat"];
$jenis_donat= $_POST["jenisdonat"];
$rasa_donat= $_POST["rasadonat"];
$toping_donat= $_POST["topingdonat"];
$ulasan_produk= $_POST["ulasanproduk"];
$pesan_untuk_kami= $_POST["pesanuntukkami"];
$penilaian= $_POST["penilaian"];

$q = $database_connection->prepare("INSERT INTO `favorite` (`id`,`nama_donat`, `jenis_donat`, `rasa_donat`, 
`toping_donat`, `ulasan_produk`,`pesan_untuk_kami`,`penilaian`) VALUES (Null,?, ?, ?, ?, ?, ?, ?);");
$q->execute([$nama_donat, $jenis_donat, $rasa_donat, $toping_donat,$ulasan_produk,$pesan_untuk_kami,$penilaian]);
header("Location: ../d_favorite.php");
?>