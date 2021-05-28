<!DOCTYPE html>
<html>
    <head>
		<style>
	.praktikum8{
	margin-left:300px;
}			
.card{
	margin:5px;
	border:5px solid grey;
	float:left;
	left:20px;
	width:200px;
	background-color:#ff80aa;
	display: inline-block;
	text-align:center;
	color:#000;
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
</style>
        <link rel="stylesheet" type="text/css" href="tugbes.css">
        <link rel="stylesheet" type="text/css" href="kategori.css">
        <title>Home</title>
        <div class="topnav">
            <a href="HOME.php">Home</a>
            <a href="#">Kategori</a>
            <a href="KONSULTASI.php">Konsultasi</a>
            <a href="TENTANG tugas besar.html">Tentang</a>
         </div>
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
         integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
         crossorigin="anonymous">
    </head>
    <body>
        <div class="sidebar">
            <a href="acer">acer</a>
            <a href="#">asus</a>
            <a href="#">HP</a>
            <a href="#">Lenovo</a>
        </div>
        <?php
		$judul = ['Cooler Master C700M','Gigabyte Z390 Aorus','Intel Core i9-9900KF 3.6Ghz','Corsair DDR4 16GB','MSI GeForce RTX 2080 Ti','Corsair AX 1600W',
				  'Seagate 2.5" 5TB 128MB','SanDisk SSD Ultra 3D 1TB', 'Samsung SSD 970 PRO 1TB','Thermaltake Pacific M240', 'Fan ALSEYE D-RINGER', 
				  'ASUS PG279Q 27" LED', 'Razer Mamba Gaming', 'Razer Blackwidow Elite'];
		$judul1 = ['Cooler Master COSMOS C700M - RGB Full Tower Tempered Glass Gaming Case','Gigabyte Z390 Aorus Xtreme Waterforce',
				   'Intel Core i9-9900K 3.6Ghz [Box] Socket LGA 1151 - Coffeelake Series','Corsair DDR4 16GB','VGA MSI RTX 2080 Ti LIGHTNING Z',
				   'Corsair AX Series Digital 1600W Fully Modular AX1600i - Titanium','Seagate 2.5" 5TB SATA 128MB 5400 RPM BarraCuda Series',
				   'SanDisk SSD Ultra 3D 1TB', 'Samsung SSD 970 PRO M.2 1TB MZ-V7P1T0BW - Grs 5th / SSD 1TB','Thermaltake Pacific M240 D5', 
				   'Fan Casing 12cm Alseye D-Ringer with 15 LED Auto RGB Fan Case DRinger', 'LED ASUS ROG Swift PG279Q Gaming Monitor - 27" 2K WQHD', 
				   'Razer Mamba Elite Gaming Mouse', 'Razer Blackwidow Elite - Mechanical Gaming Keyboard'];
		$harga = ['Rp. 6.420.000','Rp. 13.450.000','Rp. 7.399.000','Rp. 1.705.000','Rp. 27.460.000','Rp. 7.510.000','Rp. 3.415.000','Rp. 2.160.000',
				  'Rp. 5.200.000','Rp. 4.900.000','Rp. 62.000','Rp. 12.625.000','Rp. 1.575.000','Rp. 2.735.000'];
		$spec = ['Dimensions: 650(L) x 306(W) x 651(H)mm<br>
				  Suport: Mini ITX, Micro ATX, ATX, E-ATX<br>
				  Size:Full Tower<br>',
					'- Supports 9th and 8th Gen Intel® Core™ Processors<br>
					 - Dual Channel Non-ECC Unbuffered DDR4, 4 DIMMs<br>
					 - Front USB 3.1 Gen 2 Type-C™ Header',
				'- CPU Socket Type :	LGA 1151V2<br>
				 - Processors Generation :	9th Gen<br>
				 - Family :	Coffee Lake<br>
				 - Cores :	8<br>
				 - Integrated Graphics :	Intel UHD Graphics 630',
					'- Memory Series: VENGEANCE RGB PRO<br>
					 - Memory Type: DDR4<br>
					 - Memory Size: 16GB Kit (1 x 16GB)<br>
					 - Tested Voltage: 1.35V<br>
					 - Tested Speed: 3200MHz<br>',
				'-Memory: 11GB GDDR6<br>
				 -Cuda Cores: 4352<br>
				 -Boost: 1755 MHz<br>
				 -Memory Clock: 14 GHz<br>
				 -Card size: 327 x 140 x 55.6 mm',
					'- Fan size mm: 140mm<br>
					 - MTBF hours: 100,000 hours<br>
					 - Warranty: Ten years<br>
					 - 80 PLUS Efficiency: Titanium<br>
					 - Dimensions: 200mm x 150mm x 86mm <br>
					 - Zero RPM Mode: Yes',
				'- Rpm : 7200rpm <br>
				 - cache : 256MB<br>
				 - Data Rate : 210 MB/s<br>
				 - Operating Power : 7.8W',
					'- Capacity: 1 TB<br>
					 - Read Speed: up to 560 MB/s<br>
					 - Write Speed: up to 530 MB/s<br>
					 - Interface: SATA Revision 3.0 (6 Gb/s)',
				'- Capacity: 1000 GB<br>
				 - Read: 3,500MB/s<br>
				 - Write: 2,700MB/s',
					'Compatibility	:<br> 
					 - Intel LGA 2066/2011/1366/1156/1155/1151/1150/775<br>
					 - AMD AM4/FM2/FM1/AM3+/AM3/AM2+/AM2<br>
					 Fan Spec	: 1500 RPM (1000RPM with LNC)<br>				
					 Coolant : Pure Clear Coolant',
				'- LED: Ring Auto RGB 7 Color<br>
				 - Dimensions:120 x 120 x 25mm<br>
				 - Voltage: DC 12V<br>
				 - Current: 0.27A<br>
				 - Fan Speed: 1300 R.P.M +/-10%<br>
				 - Air Flow: 51.3CFM +/-10%',
					'Panel Size: Wide Screen 27.0"(68.6cm) 16:9<br>
					 Color Saturation : 100%(sRGB)<br>
					 Panel Backlight / Type : In-Plane Switching<br>	
					 Display Colors : 16.7M (real 8 bit)<br>
					 Refresh Rate(max) : 165Hz<br>
					 True Resolution : 2560x1440',
				'- Razer 5G Advanced Optical Sensor with true 16,000 DPI<br> 
				 - Up to 450 inches per second (IPS) / 50 G acceleration<br>
				 - 1000 Hz Ultrapolling<br>
			     - Approximate size: 125.0 mm	 (L) X 69.9 mm (W) X 43.3 mm(H)<br>
				 - Approximate weight (excluding cable): 96 g / 0.211 lbs<br>
				 - Cable length: 2.1 m / 6.89 ft',
					'- Mechanical Gaming Keyboard<br>
					 - Yellow switch (Linear and Silent)<br>
					 - 80 million keystroke lifespan<br>
					 - 16.8 million customizable color options<br>
					 - 10 key roll over anti ghosting<br>
					 - 1000Hz Ultrapolling<br>
					 - USB 2.0 and audio pass through'];
		$img = ['1.png', '2.jpg' ,'3.jpg', '4.png','5.png', '6.jpg','7.jpg','8.jpg','9.jpg','10.jpg','11.jpg','12.png','13.jpg','14.jpg'];
		
		echo"<div class='praktikum8'>";
				for($i=0; $i < 14; $i++){
					echo "<a href= '#modal-$i'> ";
					echo "<span class='card'>";
					echo "<img src= '../img/product/$img[$i]' height='180px' width='200px' alt='$1'>";
					echo "<h5>$judul[$i]</h5>";
					echo "<h5>$harga[$i]</h5>";
					echo "</span>";
					echo "</a>";
				}
				for ($i=0; $i < 14 ; $i++) { 
					echo "<div class='overlay' id='modal-$i'>";
					echo "<img src='../img/product/$img[$i]' height='300px' border='5px solid #fff'>";
					echo "<h3>$judul1[$i]</h3>";
					echo "<p>$spec[$i]</p>";
					echo "<h4>$harga[$i]</h4>";
					echo "<a href='#' ><button>kembali</button></a>";
				}
	?>
    </body>
</html>