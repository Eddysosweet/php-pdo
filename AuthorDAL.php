<?php 
include_once 'DB.php';
class AuthorDAL extends DB{
    //Thafnh Phan tinh
    static public $className="AuthorDAL";

    public function getList(){
        //cach goi thanh phan tinh 
        //self::$className;
        $sql = "SELECT * FROM author";
        $result = mysqli_query($this->connect,$sql);
        return $result;
    }

    public function add($name){
        $sql = "INSERT INTO author(name) VALUES('$name')";
        mysqli_query($this->connect,$sql);   
    }

    public function deleteItem($id){
        $sql = "DELETE FROM author WHERE id=$id";
        mysqli_query($this->connect,$sql);
    }
    public function getAuthor($id)
    {
       $sql = "SELECT * FROM author WHERE id= $id";
       return mysqli_query($this->connect,$sql);
    }
    public function editAuthor($id,$name){
        $sql = "update author set name = '$name' where id = $id";
        mysqli_query($this->connect,$sql);
    }
}

?>
