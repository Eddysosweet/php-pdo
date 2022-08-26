<?php 
include 'BookDAL.php';
$id = $_GET['id'];
$bookDAL = new BookDAL();
$result = $bookDAL -> getBook($id);
$row = mysqli_fetch_assoc($result);
if(isset($_POST['name']) && $_POST['name']){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $authorId = $_POST['authorId'];
    $bookDAL -> editBook($id,$name,$price,$authorId);
    header('Location: list-book.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <form action="" method="post">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $row['name'] ?>">
        <label>Price</label>
        <input type="text" name="price" value="<?php echo $row['price'] ?>">
        <label>Author ID</label>
        <input type="text" name="authorId" value="<?php echo $row['author_id'] ?>">
        <input type="submit" value="Sửa">
    </form>
</body>
</html>