<?php
include 'model/pdo.php';
include "model/danhmuc.php";
include "model/sanpham.php";

 if(isset($_POST['dangky'])){
   $id ="";
   $user =$_POST['username'];
   $pass =$_POST['password'];
   $level= 2;

   $sql = "INSERT INTO  thanhvien(id, user, pass, level)
   VALUES ('$id','$user','$pass','$level');
   ";
   mysqli_query($conn, $sql);
   header('location:login.php');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
<div class="container">
    <h1>Đăng Ký</h1>
    <form action="signup.php" method="post">
      <div class="form-group">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" name="dangky">Đăng Ký</button>
    </form>
  </div>
</body>
</html>