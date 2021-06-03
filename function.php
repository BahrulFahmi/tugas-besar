<?php 

$conn = new mysqli("localhost", "root", "","tugas_besar");

function query($query) {
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}
function tambah($tambah){
	global $conn;

	$judul = $tambah["judul"];
	$merk = $tambah["merk"];
	$harga = $tambah["harga"];
	$spek = $tambah["spek"];

	// upload
	$img = upload11();
	if(!$img){
		return false;
	}
	
	
	$queri = "INSERT INTO kategori SET
			judul = '$judul', merk='$merk' , harga='$harga', spek='$spek', img='$img'	
";
mysqli_query ($conn,$queri);
return mysqli_affected_rows($conn);

}
function upload11(){
	$namaFile = $_FILES['img']['name'];
	$ukuranFile = $_FILES['img']['size'];
	$error = $_FILES['img']['error'];
	$tmpName =$_FILES['img']['tmp_name'];

	if($error === 4){
		echo "<script>
			alert ('Pilih Gambar Terlebih Dahulu !')
			</script>";
			return false;
	}

	$ekstensiGambarValid = ['jpg','jpeg','png','JPEG','PNG','JPEG'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "<script>
			alert ('File Yang Diperbolehkan Hanya jpg, jpeg dan png')
			</script>";
			return false;
	}

	if($ukuranFile > 6000000){
	echo "<script>
			alert ('File Terlalu Besar')
			</script>";
			return false;	
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;
	move_uploaded_file($tmpName, 'img_tugbes/produk/' . $namaFileBaru);
	return $namaFileBaru;
}
function hapus($id){
	global $conn;
	mysqli_query ($conn,"DELETE FROM kategori WHERE id=$id");	
	return mysqli_affected_rows($conn);
}
function hapus2($id){
	global $conn;
	mysqli_query ($conn,"DELETE FROM chat WHERE id=$id");	
	return mysqli_affected_rows($conn);
}

function tambah2($tambah){
	global $conn;

	$user = $tambah["user"];
	$jenis = $tambah["jenis"];
	$pesan = $tambah["pesan"];
	
	
	$queri = "INSERT INTO chat SET
			user = '$user', jenis='$jenis', pesan='$pesan'	
";
mysqli_query ($conn,$queri);
return mysqli_affected_rows($conn);

}


 ?> 



