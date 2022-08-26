<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author</title>
</head>
<body>
    <?php 
    include 'BookDAL.php';
    $bookDAL = new BookDAL();
    $list = $bookDAL->getList();
    ?>
    <table>
        <thead>
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Price</th>
              <th>Author</th>
              <th colspan="2">Action</th>
           </tr>
        </thead>
        <tbody>
            <?php foreach($list as $item): ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['book_name']; ?></td>
                <td><?php echo $item['price']; ?></td>
                <td><?php echo $item['author_name']; ?></td>
                <td><a href="delete-book.php?id=<?php echo $item['id']; ?>" onclick="return confirm('Are you sure you want to delete this row?')">Xóa</a></td>
                <td><a href="edit-book.php?id=<?php echo $item['id']; ?>">Sửa</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>