<?php
include 'koneksi.php';
require 'function.php';
session_start();
if($_SESSION['level']!="guru") {
    header("location:halaman_murid.php");
}

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']=="") {
    header("location:index.php?pesan=gagal");
}
if (isset ($_POST["submit"])) {

	// cek apakah data berhasil diubah atau tidak -> verifikasi update dgn function javascript
	if( tambahTugas($_POST) > 0 )  {
		echo "
            <script>
                    alert('Data Berhasil ditambahkan!');
					location.href = 'halaman_guru.php';
			</script>
		";
	} else
		echo "
			<script>
					alert('Data gagal ditambahkan!');
			</script>
		";
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Halaman Tambah Tugas</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css"> -->
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://kit.fontawesome.com/c6af5a4484.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-admin.css" />
</head>

<body>

    <div class="container bg-light shadow">
        <a class="" href="halaman_guru.php">Kembali</a>
        <h1>Tambah Tugas</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="namatugas">Judul Tugas</label>
                <input type="text" class="form-control" name="judulTgs" id="namatugas">
            </div>
            <div class="form-group">
                <label for="inputPassword4">Deskripsi Tugas</label>
                <textarea class="form-control" name="deskripsiTgs" id="deskripsiTgs" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="tglPembuatanTgs">Tanggal Pembuatan Tugas</label>
                <input type="date" name="tglPembuatanTgs" id="tglPembuatanTgs" class="form-control">
            </div>
            <div class="form-group">
                <label for="deadlineTgs">Deadline Tugas</label>
                <input type="date" name="tglDeadlineTgs" id="deadlineTgs" class="form-control">
                <p class="text-muted" style="font-size:12px;"> Note : Format tanggal bulan/hari/tahun</p>
            </div>
            <div class="form-group">
                <label for="deadlineTgs">File Tugas</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="fileTgs">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="fileTugas" class="custom-file-input" id="inputGroupFileTgs"
                            aria-describedby="fileTgs" accept="application/pdf">
                        <label class="custom-file-label" for="inputGroupFileTgs">Choose file</label>
                    </div>
                </div>
                <p class="text-muted" style="font-size:12px;"> Note : File PDF</p>
            </div>
            <div class="form-group">
                <input class="btn btn-primary w-100 p-3 mb-5" type="submit" name="submit"></input>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
    <script src="js/script.js"></script>
</body>

</html>