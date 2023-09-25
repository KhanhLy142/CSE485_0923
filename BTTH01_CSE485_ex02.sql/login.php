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
      width: 380px;
      height: 400px;
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
    .remember-me {
      margin-bottom: 20px;
    }
    .login-btn {
      padding: 5px;
      background-color: #ffc312;
      color:black;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      margin-left: 250px;
      width:90px;
    }
    .signup-link {
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
<div class="login-container">
    <h3 style="color:#f8f9fa;">Sign In</h3><br/>
    <form>
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill" style= "font-size:25px;" ></i></span>
        <input type="text" class="form-control" placeholder="username" aria-label="username" aria-describedby="addon-wrapping">
    </div> <br/>
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping"><i class="bi bi-key-fill" style= "font-size:25px;" ></i></span>
        <input type="text" class="form-control" placeholder="password" aria-label="password" aria-describedby="addon-wrapping">
    </div> <br/>
      <div class="remember-me">
        <label>
          <input type="checkbox" name="remember"> Remember me
        </label>
      </div>
      <button type="submit" class="login-btn">Login</button>
    </form><br/>
    <div class="signup-link">
      Don't have an account? <a href="#" style="text-decoration:none; color:#ffc312;">Sign up</a><br/>
      <a href="#" style="text-decoration:none; color:#ffc312;">Forgot your password?</a>
    </div>
  </div>
<div class="card-footer">
    TLU'S MUSIC GARDEN
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>