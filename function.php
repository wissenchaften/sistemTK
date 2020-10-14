<?php 
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

function hapusMurid($id){

	global $conn;
	$query = ("DELETE FROM tb_murid WHERE id = $id");

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubahMurid($data){
	global $conn;
	
	$id             = $data["id"];
	$username       = $data["username"];
	$namaMurid      = $data["namaMurid"];
	$namaWaliMurid  = $data["namaWaliMurid"];
    $kelasMurid     = $data["kelasMurid"];
	$tglLahir       = $data["tglLahir"];
	// radio
    $jk             = $data["jk"];
	$alamat         = $data["alamat"];
	$noHpMurid      = $data["noHpMurid"];
	$tahunMasuk     = $data["tahunMasuk"];
    $emailMurid     = $data["emailMurid"];
    
    $query = "UPDATE tb_murid SET
				username_murid = '$username',
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