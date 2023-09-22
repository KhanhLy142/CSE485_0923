//01. Thực hiện kết nối DB-Server
<?php 
$conn = mysqli_connect(hostname: 'localhost', username: 'root',password: '',database:'user');

if (!$conn){
    die("Can not connect");
}
// ! Viết tắt của biểu thức logic so sánh (tương đương với ==False hoặc !=True)
//02. Thực hiện truy vấn
$sql = "SELECT * FROM Users ORDER BY ID ASC LIMIT 10";
//03. Xử lý kết quả
$result = $conn->query($sql);

if ($result->num_rows > 0){
    $data = [];
    while ($row = $result->fetch_assoc()){
        $data[] = $row;
    }

    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>w3cms.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<style>
    .nav-link{
        color:red;
    }
    .nav-link:hover{
        color:#ff6a59;
        font-weight: bold;
    }
    li a>i{
        padding-right: 5px;
    }
    .row{
        flex-wrap: nowrap;
    }
    .col-md-3{
        width:fit-content;
    }
    .menu{
        display:flex;
        justify-content: space-between;
    }
</style>
<body>
    <div class="container-fluid">
        <div class="row" >
            <div class="col-md-3"  style = "padding: 10px 20px;">
            <img src ="http://w3cms.makaanlelo.com/media/Configurations/Group%2057116.png">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link"><i class="bi bi-person"></i>User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-box"></i>CMS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-gear"></i>Config</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-grid"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-book"></i>Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-people"></i>Instructor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-info-circle"></i>Apps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-pie-chart"></i>Charts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-star"></i>Bootstrap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-heart"></i>Plugins</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-gear-wide"></i>Widget</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-file-earmark-check"></i>Forms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-file-earmark-spreadsheet"></i>Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-file-earmark-break"></i>Pages</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9" style = "padding: 10px 20px;">
            <div class="menu">
            <div class="header">
                    <i class="bi bi-list"></i>
                    <a class="navbar-brand" style = "font-weight: bold;">USERS</a>
                    </div>
                    <form class="d-flex" role="search">
                         <button class="btn btn-outline-secondary" type="submit">
                            <span class="bi bi-search"></span>
                         </button>
                         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
            </div>
                    <div>
                        <button class="btn btn-danger" type="submit"><a href="Add.php" style= "text-decoration:none; color:aliceblue;">ADD USER </a>
                            <i class="bi bi-plus-square-fill"></i>
                        </button>
                    </div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col"> Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Date Of Birth</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sử dụng vòng lặp for để tạo các dòng, duyệt user để lấy ra từng mảng -->
                        <?php
                        foreach($data as $value){
                        ?>
                            <tr>
                                <td><?= $value['ID'];?></td>
                                <td><?= $value['FullName'];?></td>
                                <td><?= $value['Email'];?></td>
                                <td><?= $value['Mobile'];?></td>
                                <td><?= $value['DateOfBirth'];?></td>
                                <td><a href="Edit.php" class="" style= "color:#ff6a59;"><i class="bi bi-pencil-fill"></i></a>
                                <a href="Delete.php" class="" style= "color:#ff6a59;"><i class='bi bi-trash3'></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                    <nav aria-label="Page navigation example">
                       <ul class="pagination">
                          <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                              </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                   <span aria-hidden="true">&raquo;</span>
                              </a>
                          </li>
                      </ul>
                   </nav>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>