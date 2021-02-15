<?php 
session_start();
require_once 'koneksi.php'; // panggil perintah koneksi database 

if(!isset($_SESSION['email'] )== 0) { // cek session apakah kosong(belum login) maka alihkan ke login.php
    header('Location: ../login.php');
}

if(isset($_POST['login'])) { // mengecek apakah form pada login.php variabelnya ada isinya
    $email = $_POST['email']; // isi varibel dengan mengambil data username pada form
    $password = $_POST['password'];
    echo $email;
    echo $password; // isi variabel dengan mengambil data password pada form

    try {
        $sql = "SELECT * FROM `pendaftarann` WHERE email = ? AND password = SHA1(?)"; // buat queri select
        $q = $database_connection->prepare($sql);
        $q->execute([$email, $password]); // jalankan query

        $count = $q->rowCount(); // mengecek row
        if($count == 1) { // jika rownya ada 
            $_SESSION['email'] = $email; // set sesion dengan variabel username
            header("Location: ../menuutama.php"); // lempar variabel ke tampilan index.php
            return;
        }else{
            // echo"<script type='text/javascript'>
            // alert('Username dan Passowrd tidak dikenali, Jika tidak memiliki Akun Silahka Daftar Terlebih dahulu');
            // window.location.replace('../login.php');
            // </script>";
            echo "Anda tidak dapat login";
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

?>