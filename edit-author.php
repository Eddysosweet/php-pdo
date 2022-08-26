<?php 
include 'AuthorDAL.php';
$id = $_GET['id'];
$AuthorDAL = new AuthorDAL();
$result = $AuthorDAL -> getAuthor($id);
$row = mysqli_fetch_assoc($result);
if(isset($_POST['name']) && $_POST['name']){
    $name = $_POST['name'];
    $AuthorDAL -> editAuthor($id,$name);
    header('Location: list-author.php');
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
        <input type="submit" value="Sửa">
    </form>
</body>
</html>