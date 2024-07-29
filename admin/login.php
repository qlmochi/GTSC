<?php
    session_start();

    include 'model/pdo.php';
    
    if(isset($_SESSION['mySession'])){
        header('location:index.php');
    }
    

    if(isset($_POST['dangnhap'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM thanhvien WHERE user = '$username' AND pass ='$password'";

        $result = mysqLi_query($conn, $sql);

        if(mysqli_num_rows($result) == 1){
            $_SESSION['mySession'] = $username;
            header("location:index.php");

        }
        else{
            echo "Tài khoản hoặc mật khẩu sai";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container">
        <h1>Đăng Nhập</h1>
        <form action="login.php" method="post">
            <label for="username">Tên đăng nhập:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>
            <?php if (isset($error_message)) { echo "<p class='error'>$error_message</p>"; } ?>
            <button type="submit" name="dangnhap">Đăng Nhập</button>
            <a href="signup.php" class="signup-link">Đăng Ký</a>
        </form>
    </div>
</body>
</html>


    