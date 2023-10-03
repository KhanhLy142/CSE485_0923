<?php
if(isset($_POST['Register'])){
    $user = $_POST['FullName'];
    $email = $_POST['Email'];
    $pass = $_POST['Password'];

    // Băm mật khẩu
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // Truy vấn kiểm tra tên người dùng hoặc email đã tồn tại chưa
    try{
        // Bước 1: Kết nối DBServer
        $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485", "root", "");

        // Kiểm tra tên người dùng hoặc email đã tồn tại trong cơ sở dữ liệu
        $sql_check = "SELECT * FROM nguoidung WHERE FullName = '$user' OR Email = '$email'";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->execute();

        if($stmt_check->rowCount() > 0){
            // Tên người dùng hoặc email đã tồn tại, hiển thị thông báo lỗi
            header("Location: register.php?error=Tên hoặc email đã tồn tại");
        }else{
            // Tên người dùng và email chưa tồn tại, thêm thông tin mới vào cơ sở dữ liệu
            $sql_insert = "INSERT INTO nguoidung (FullName, Email, Password) VALUES ('$user', '$email', '$hashed_password')";
            $stmt_insert = $conn->prepare($sql_insert);
            $stmt_insert->execute();

            // Đăng ký thành công
            header("Location: login.php");
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<style>
  nav{
    box-shadow: 0px 10px 6px -6px #999999;
  }
  .login-container {
      width: 480px;
      height: 450px;
      margin: 0 auto;
      margin-top: 60px;
      margin-bottom: 50px;
      background-color: #7f7f7f;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
    }
    .form-group input {
      width: 100%;
      padding: 5px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
  .card-footer{
            margin-top:10px;
            padding: 20px;
            text-align: center;
            color:black;
            font-weight: bold;
            border-top: 1px solid black;
        }
</style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <img src="images/logo2.png" style= " width:230px; height:100px;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link"href="#">TRANG CHỦ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">ĐĂNG NHẬP</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Tìm</button>
      </form>
  </div>
</nav>
<div>
        <?php
            if(isset($_GET['error'])){
                echo "<center><p style = 'color:red; font-weight: bold;'>{$_GET['error']}</p></center>";
            }
        ?>
        <div class="login-container">
    <h3 style="color:#f8f9fa;">Sign In</h3><br/>
    <form>
      <div class="form-group">
      <label for="email">Fullname:</label>
        <input type="text" class="form-control"name="FullName" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control"
        name="Email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="tel" class="form-control"
        name="Mobile"  placeholder="Enter your mobile number" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="Password"placeholder="Enter your password" required>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>    
</div>  
<div class="card-footer">
    TLU'S MUSIC GARDEN
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>