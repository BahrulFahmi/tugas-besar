<?php 
require 'function.php';

$id = $_GET["id"];

if(hapus2($id) >0){
	echo "
	<script>
		alert ('Data Berhasil Dihapus');
		document.location.href='KONSULTASI2.php';
	</script>
	";
}else{
echo "
	<script>
		alert ('Data Gagal Dihapus');
		document.location.href='KONSULTASI2.php';
	</script>
	";
}


 ?>