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
$tugas = query("SELECT * FROM tb_tugas WHERE id = $id")[0];


//ambil data dari form

if (isset ($_POST["submit"])) {
	//  var_dump($_POST);

	// cek apakah data berhasil diubah atau tidak -> verifikasi update dgn function javascript
	if( ubahTugas($_POST) > 0 )  {
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
    <title>Ubah Data Tugas</title>
    <link rel="stylesheet" href="css/style-admin.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="container bg-light shadow">
        <a class="" href="halaman_guru.php">Kembali</a>
        <h1>Ubah Data Tugas</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $tugas["id"]; ?>">
                <label for="judulTgs">Judul Tugas : </label><input name="judulTgs" type="text" id="judulTgs"
                    class="form-control" value="<?= $tugas["judul_tugas"]; ?>" required>
            </div>
            <div class="form-group">
                <label for="deskripsiTgs">Deskripsi Tugas : </label><input name="deskripsiTgs" type="text"
                    id="deskripsiTgs" class="form-control" value="<?= $tugas["deskripsi_tugas"] ?>" required>
            </div>
            <div class="form-group">
                <label for="tglPembuatanTgs">Tanggal Pembuatan : </label><input name="tglPembuatanTgs" type="date"
                    id="tglPembuatanTgs" class="form-control" value="<?= $tugas["tgl_pembuatan"]; ?>" required>
            </div>
            <div class="form-group">
                <label for="tglDeadlineTgs">Tanggal Deadline : </label><input name="tglDeadlineTgs" type="date"
                    id="tglDeadlineTgs" class="form-control" value="<?= $tugas["tgl_deadline"]; ?>" required>
            </div>
            <div class="form-group">
                <label for="deadlineTgs">File Tugas</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="fileTgs">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="fileLama" class="custom-file-input" id="inputGroupFileTgs"
                            aria-describedby="fileTgs" accept="application/pdf" value="<?=$tugas["file_tugas"];?>" style="display:none;">
                        <input type="file" name="fileTugas" class="custom-file-input" id="inputGroupFileTgs"
                            aria-describedby="fileTgs" accept="application/pdf">
                        <label class="custom-file-label" for="inputGroupFileTgs">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input class="btn btn-primary w-100 p-3 mb-5" type="submit" name="submit"></input>
            </div>
        </form>
    </div>
</body>

</html>