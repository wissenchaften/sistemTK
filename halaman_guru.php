<?php 
include "koneksi.php";
include "function.php";
session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']=="") {
    header("location:index.php?pesan=gagal");
}

$murid = query("SELECT * FROM tb_murid");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Halaman Guru</title>
        <link rel="stylesheet" href="css/style-admin.css"  />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php">SistemTK</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Search -->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Guru</div>
                            <a class="nav-link" href="halaman_guru.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="halaman_guru_profil.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                                Profil
                            </a>
                            <div class="sb-sidenav-menu-heading">Tugas Section</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Kelola Tugas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="tambah_tugas.php">Tambah Tugas</a>
                                    <a class="nav-link" href="edit_tugas.php">Edit Tugas</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:  </div>
                        <?= $_SESSION['username'] .' ('. $_SESSION['level'] .') '; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                                Data Murid TK
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Username</th>
                                                <th>Nama</th>
                                                <th>Nama Wali</th>
                                                <th>Kelas</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>No. Handphone</th>
                                                <th>Tahun Masuk</th>
                                                <th>Email</th>
                                                <th><i class="fa fa-cog"></i></th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Username</th>
                                                <th>Nama</th>
                                                <th>Nama Wali</th>
                                                <th>Kelas</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>No. Handphone</th>
                                                <th>Tahun Masuk</th>
                                                <th>Email</th>
                                                <th><i class="fa fa-cog"></i></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php foreach( $murid as $row ) { ?>
                                            
                                        <tr>
                                            <td><?= $row["id"]; ?></td>
                                            <td><?= $row["username_murid"]; ?></td>
                                            <td><?= $row["nama_murid"]; ?></td>
                                            <td><?= $row["nama_wali_murid"]; ?></td>
                                            <td><?= $row["kelas_murid"]; ?></td>
                                            <td><?= $row["tgl_lahir_murid"]; ?></td>
                                            <td><?php 
                                                $jk = "Perempuan";
                                                if($row["jk_murid"]==1){
                                                    $jk = "Laki-Laki";
                                                }
                                                echo $jk;
                                            ?></td>
                                            <td><?= $row["alamat_murid"]; ?></td>
                                            <td><?= $row["no_hp_murid"]; ?></td>
                                            <td><?= $row["tahun_masuk_murid"]; ?></td>
                                            <td><?= $row["email_murid"]; ?></td>
                                            <td><a href="ubah_murid.php?id=<?=$row["id"];?>"><i class="fa fa-edit"></i></a> <a href="hapus_murid.php?id=<?=$row["id"];?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?');"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <?php }  ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Fajar Shodiq Ansori</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <!--
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script> 
        -->
    </body>
</html>
