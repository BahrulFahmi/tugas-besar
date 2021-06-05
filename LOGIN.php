<!DOCTYPE html>
<html lang="en">

<head>
<style>
        @import url("https://pro.fontawesome.com/releases/v5.10.0/css/all.css");
        body{
            margin: 0%;
            padding: 0%;
            font-family: sans-serif;
            background: url(bg_loginadmin.jpg) no-repeat;
            background-size: cover;
        }
        .login-box{
            width: 280px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: black;
        }
        .login-box h1{
            float: left;
            font-size: 40px;
            border-bottom: 6px solid;
            margin-bottom: 50px;
            padding: 13px;
        }
        .textbox{
            width: 100%;
            overflow: hidden;
            font-size: 20px;
            padding: 8px 0;
            margin: 8px 0;
            border-bottom: 1px solid;
            }

            .textbox i{
                width: 26px;
                float: left;
                text-align: center;
            }
             .textbox input{
                 border: none;
                 outline: none;
                 background: none;
                 color: black;
                 font-size: 18px;
                 width: 100px;
                 float: left;
                 margin: 0 10px;
             }
             .btn{
                 width: 100;
                 background: none;
                 border:  2px solid;
                 color: black;
                 padding: 5px;
                 font-size: 18px;
                 cursor: pointer;
                }
                .back {
                 width: 100;
                 background: none;
                 border:  2px solid;
                 color: black;
                 padding: 5px;
                 font-size: 18px;
                 cursor: pointer;
                 text-decoration:none;
             }
    </style>
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
            header ("location:acer.php");
        } else {
            header ("location:LOGIN.php?error= username dan password salah");
        }
    }

}
}
?>
<body>
<div class="login-box">
    <form action="" method="post">
            <h1>Login</h1>
            <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username" size="65" required/>
            </div>
            <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" size="65" required/>
            </div>
            <button type="submit" class="btn">SUBMIT</button>
            <a href="WELCOME.php" type="button" class="back">BACK</a>
    </form>
</div>
</body>

</html>