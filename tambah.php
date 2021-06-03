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
		
</head>
<body>


	<div >

		
		<form action="" method="post" enctype="multipart/form-data">
			
			<ul >
				<li ><h1>Tambah Produk</h1></li>
				<li >
					<input type="text" name="judul" id="judul" placeholder="Judul" required>
				</li>
				<li >
					<select name="merk" required="">
						<option value="Acer">Acer</option>
						<option value="Asus">Asus</option>
						<option value="HP">HP</option>
						<option value="Lenovo">Lenovo</option>
					</select>
				</li>
				<li >
					<input type="text" name="harga" id="harga" placeholder="harga" required>
				</li>
				<!-- <li >
					<input type="text" name="spek" id="spek" placeholder="spek" required>
				</li> -->
				<li>
					<textarea rows="3" placeholder="Spek" name="spek"></textarea>
				</li>
				<li>
				<input type="file" name="img" id="img" >
				</li>
				<li ><button type="submit" name="submit">Tambah</button></li>


			</ul>

		</form>
	</div>

</body>
</html>