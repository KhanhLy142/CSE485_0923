
<?php 
    try {
        $conn = new PDO('mysql:host=localhost;dbname=btth01_cse485', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM baiviet ORDER BY ma_bviet";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $data = $stmt->fetchAll();
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    // Lấy thông tin nhận dạng từ URL
    $id = isset($_GET['ma_bviet']) ? $_GET['ma_bviet'] : 0;

    // Truy vấn cơ sở dữ liệu để lấy dữ liệu tương ứng
    $sql = "SELECT * FROM baiviet WHERE ma_bviet = :ma_bviet";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':ma_bviet', $id, PDO::PARAM_INT);
    $stmt->execute();
    // Lấy dữ liệu
    $baiHat = $stmt->fetch(PDO::FETCH_ASSOC);

    // Thực hiện truy vấn để lấy tên tác giả
    $sqlTacGia = "SELECT ten_tgia FROM tacgia WHERE ma_tgia = :ma_tgia";
    $stmtTacGia = $conn->prepare($sqlTacGia);
    $stmtTacGia->bindParam(':ma_tgia', $baiHat['ma_tgia'], PDO::PARAM_INT);
    $stmtTacGia->execute();
    $tenTacGia = $stmtTacGia->fetch(PDO::FETCH_ASSOC);

    // Thực hiện truy vấn để lấy tên thể loại
    $sqlTheLoai = "SELECT ten_tloai FROM theloai WHERE ma_tloai = :ma_tloai";
    $stmtTheLoai = $conn->prepare($sqlTheLoai);
    $stmtTheLoai->bindParam(':ma_tloai', $baiHat['ma_tloai'], PDO::PARAM_INT);
    $stmtTheLoai->execute();
    $tenTheLoai = $stmtTheLoai->fetch(PDO::FETCH_ASSOC);

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
<div class="card mb-3 m-5" style="max-width: 100%; border:0;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src= "<?= $baiHat['hinhanh'];?>" class="img-fluid" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <?php
                // Hiển thị thông tin của bài hát
                    if ($baiHat) {?>
                        <h5><?= $baiHat['tieude']?></h5>
                        <p><b>Bài hát: </b><?= $baiHat['ten_bhat']?></p>
                        <p><b>Thể loại: </b><?= $tenTheLoai['ten_tloai']?></p>
                        <p><b>Tóm tắt: </b><?=$baiHat['tomtat']?></p>
                        <p><b>Nội dung: </b><?=$baiHat['noidung']?></p>
                        <p><b>Tác giả: </b><?=$tenTacGia['ten_tgia']?></p>
                    <?php } else {
                        echo "Không tìm thấy bài hát.";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<div class="card-footer">
    TLU'S MUSIC GARDEN
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>