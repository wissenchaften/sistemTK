<?php 
session_start();

if($_SESSION['level']=="") {
    header("location:index.php?pesan=gagal");
}
//menghubungkan dgn functions.php
require 'function.php';

// ambil data di URL

$id = $_GET['id'];

// query data mobil
$murid = query("SELECT * FROM tb_murid WHERE id = $id")[0];


//ambil data dari form

if (isset ($_POST["submit"])) {
	//  var_dump($_POST);

	// cek apakah data berhasil diubah atau tidak -> verifikasi update dgn function javascript
	if( ubahMurid($_POST) > 0 )  {
		echo "
			<script>
					location.href = 'halaman_guru.php';
			</script>
		";
	} else
		echo "
			<script>
					alert('Data gagal diubah!');
			</script>
		";
}

?>
<html>

<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ubah Data Murid</title>
        <link rel="stylesheet" href="css/style-admin.css"  />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>

	<body>
        <div class="container bg-light shadow">
        <a class="" href="halaman_guru.php">Kembali</a>
		<h1>Ubah Data Murid TK</h1>
		<form action="" method="POST">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?= $murid["id"]; ?>">
                        <label for="username">Username : </label><input name="username" type="text" id="username" class="form-control" value="<?= $murid["username_murid"]; ?>" required>
                </div>
				<div class="form-group">
                        <label for="namaMurid">Nama Murid : </label><input name="namaMurid" type="text" id="namaMurid" class="form-control" value="<?= $murid["nama_murid"] ?>" required>
                </div>
				<div class="form-group">
                        <label for="namaWaliMurid">Nama Wali Murid : </label><input name="namaWaliMurid" type="text" id="namaWaliMurid" class="form-control" value="<?= $murid["nama_wali_murid"]; ?>" required>
                </div>
                <div class="form-group">
					<label for="kelasMurid">Kelas : </label><input name="kelasMurid" type="text" id="kelasMurid" class="form-control" value="<?= $murid["kelas_murid"]; ?>" required>
                </div>
                <div class="form-group">
					<label for="tglLahir">Tanggal Lahir : </label><input name="tglLahir" type="date" id="tglLahir" class="form-control w-25" value="<?= $murid["tgl_lahir_murid"]; ?>" required>
                </div>
                <div class="form-check-inline">
                        <input name="jk" type="radio" id="jkL" class="form-check-input" value="1" <?= $murid['jk_murid'] == 1 ? "checked":"" ?>>
                        <label class="form-check-label" for="jkL">Laki - laki</label>
                </div>
                <div class="form-check-inline">
                        <input name="jk" type="radio" id="jkP" class="form-check-input" value="0" <?= $murid['jk_murid'] == 0 ? "checked":"" ?>>
                        <label class="form-check-label" for="jkP">Perempuan</label>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat : </label><input name="alamat" type="text" id="alamat" class="form-control" value="<?= $murid["alamat_murid"]; ?>" required>
                </div>
                <div class="form-group">
                    <label for="noHpMurid">No.Handphone : </label><input name="noHpMurid" type="text" id="noHpMurid" class="form-control" value="<?= $murid["no_hp_murid"]; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tahunMasuk">Tahun Masuk : </label><input name="tahunMasuk" type="text" id="tahunMasuk" class="form-control" value="<?= $murid["tahun_masuk_murid"]; ?>" required>
                </div>
                <div class="form-group">
                    <label for="emailMurid">Email Murid : </label><input name="emailMurid" type="email" id="emailMurid" class="form-control" value="<?= $murid["email_murid"]; ?>" required>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary w-100 p-3 mb-5"type="submit" name="submit"></input>
                </div>
		</form>
        </div>
	</body>

</html>