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
        header ("location:LOGIN.php?error= username salah");
    } else if (empty($password)) {
        header ("location:LOGIN.php?error= password salah");
    } else {
        $result = mysqli_query($conn, "SELECT* FROM login_admin where username='$username' and password='$password'");
        if(mysqli_num_rows($result)==1) {
            header ("location:KATEGORI2.php");
        } else {
            header ("location:LOGIN.php?error= username dan password salah");
        }
    }

}
}
?>
<body>
    <div class="luar">
        <h2 style="text-align:center">LOGIN</h2>
        <form style="padding:25px;text-align:center;background-color:black" action="" method="post">
            <p><input type="text" name="username" placeholder="Masukan Username" size="65" required /></p>
            <p><input type="password" name="password" placeholder="Masukan Password" size="65" required /></p>
            <p> <button type="submit" class="btn">SUBMIT</button></p>
        </form>
    </div>
</body>

</html>