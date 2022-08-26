<?php 
include 'AuthorDAL.php'; 
$authorDAL = new AuthorDAL();
$listAuthor = $authorDAL->getList();

if(isset($_POST['name'])){
 include 'BookDAL.php';
 $bookDAL =new BookDAL();
 $bookDAL->add($_POST['name'],$_POST['price'],$_POST['author_id']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
     <form method="POST">
       <div>
          <label>Name</label>
          <input type="text" name="name" placeholder="Please Enter Book Name"/>
       </div>
       <div>
          <label>Price</label>
          <input type="text" name="price" placeholder="Please Enter Price"/>
       </div>
       <div>
          <label>Author</label>
          <select name="author_id">
            <?php foreach ($listAuthor as $author) {
               ?>
                <option value="<?php echo $author['id']; ?>"><?php echo $author['name']; ?></option>               
               <?php
            } ?>
          </select>
       </div>
       <div>
           <button>Add</button>
       </div>
     </form>
</body>
</html>