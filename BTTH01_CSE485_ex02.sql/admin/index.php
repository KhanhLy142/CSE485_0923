<?php
    //Dich vu Bao ve
    session_start();

    //Kiem tra thong tin để bảo vệ kiểm soát ra vào
    if(!isset($_SESSION['Login'])){
        header("Location:../login.php");
    }
?>
<?php
    try {
        $conn = new PDO('mysql:host=localhost;dbname=btth01_cse485', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Truy vấn để đếm số lượng người dùng
        $stmt_users = $conn->prepare("SELECT COUNT(*) FROM nguoidung");
        $stmt_users->execute();
        $user_count = $stmt_users->fetchColumn();

        // Truy vấn để đếm số lượng thể loại
        $stmt_categories = $conn->prepare("SELECT COUNT(*) FROM theloai");
        $stmt_categories->execute();
        $category_count = $stmt_categories->fetchColumn();

        // Truy vấn để đếm số lượng tác giả
        $stmt_authors = $conn->prepare("SELECT COUNT(*) FROM tacgia");
        $stmt_authors->execute();
        $author_count = $stmt_authors->fetchColumn();

        // Truy vấn để đếm số lượng bài viết
        $stmt_posts = $conn->prepare("SELECT COUNT(*) FROM baiviet");
        $stmt_posts->execute();
        $post_count = $stmt_posts->fetchColumn();

    } catch (PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
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
.card{
    text-align: center;
    margin-top:20px;
}
p{
    color:blue;
}
.card-footer{
    margin-top: 370px;
    padding: 20px;
    text-align: center;
    color:black;
    font-weight: bold;
    border-top: 1px solid black;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Administration</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Trang ngoài</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Thể loại</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tác giả</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bài viết</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <p>Người dùng </p>
        <h1><?= $user_count ?></h1>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <p>Thể loại </p>
        <h1><?= $category_count ?></h1>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <p>Tác giả </p>
        <h1><?= $author_count ?></h1>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <p>Bài viết </p>
        <h1><?= $post_count ?></h1>
      </div>
    </div>
  </div>
</div>
<footer>
<div class="card-footer">
    TLU'S MUSIC GARDEN
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>