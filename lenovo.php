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
        <link rel="stylesheet" type="text/css" href="tugbes.css">
        <title>Lenovo</title>
 
         <div class="topnav">
            <a href="KATEGORI2.php">Home</a>
          <!--   <a style="background-color:#ddd;color:black" href="#">Kategori</a> -->
	            <div class="dropdown">
	            	<a>Kategori</a>
	            		<div class="dropdownchild">
	            			<a href="acer.php">Acer</a>
				            <a  href="asus.php">Asus</a>
				            <a  href="hp.php">HP</a>
				            <a style="background-color:#ddd;color:black" href="lenovo.php">Lenovo</a>
	            		</div>	
	            </div>
            <a href="KONSULTASI2.php">Konsultasi</a>
            <a href="TENTANG tugas besar.html">Tentang</a>
         </div>
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
         integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
         crossorigin="anonymous">
    </head>
    <body>
        

        <?php
         require 'function.php';
         $data = query("SELECT * FROM kategori WHERE merk='Lenovo'");
         
         // $img = ['','1.jpg', '2.jpg' ,'3.jpg', '4.png','5.png', '6.jpg','7.jpg','8.jpg','9.jpg','10.jpg','11.jpg','12.png','13.jpg','14.jpg'];

         ?>
      

	<div class="praktikum8">
		
		<?php $i=1; ?>
	<?php foreach($data as $row): ?>
		<?php echo "<a href= '#modal-$i'> ";?>
		<!-- <a href="#modal-$i"> -->
		<span class="card">
		<img src="img_tugbes/produk/<?=$row["img"] ?>" height="180" width="200" alt="<?=$i?>"></b></td>

		<h5><?=$row["judul"] ?></h5>
		<h5><?=$row["harga"] ?></h5>
		</span>
		</a>
	<?php $i++; ?>	
	<?php endforeach ?>
	
	<h2 style="margin-top:310px; "><a class="aw" href="tambah.php" class="btn btn-sm btn-success right">Tambah Kategori</a></h2>
	
	<?php
	$i=1; 
	foreach ($data as $row){ 
			global $img;
					echo "<div class='overlay' id='modal-$i'>";
					echo "<img src='img_tugbes/produk/".$row["img"]."' height='300px' border='5px solid #fff'>";
					// echo "<h3>$judul1[$i]</h3>";
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