<?php 
    try {
        $conn = new PDO('mysql:host=localhost;dbname=btth01_cse485', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM baiviet ORDER BY ma_bviet desc limit 8";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $data = $stmt->fetchAll();
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<style>
  nav{
    box-shadow: 0px 10px 6px -6px #999999;
  }
  .card-text{
    color:blue;
    text-align: center;
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
          <a class="nav-link active" aria-current="page" href="#">TRANG CHỦ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ĐĂNG NHẬP</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Tìm</button>
      </form>
  </div>
</nav>
<br/>
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slideshow/slide01.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slideshow/slide02.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slideshow/slide03.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<center><h3 style = " color:blue;">TOP BÀI HÁT YÊU THÍCH </h3></center><br/>
<div class="row row-cols-1 row-cols-md-4 g-4">
        <?php 
            foreach($data as $value): ?>
                <div class="col">
                <div class="card">
                    <img src= "<?= $value['hinhanh'];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href = "detail.php?ma_bviet=<?= $value['ma_bviet'];?>" style ="text-decoration:none;"><?= $value['ten_bhat']?></a></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<div class="card-footer">
    TLU'S MUSIC GARDEN
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>