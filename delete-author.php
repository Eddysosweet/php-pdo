<?php 
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    include_once 'AuthorDAL.php';
    include_once 'BookDAL.php';
    $bookDAL = new BookDAL();
    $totalBooks = $bookDAL->getTotalByAuthorId($id);
    if($totalBooks==0){
      $authorDAL = new AuthorDAL();
      $authorDAL->deleteItem($id);
        //chuyen nguoi dung ve trang list-author.php
      header('Location: list-book.php');
    }else{
        echo "Tác giả này đang có sách trong hệ thống";
    }
    
  }


?>