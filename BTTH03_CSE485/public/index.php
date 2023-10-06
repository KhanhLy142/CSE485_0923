<?php
require_once('../app/config/config.php');
//require_once APP_ROOT.'/app/services/BookService.php';

//$bookService = new BookService();
//$books = $bookService-> getAllBooks();

$controller = isset($_GET['controller'])?$_GET['controller']:'home';
$action =isset($_GET['action'])?$_GET['action']:'index';

if($controller == 'home'){
    require_once APP_ROOT.'/app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->index();
}else if ($controller == 'book'){
    require_once APP_ROOT.'/app/controllers/BookController.php';
    $homecontroller = new HomeController;
    $homeController->index();
}else{
    echo "Không tồn tại URL";
}
?>