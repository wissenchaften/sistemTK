<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
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
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <span class="sr-only"></span></a>
                    </li>
                </ul>
                <div>
                    <a class="nav-link login-link" href="login.php">Login <span class="sr-only"></span></a>
                </div>
                <a class="nav-link login-link" href="registrasi.php">Registrasi <span class="sr-only"></span></a>
            </div>
        </nav>

    </header>
    <main>
        <div class="container-fluid">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item item active">
                        <img src="images/carousel1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Tugas Rapi</h5>
                            <p>Tugas yang selalu terhubung dengan guru, membuat mudah untuk melihat tugas yang ada.</p>
                        </div>
                    </div>
                    <div class="carousel-item item">
                        <img src="images/carousel2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kelola Tugas</h5>
                            <p>Guru dapat dengan mudah menggunakan fitur kelola tugas seperti menambahkan tugas, mengedit tugas.</p>
                        </div>
                    </div>
                    <div class="carousel-item item">
                        <img src="images/carousel3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Tetap terhubung</h5>
                            <p>Guru dan murid akan selalu terhubung untuk berbagi tugas.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </main>


    <!-- Footer -->
    <footer>

        <div class="bg-primary">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 text-white">Selalu update terus dengan kami di sosial media!</h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                        <!-- Facebook -->
                        <a href="#" class="fb-ic">
                            <i class="fab fa-facebook-f text-white mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a href="#" class="tw-ic">
                            <i class="fab fa-twitter text-white mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a href="#" class="ins-ic">
                            <i class="fab fa-instagram text-white"> </i>
                        </a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">sistemTK</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>SistemTK adalah aplikasi berbasis web yang digunakan untuk memudahkan hubungan antara guru dan murid taman kanak-kanak berbagi tugas.</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> Sumberpucung, Malang, Indonesia 65165</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> fanshori11@gmail.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 62 821 434 377 44</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href = "mailto: fanshori11@gmail.com">Fajar Shodiq Ansori</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>