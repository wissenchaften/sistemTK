<?php 
session_start();

include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

$nama = mysqli_query($conn, "SELECT nama FROM tb_user WHERE username='$username'");
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if($data['level']=="guru") {

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "guru";
        // alihkan ke halaman dashboard guru
        header("location:halaman_guru.php");

    // cek jika user login sebagai murid
    } else if($data['level']=="murid") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "murid";
        // alihkan ke halaman dashboard murid
        header("location:halaman_murid.php");

    // cek jika user login sebagai pengurus
    } else {

        // alihkan ke halaman login kembali
        header("location:login.php?pesan=gagal");
    }	
} else {
    header("location:login.php?pesan=gagal");
    }
?>