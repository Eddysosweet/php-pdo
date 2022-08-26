<?php 
if(isset($_POST['name'])){
  $name = $_POST['name'];//lấy ra dữ liệu từ trường input name
  include 'AuthorDAL.php';
  $authorDAL = new AuthorDAL();
  $authorDAL->add($name);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Author</title>
</head>
<body>
     <form method="POST">
       <div>
          <label>Name</label>
          <input type="text" name="name" placeholder="Please Enter Author Name"/>
       </div>
       <div>
           <button>Add</button>
       </div>
     </form>
</body>
</html>