<?php 
require 'function.php';
if(isset($_POST["submit"])){
	
if (tambah($_POST) > 0){
	echo "
	<script>
		alert ('Produk Berhasil Ditambahkan');
		document.location.href='KATEGORI2.php';
	</script>
	";
}else{
echo "
	<script>
		alert ('Produk Gagal Ditambahkan');
		document.location.href='tambah.php';
	</script>
	";
}



}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk</title>
	<link rel="stylesheet" href="tambah.css">
		
</head>
<body>


	<div class="tambah">
		<form action="" method="post" enctype="multipart/form-data">
		<h1>Tambah Produk</h1>
		<div class="bigproduk">
				<div class="item">
					<i class="fas fa-laptop"></i>
					<input type="text" name="judul" id="judul" placeholder="Nama Laptop" required>
				</div>
				<div class="item">
					<i class="fas fa-store"></i>
					<select name="merk" required="">
						<option value="Acer">Acer</option>
						<option value="Asus">Asus</option>
						<option value="HP">HP</option>
						<option value="Lenovo">Lenovo</option>
					</select>
				</div>
				<div class="item">
					<i class="fas fa-money-bill-alt"></i>
					<input type="text" name="harga" id="harga" placeholder="Harga" required>
				</div>
				<div class="item">
					<i class="fas fa-list-ul"></i>
					<textarea rows="3" placeholder="Spesifikasi" name="spek"></textarea>
				</div>
				<div class="item">
					<i class="far fa-images"></i>
					<input type="file" name="img" id="img">
				</div>
				<button type="submit" class="btn">Tambahkan</button>
				<a href="acer.php" type="button" class="btn">Kembali</a>
			</div>
		</form>
	</div>

</body>
</html>