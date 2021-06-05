<!DOCTYPE html>
<html>
    <head>
		<style>
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
        <link rel="stylesheet" type="text/css" href="produk.css">
        <title>HP</title>
 
         <div class="topnav">
	            <div class="dropdown">
	            	<a>Kategori</a>
	            		<div class="dropdownchild">
	            			<a href="acer.php">Acer</a>
				            <a  href="asus.php">Asus</a>
				            <a style="background-color:#ddd;color:black" href="hp.php">HP</a>
				            <a href="lenovo.php">Lenovo</a>
	            		</div>	
	            </div>
            <a href="KONSULTASI2.php">Konsultasi</a>
			<a style="float:right" href="tambah.php"><i class="fas fa-plus-square"></i>&nbsp;Tambah Kategori</a>
         </div>
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
         integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
         crossorigin="anonymous">
    </head>
    <body>
        

        <?php
         require 'function.php';
         $data = query("SELECT * FROM kategori WHERE merk='HP'");
         ?>
      

	<div class="produk">
		
		<?php $i=1; ?>
	<?php foreach($data as $row): ?>
		<?php echo "<a href= '#modal-$i'> ";?>
		<span class="card">
		<img src="img_tugbes/produk/<?=$row["img"] ?>" height="180" width="200" alt="<?=$i?>"></b></td>

		<h5><?=$row["judul"] ?></h5>
		<h5><?=$row["harga"] ?></h5>
		</span>
		</a>
	<?php $i++; ?>	
	<?php endforeach ?>
	
	<?php
	$i=1; 
	foreach ($data as $row){ 
			global $img;
					echo "<div class='overlay' id='modal-$i'>";
					echo "<img src='img_tugbes/produk/".$row["img"]."' height='300px' border='5px solid #fff'>";
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