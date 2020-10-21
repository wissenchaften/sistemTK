<?php //menghubungkan ke fungsi di functions.php
require 'function.php';

$id = $_GET["id"];

if ( hapusTugas($id) > 0) {
	echo "
			<script>
                    alert('Data berhasil dihapus!');
                    location.href = 'halaman_guru.php';
			</script>
		";
} else
	echo "
			<script>
                    alert('Data gagal dihapus!');
                    location.href = 'halaman_guru.php';
                    
			</script>
		";

?>