<?php
require_once APP_ROOT.'/app/services/BookService.php';
class HomeController{
    public function index(){
        //Goi du lieu tu BookService
       $bookService = new BookService();
       $books = $bookService-> getAllBooks();
        //Render du lieu lay duoc ra HomePage
        include APP_ROOT .'/app/views/home/index.php';

    } 
}
?>