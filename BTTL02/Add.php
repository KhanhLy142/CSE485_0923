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
                    <a class="navbar-brand" style = "font-weight: bold;">Add User</a>
                    </div>
                    <form class="d-flex" role="search">
                         <button class="btn btn-outline-secondary" type="submit">
                            <span class="bi bi-search"></span>
                         </button>
                         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
            </div>
            <form>
               <div>
                    <label for="inputFullName" class="form-label">Full Name</label>
                    <input type="name" class="form-control" id="inputFullName">
              </div>
              <div>
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail">
              </div>
              <div>
                    <label for="inputMobile" class="form-label">Mobile</label>
                    <input type="text" class="form-control" id="inputMobile">
              </div>
              <div>
                    <label for="inputDateOfBirth" class="form-label">Date Of Birth</label>
                    <input type="text" class="form-control" id="inputDateOfBirth">
             <div >
        </div></br>
        <div>
             <button type="submit" class="btn btn-primary">Save</button>
             <button type="button" class="btn btn-danger">Cancel</button>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>