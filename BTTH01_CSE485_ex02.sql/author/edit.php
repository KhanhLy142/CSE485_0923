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
.container{
    text-align: center;
    margin-top:50px;
}
.input-group {
    width:950px;
    margin-left:30px;
}
.button{
    margin-left: 690px;
    margin-top:10px;
}
.card-footer{
    margin-top: 270px;
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
          <a class="nav-link" href="#">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Trang ngoài</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Thể loại</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active" aria-current="page" href="#">Tác giả</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bài viết</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<b><h3>SỬA THÔNG TIN TÁC GIẢ</h3></b>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Mã tác giả</span>
  <input type="text" class="form-control" aria-label="Text input with checkbox">
</div>
<div class="input-group">
  <span class="input-group-text" id="inputGroup-sizing-default">Tên tác giả</span>
  <input type="text" class="form-control" aria-label="Text input with radio button">
</div>
<div class="button">
<button type="button" class="btn btn-success">Lưu lại</button>
<button type="button" class="btn btn-warning">Quay lại</button>
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