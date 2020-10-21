<?php 

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "koneksi.php";

session_start();
if($_SESSION['level']=="guru") {
    header("location:halaman_guru.php");
} elseif($_SESSION['level']=="murid"){
    header("location:halaman_murid.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c6af5a4484.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css">


    <title>Halaman Registrasi</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Sistem TK</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Registrasi <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#"><span>/&nbsp;&nbsp;</span>Registrasi</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <a class="" href="index.php">Kembali</a>
        <div class="text-center w-50 mx-auto" style="margin-top:100px;">

            <form action="" method="post">
                <h2>Registrasi</h2>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="username" name="username" class="form-control" id="username" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password2">Password Konfirmasi</label>
                    <input type="password" name="password2" class="form-control" id="password" autocomplete="off">
                </div>
                <div class="form-group row">
                    <div class="form-check col">
                        <input class="form-check-input" type="radio" name="level" id="level" value="murid">
                        <label class="form-check-label" for="level">
                            Murid
                        </label>
                    </div>
                    <div class="form-check col">
                        <input class="form-check-input" type="radio" name="level" id="level" value="guru">
                        <label class="form-check-label" for="level">
                            Guru
                        </label>
                    </div>
                </div>
                <input type="submit" value="submit" name="submit" class="btn btn-primary w-100 p-2">
            </form>
            <?php 
                // REGISTRASI USER
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $password2 = $_POST['password2'];
                    $level = $_POST['level'];
                    
                    if($password == $password2) {
                        mysqli_query($conn, "INSERT INTO tb_user(nama, username, password, level) VALUES ('$nama', '$username', '$password', '$level')");
                        echo "<script>alert('Akun berhasil dibuat')</script>";
                        echo "<script>location.href= 'login.php'</script>";
                    } else { echo "password tidak sama"; }
                    
                }
                
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
</body>

</html>