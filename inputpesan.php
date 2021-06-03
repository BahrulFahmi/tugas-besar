<?php
include "koneksi.php";
$username=addslashes($_POST['username']);
$jenislaptop=addslashes($_POST['jenislaptop']);
$pesan=addslashes($_POST['pesan']);
$tanggal=gmdate("d/m/Y",time()+60*60*7);
$submit=$_POST['submit'];

if($_POST['submit']){
    $as=mysql_query("insert into pesan values('','$username','$jenislaptop','$pesan','$tanggal')");
    is($as){
        ?>
        <script>
        document.location="KONSULTASI.php";
        </script>
        <?php
    }else{
        ?>
        <script>
        alert('gagal posting');
        document.location="KONSULTASI.php";
        </script>
        <?php
    }
}
?>