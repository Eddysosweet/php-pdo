<?php 
 abstract class DB {

    protected $connect=null;
    public function __construct()
    {
        $this->connect = mysqli_connect('localhost','root','','bookonline');
        if(!$this->connect){
            $this->connect=null;
        }
    }

    public abstract function getList();  

 }

?>