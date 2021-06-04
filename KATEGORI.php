<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="kategori.css">
        <title>Acer</title>
        <div class="topnav">
            <a href="HOMEFIX.php">Home</a>
            <a style="background-color:#ddd;color:black" href="KATEGORI.php">Kategori</a>
            <a href="KONSULTASI.php">Konsultasi</a>
            <a href="about_us.php">Tentang</a>
         </div>
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
         integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
         crossorigin="anonymous">
    </head>
    <body>
        <div class="sidebar">
            <a style="background-color:#ddd;color:black">Acer</a>
            <a href="asus1.php">Asus</a>
            <a href="hp1.php">HP</a>
            <a href="lenovo1.php">Lenovo</a>
        </div>
        
           <?php
         require 'function.php';
         $data = query("SELECT * FROM kategori WHERE merk='acer'");
         ?>
     
<div class="praktikum8">
		
		<?php $i=1; ?>
	<?php foreach($data as $row): ?>
		<?php echo "<a href= '#modal-$i'> ";?>
		<span class="card">
		<img src="img_tugbes/produk/<?=$row["img"] ?>" height="180" width="200" alt="<?=$i?>">
		<h5 style="color:#ddd;text-decoration:none;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"><?=$row["judul"] ?></h5>
		<h5 style="color:#ddd;text-decoration:none;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"><?=$row["harga"] ?></h5>
		</span>
	<?php $i++; ?>	
	<?php endforeach ?>
	
	
	
	<?php
	$i=1; 
	foreach ($data as $row){ 
			global $img;
					echo "<div class='overlay' id='modal-$i'>";
					echo "<img src='img_tugbes/produk/".$row["img"]."'height=300px border=5px solid black>";
					// echo "<h3>$judul1[$i]</h3>";
					echo  "<h3>".$row["judul"]."</h3>";
					echo "<p>".$row["spek"]."</p>";
					echo "<h4>".$row["harga"]."</h4>";
					echo "<a href='#'><button>Kembali</button></a>";
					
		$i++;

				};
				

	 ?>
</div>

    </body>
</html>