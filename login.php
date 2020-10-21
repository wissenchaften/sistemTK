<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE); 
session_start();

    if($_SESSION['level']=="guru") {
        header("location:halaman_guru.php");
    } elseif($_SESSION['level']=="murid"){
        header("location:halaman_murid.php");
    }
    
    if(isset($_GET['pesan'])) {
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
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
    <title>Login</title>
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
                        <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#"><span>/&nbsp;&nbsp;</span>Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <a class="" href="index.php">Kembali</a>
        <div class="text-center w-50 mx-auto" style="margin-top:200px;">

            <form action="cek_login.php" method="post">
                <h2>Login</h2>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="username" name="username" class="form-control" id="username" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" autocomplete="off">
                </div>
                <input type="submit" value="Login" class="btn btn-primary w-100 p-2">
            </form>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>