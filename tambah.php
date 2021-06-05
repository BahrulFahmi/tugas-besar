<?php
require 'function.php';
if (isset($_POST["submit"])) {

	if (tambah($_POST) > 0) {
		echo "
	<script>
		alert ('Produk Berhasil Ditambahkan');
		document.location.href='KATEGORI2.php';
	</script>
	";
	} else {
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
	<link rel="stylesheet" type="text/css" href="tambah.css">
</head>

<body>


	<div class="tambah">


		<form action="" method="post" enctype="multipart/form-data">
			<h1>Tambah Produk</h1>
			<div>


				<div>
					<input type="text" name="judul" id="judul" placeholder="Judul" required>
				</div>
				<div>
					<select name="merk" required="">
						<option value="Acer">Acer</option>
						<option value="Asus">Asus</option>
						<option value="HP">HP</option>
						<option value="Lenovo">Lenovo</option>
					</select>
				</div>
				<div>
					<input type="text" name="harga" id="harga" placeholder="harga" required>
				</div>
				<div>
					<textarea rows="3" placeholder="Spek" name="spek"></textarea>
				</div>
				<div>
					<input type="file" name="img" id="img">
				</div>
				<div><button type="submit" name="submit">Tambah</button></div>


			</div>

		</form>
	</div>

</body>

</html>