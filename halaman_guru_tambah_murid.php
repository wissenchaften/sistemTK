<?php
include 'koneksi.php';
require 'function.php';
session_start();
if($_SESSION['level']!="guru") {
    header("location:halaman_murid.php");
}
if($_SESSION['level']=="") {
    header("location:index.php?pesan=gagal");
}
if (isset ($_POST["submit"])) {

	// cek apakah data berhasil diubah atau tidak -> verifikasi update dgn function javascript
	if( tambahMurid($_POST) > 0 )  {
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
    <link rel="stylesheet" href="css/style-admin.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>

    <div class="container bg-light shadow">
        <a class="" href="halaman_guru.php">Kembali</a>
        <h1>Tambah Murid</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="namaMurid">Nama Murid</label>
                <input type="text" class="form-control" name="namaMurid" id="namaMurid" required>
            </div>
            <div class="form-group">
                <label for="namaWaliMurid">Nama Wali Murid</label>
                <input type="text" class="form-control" name="namaWaliMurid" id="namaWaliMurid" required>
            </div>
            <div class="form-group w-25">
                <label for="kelasMurid">Kelas</label>
                <select class="custom-select" name="kelasMurid" id="kelaMurid" required>
                    <option value="A">A</option>
                    <option value="B">B</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tglLahirMurid">Tanggal Lahir Murid</label>
                <input type="date" name="tglLahirMurid" id="tglLahirMurid" class="form-control" required>
                <p class="text-muted" style="font-size:12px;"> Note : Format tanggal bulan/hari/tahun</p>
            </div>
            
            <label>Jenis Kelamin</label><br/>
            <div class="form-check-inline mt-2">
                <input name="jk" type="radio" id="jkL" class="form-check-input" value="1">
                <label class="form-check-label" for="jkL">Laki - laki</label>
            </div>
            <div class="form-check-inline">
                <input name="jk" type="radio" id="jkP" class="form-check-input" value="0">
                <label class="form-check-label" for="jkP">Perempuan</label>
            </div>
            <div class="form-group mt-2">
                <label for="alamat">Alamat : </label><input name="alamat" type="text" id="alamat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="noHpMurid">No.Handphone : </label><input name="noHpMurid" type="text" id="noHpMurid" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tahunMasuk">Tahun Masuk : </label><input name="tahunMasuk" type="text" id="tahunMasuk" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="emailMurid">Email Murid : </label><input name="emailMurid" type="email" id="emailMurid" class="form-control" required>
            </div>
            <div class="form-group">
                <input class="btn btn-primary w-100 p-3 mb-5" type="submit" name="submit"></input>
            </div>
        </form>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>