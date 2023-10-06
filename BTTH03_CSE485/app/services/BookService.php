<?php
require_once APP_ROOT.'/app/libs/DBconnection.php';
require_once APP_ROOT.'/app/models/Book.php';
class BookService{
    public function getAllBooks(){
        //Buoc1: Ket noi Database
          $dbConnection = new DBConnection();
          $conn = $dbConnection->getConnection();
          if($conn != null){
               //Buoc2: Truy van du lieu
               $sql = "SELECT * FROM sach";
               $stmt = $conn->query($sql);
              //Buoc3: Xu ly ket qua tra ve
               $books = [];
               while($row = $stmt->fetch()){
                   $book = new Book($row['id'], $row['tenSach'], $row['namXuatBan'], $row['idtacgia']);
                   $books[] = $book; 
               }
               return $books;
           }
    }
}