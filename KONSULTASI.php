<?php 
require 'function.php';
$data = query("SELECT * FROM chat");
if(isset($_POST["submit"])){
    
if (tambah2($_POST) > 0){
    echo "
    <script>
        alert ('Pesan Berhasil Ditambahkan');
        document.location.href='KONSULTASI.php';
    </script>
    ";
}else{
echo "
    <script>
        alert ('Pesan Gagal Ditambahkan');
        document.location.href='KONSULTASI.php';
    </script>
    ";
}



}
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Konsultasi User</title>
        <style>
            form{

            }
            .aja{
                color: lightblue;
            }
            .chat{
                margin-left: 20px;
                padding-bottom: 5px;
            }
            .b{
                color: white;
            }
            .chat hr{
                margin-left: -20px;
            }
            
        </style>
        <div class="topnav">
            <a href="HOMEFIX.php">Home</a>
            <a href="KATEGORI.php">Kategori</a>
            <a style="background-color:#ddd;color:black" href="#">Konsultasi</a>
            <a href="TENTANG tugas besar.html">Tentang</a>
         </div>
         <br>
         <link rel="stylesheet" type="text/css" href="tugbes.css">
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
         integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
         crossorigin="anonymous">
    </head>
    <body style="height: auto;">
    <form style="background-color: black;color: white;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" action="" method="post">
    <div align="center">
        <table style="text-align:center" border="0" celpadding="5" cellspacing="2">
            <tr>
                <td>Username</td>
            </tr>
            <tr>
                <td><input type="text" name="user" required></td>
            </tr>
            <tr>
                <td>Jenis Laptop</td>
            </tr>
            <tr>
                <td><input type="text" name="jenis" required></td>
            </tr>
            <tr>
                <td>Pesan</td>
            </tr>
            <tr>
                <td><textarea name="pesan" cols="20" rows="5" required></textarea></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="submit" value="SUBMIT"></td>
            </tr>
        </table>
    </div>
    <hr>
   
    <?php $i=1; ?>
    <?php foreach($data as $row): ?>
    <div class="chat">
  <i><b><p class="aja"><?=$row["user"] ?></b></i><br><?=$row["jenis"] ?></p>
    <p class="b"><?=$row["pesan"] ?></p>
    <hr>
    </div>
    <?php $i++; ?>  
    <?php endforeach ?>
  </form>
    </body>
</html>