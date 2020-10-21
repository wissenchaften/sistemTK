<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
include "koneksi.php";
function query($query){
	
	global $conn; // global -> karena $conn di luar scope

	$result = mysqli_query($conn, $query);
	$rows = [];
	
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	
	return $rows;
}

function upload(){

	$namaFile   = $_FILES['fileTugas']['name'];
	$ukuranFile = $_FILES['fileTugas']['size'];
	$error      = $_FILES['fileTugas']['error'];
	$tmpName    = $_FILES['fileTugas']['tmp_name'];
	$maxsize    = ['> 2000000'];

	// cek apakah tidak ada file yang diupload
	if( $error === 4){
		echo "<script>
			alert('pilih file terlebih dahulu!');
			</script>
		";
		return false;
	}

	// cek apakah yang diupload adalah pdf
	$ekstensiFileValid = ['pdf'];
	$ekstensiFile = explode(".", $namaFile);
	$ekstensiFile = strtolower(end($ekstensiFile));

	if ( !in_array($ekstensiFile, $ekstensiFileValid) ) {

		echo "<script>
			alert('yang anda upload bukan file pdf');
			</script>
		";
		return false;
		
	}
	

	// cek jika ukuran file terlalu besar
	if (in_array($ukuranFile, $maxsize)){
		
		echo "<script>
			alert('ukuran file terlalu besar');
			</script>
		";
		return false;
	}

	// lolos pengecekan, pdf siap diupload
	// generate nama pdf baru fungsinya apabila ada file pdf yang sama tidak ditimpa dengan file pdf yang baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiFile;

	// pindahkan file yang diupload dari tmp_name ke directory asli
	move_uploaded_file($tmpName, 'file/'.$namaFileBaru);

	// kembalikan variabel ke parameter upload untuk di eksekusi
	return $namaFileBaru;

}


function tambahTugas($data){

	global $conn;
	$judulTugas       = $data["judulTgs"];
	$deksripsiTugas      = $data["deskripsiTgs"];
	$tglPembuatanTugas   = $data["tglPembuatanTgs"];
	$tglDeadlineTugas = $data["tglDeadlineTgs"];

	// upload file

	$file = upload();
	if ( !$file ){

		return false;

	}

	//query insert data
	$query = ("INSERT INTO tb_tugas(judul_tugas, deskripsi_tugas, tgl_pembuatan, tgl_deadline, file_tugas) VALUES 
		(
		'$judulTugas',
		'$deksripsiTugas',
		'$tglPembuatanTugas',
		'$tglDeadlineTugas',
		'$file'
		)
	");

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function tambahProfileGuru($data){

	global $conn;
	$namaGuru = $data["namaGuru"];
	$kelasGuru = $data["kelasGuru"];
	$tglLahirGuru = $data["tglLahirGuru"];
	$jkGuru = $data["jk"];
	$alamatGuru = $data["alamatGuru"];
	$noHpGuru = $data["noHpGuru"];
	$emailGuru = $data["emailGuru"];

	//query insert data
	$query = ("INSERT INTO tb_guru(nama_guru, kelas_guru,
				tgl_lahir_guru, jk_guru, alamat_guru, no_hp_guru, email_guru) VALUES 
		(
			'$namaGuru',
			'$kelasGuru',
			'$tglLahirGuru',
			'$jkGuru',
			'$alamatGuru',
			'$noHpGuru',
			'$emailGuru'
		)
	");

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function hapusTugas($id){

	global $conn;
	$query = ("DELETE FROM tb_tugas WHERE id = $id");

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubahTugas($data){
	global $conn;
	
	$id         		= $data["id"];
	$judulTugas       	= $data["judulTgs"];
	$deksripsiTugas     = $data["deskripsiTgs"];
	$tglPembuatanTugas  = $data["tglPembuatanTgs"];
	$tglDeadlineTugas 	= $data["tglDeadlineTgs"];
	
	$fileTugas = $data["fileTugas"];

	
		$fileTugas = upload();

		if ( !$fileTugas ){

			return false;
	
		}

	//query insert data
	$query = "UPDATE tb_tugas SET
				judul_tugas   = '$judulTugas',
				deskripsi_tugas  = '$deksripsiTugas',
				tgl_pembuatan    = '$tglPembuatanTugas',
				tgl_deadline  = '$tglDeadlineTugas',
				file_tugas = '$fileTugas'
			WHERE id = $id;
			";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function hapusMurid($id){

	global $conn;
	$query = ("DELETE FROM tb_murid WHERE id = $id");

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function tambahMurid($data){
	global $conn;
	
	$namaMurid      = $data["namaMurid"];
	$namaWaliMurid  = $data["namaWaliMurid"];
    $kelasMurid     = $data["kelasMurid"];
	$tglLahir       = $data["tglLahirMurid"];
    $jk             = $data["jk"];
	$alamat         = $data["alamat"];
	$noHpMurid      = $data["noHpMurid"];
	$tahunMasuk     = $data["tahunMasuk"];
    $emailMurid     = $data["emailMurid"];
    
    $query = ("INSERT INTO tb_murid(nama_murid, nama_wali_murid,
				kelas_murid, tgl_lahir_murid, jk_murid, alamat_murid, no_hp_murid,
				tahun_masuk_murid, email_murid) VALUES 
		(
			'$namaMurid',
			'$namaWaliMurid',
			'$kelasMurid',
			'$tglLahir',
			'$jk',
			'$alamat',
			'$noHpMurid',
			'$tahunMasuk',
			'$emailMurid'
		)
	");

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function ubahMurid($data){
	global $conn;
	
	$id             = $data["id"];
	$namaMurid      = $data["namaMurid"];
	$namaWaliMurid  = $data["namaWaliMurid"];
    $kelasMurid     = $data["kelasMurid"];
	$tglLahir       = $data["tglLahir"];
    $jk             = $data["jk"];
	$alamat         = $data["alamat"];
	$noHpMurid      = $data["noHpMurid"];
	$tahunMasuk     = $data["tahunMasuk"];
    $emailMurid     = $data["emailMurid"];
    
    $query = "UPDATE tb_murid SET
                nama_murid = '$namaMurid',
                nama_wali_murid = '$namaWaliMurid',
                kelas_murid = '$kelasMurid',
                tgl_lahir_murid = '$tglLahir',
                jk_murid = '$jk',
                alamat_murid = '$alamat',
                no_hp_murid = '$noHpMurid',
                tahun_masuk_murid = '$tahunMasuk',
                email_murid = '$emailMurid'
			WHERE id = $id;
			";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}
?>