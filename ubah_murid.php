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
					alert('Data berhasil diubah!');
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
		<meta charset="UTF-8">
		<title>Ubah Data Murid TK</title>
	</head>

	<body>
		<h1>Ubah Data Murid TK</h1>
		<form action="" method="POST">
			<ul>
				<input type="hidden" name="id" value="<?= $murid["id"]; ?>">
				<li>
					<label for="username">Username : </label><input name="username" type="text" id="username" value="<?= $murid["username_murid"]; ?>" required>
				</li>
				<li>
					<label for="namaMurid">Nama Murid : </label><input name="namaMurid" type="text" id="namaMurid" value="<?= $murid["nama_murid"] ?>" required>
				</li>
				<li>
					<label for="namaWaliMurid">Nama Wali Murid : </label><input name="namaWaliMurid" type="text" id="namaWaliMurid" value="<?= $murid["nama_wali_murid"]; ?>" required>
				</li>
				<li>
					<label for="kelasMurid">Kelas : </label><input name="kelasMurid" type="text" id="kelasMurid" value="<?= $murid["kelas_murid"]; ?>" required>
                </li>
                <li>
					<label for="tglLahir">Tanggal Lahir : </label><input name="tglLahir" type="text" id="tglLahir" value="<?= $murid["tgl_lahir_murid"]; ?>" required>
                </li>
                <li>
                    <label for="jk">Jenis Kelamin : </label><input name="jk" type="radio" id="jk" value="<?= $murid["jk_murid"]; ?>" required>
                </li>
                <li>
					<label for="alamat">Alamat : </label><input name="alamat" type="text" id="alamat" value="<?= $murid["alamat_murid"]; ?>" required>
                </li>
                <li>
					<label for="noHpMurid">No.Handphone : </label><input name="noHpMurid" type="text" id="noHpMurid" value="<?= $murid["no_hp_murid"]; ?>" required>
                </li>
                <li>
					<label for="tahunMasuk">Tahun Masuk : </label><input name="tahunMasuk" type="text" id="tahunMasuk" value="<?= $murid["tahun_masuk_murid"]; ?>" required>
                </li>
                <li>
					<label for="emailMurid">Email Murid : </label><input name="emailMurid" type="email" id="emailMurid" value="<?= $murid["email_murid"]; ?>" required>
				</li>
				<li>
					<input type="submit" name="submit"></input>
				</li>
			</ul>
		</form>

	</body>

</html>