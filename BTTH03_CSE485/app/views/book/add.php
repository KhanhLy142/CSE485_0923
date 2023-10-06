<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống quản lý thư viện</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
</style>
<body>
<div class="container">
<b><h3>THÊM MỚI THỂ LOẠI</h3></b>
 <form action="add_category.php" method="POST">
 <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Tên thể loại</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="button">
<button type="button" class="btn btn-success">Thêm</button>
<button type="button" class="btn btn-warning">Quay lại</button>
</div>
 </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
</body>
</html>