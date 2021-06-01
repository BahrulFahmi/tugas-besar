<!DOCTYPE html>
<html lang="en">

<head>
</head>
<?php
if (!empty($_POST)) {
    $conn = new mysqli("localhost", "root", "","tugas_besar");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    if (empty($username)) {
        header ("location:loginuser.php?");
    } else if (empty($password)) {
        header ("location:loginuser.php?");
    }else{
        $query_insert = $conn->prepare("insert into user(username,password) values(?,?)");
        $query_insert->bind_param("ss",$username, $password);
        $query_insert->execute();
        echo "<script>
			alert ('Anda telah terdaftar!')
            document.location.href='HOMEFIX.php';
			</script>";
        $query_insert->close();
        $conn->close();
    }
}
}
?>
<body>
    <div class="luar">
        <h2 style="text-align:center">DAFTAR</h2>
        <form style="padding:25px;text-align:center;background-color:black" action="" method="post">
            <p><input type="text" name="username" placeholder="Masukan Username" size="65" required /></p>
            <p><input type="password" name="password" placeholder="Masukan Password" size="65" required /></p>
            <p> <button type="submit" class="btn">Submit</button></p>
        </form>
    </div>
</body>
</html>