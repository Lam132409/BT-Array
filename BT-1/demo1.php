<?php
include_once "demo.php";
include_once "../BT-3/Array/product.php"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <td>Tên sản phẩm</td>
        <td>Id</td>
        <td>Giá</td>
        <td>Kích thước</td>
    </tr>
    <?php foreach ($products as $key => $value)
    ?>
    <tr>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['id']; ?></td>
        <td><?php echo $value['price']; ?></td>
        <td><?php echo $value['size']; ?></td>
    </tr>
</table>

</body>
</html>
