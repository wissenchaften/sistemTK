<?php 

//menghubungkan ke fungsi di functions.php
require 'function.php';

$id = $_GET["id"];

if ( hapusMurid($id) > 0) {
	echo "
			<script>
					alert('Data berhasil dihapus!');
					location.href = 'index.php';
			</script>
		";
} else
	echo "
			<script>
					alert('Data gagal dihapus!');
					location.href = 'index.php';
			</script>
		";

?>