<!DOCTYPE html>
<html>
    <head>
		<style>
	.praktikum8{
	margin-left:300px;
}	
.overlay{
	width: 0;
	height: 0;
	overflow: hidden;
	position: fixed;
	top: 10%;
	left: 0;
	z-index: 9999;
	text-align: center;
}
.overlay:target {
	width: auto;
	height: auto;
	bottom: 0;
	right: 0;
	background: rgba(255,255,255. 1);
	}
.praktikum8 p{
	text-align:left;
	max-width:800px;
	margin: 10px 400px;
	padding: 10px;
	background:rgba(155,155,155,.9);
	box-sizing: border-box;
	border-radius:4px;
}		
.praktikum8 h4{
	text-align:center;
	max-width:800px;
	margin: 10px 400px;
	padding: 10px;
	background:rgba(155,155,155,.9);
	box-sizing: border-box;
	border-radius:4px;
}
.praktikum8 h3{
	text-align:center;
	max-width:500px;
	margin: auto;
	padding: 10px;
	background:rgba(155,155,155,.9);
	box-sizing: border-box;
	border-radius:4px;
}

.dropdown{
	position: relative;
	display: inline;

}
.dropdownchild{
	display: none;
	min-width: 200px;

	

}
.dropdownchild a {
	
	padding: 20px;
	text-decoration: none;
	display: inline;
}
.dropdown:hover .dropdownchild{
	display: inline;
	

}

</style>
        <link rel="stylesheet" type="text/css" href="kategori.css">
        <title>Acer</title>
 
         <div class="topnav">
	            <div class="dropdown">
	            	<a>Kategori</a>
	            		<div class="dropdownchild">
	            			<a style="background-color:#ddd;color:black" href="acer.php">Acer</a>
				            <a href="asus.php">Asus</a>
				            <a href="hp.php">HP</a>
				            <a href="lenovo.php">Lenovo</a>
	            		</div>	
	            </div>
            <a href="KONSULTASI2.php">Konsultasi</a>
         </div>
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
         integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
         crossorigin="anonymous">
    </head>
    <body>
        

        <?php
         require 'function.php';
         $data = query("SELECT * FROM kategori WHERE merk='Acer'");
         ?>
      

	<div class="praktikum8">
		
		<?php $i=1; ?>
	<?php foreach($data as $row): ?>
		<?php echo "<a href= '#modal-$i'> ";?>
		<!-- <a href="#modal-$i"> -->
		<span style="margin-top:275px;" class="card">
		<img src="img_tugbes/produk/<?=$row["img"] ?>" height="180" width="200" alt="<?=$i?>"></b></td>
		<h5 style="color:#ddd;text-decoration:none;"><?=$row["judul"] ?></h5>
		<h5 style="color:#ddd;text-decoration:none;"><?=$row["harga"] ?></h5>
		</span>
		</a>
	<?php $i++; ?>	
	<?php endforeach ?>
	
	<h2 style="margin-left:700px;margin-top:-260px;"><a style="color:black;text-decoration:none;" class="aw" href="tambah.php" class="btn btn-sm btn-success right">Tambah Kategori</a></h2>
	
	<?php
	$i=1; 
	foreach ($data as $row){ 
			global $img;
					echo "<div class='overlay' id='modal-$i'>";
					echo "<img src='img_tugbes/produk/".$row["img"]."' height='300px' border='5px solid black'>";
					echo  "<h3>".$row["judul"]."</h3>";
					echo "<p>".$row["spek"]."</p>";
					echo "<h4>".$row["harga"]."</h4>";
					echo "<a href='#' ><button>Kembali</button></a>";
					echo "<a href='hapus.php?id=".$row["id"]."'><button>Hapus</button></a>";
		$i++;

				};
				

	 ?>
</div>
    </body>
</html>