<?php 
include_once 'DB.php';
class BookDAL extends DB{
    public function getList(){
        $sql = "SELECT *,book.id as book_id,book.name as book_name,author.name as author_name
         FROM book INNER JOIN author ON author.id = book.author_id";
        $result = mysqli_query($this->connect,$sql);
        return $result;
    }

    public function add($name,$price,$authorId){
        $sql = "INSERT INTO book(name,price,author_id) VALUES('$name',$price,$authorId)";
        mysqli_query($this->connect,$sql);
    }

    public function deleteItem($id){
        $sql = "DELETE FROM book WHERE id=$id";
        mysqli_query($this->connect,$sql);
    }

    public function getListByAuthorId($authorId){
        $sql = "SELECT * FROM book WHERE author_id=$authorId";
        return mysqli_query($this->connect,$sql);
    }

    public function getTotalByAuthorId($authorId){
        $sql = "SELECT COUNT(id) as total FROM book WHERE author_id=$authorId";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_assoc($result);
        return $row['total'];
    }
    public function getBook($id)
    {
       $sql = "SELECT * FROM book WHERE id= $id";
       return mysqli_query($this->connect,$sql);
    }
    public function editBook($id,$name,$price,$authorId){
        $sql = "update book set name = '$name', price = '$price', author_id = $authorId where id = $id";
        mysqli_query($this->connect,$sql);
    }
}
?>
