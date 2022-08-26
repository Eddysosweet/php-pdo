<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    include_once 'BookDAL.php';
    $bookDAL = new BookDAL();
    $bookDAL->deleteItem($id);
}
//chuyen nguoi dung ve trang list-book.php
header('Location: list-book.php');
?>