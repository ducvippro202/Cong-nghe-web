<?php
include 'products.php';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Administrator</title>
    <style>
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: center;
            padding: 8px;
        }
        button {
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Administrator</h1>
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá thành</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['name'] ?></td>
                <td><?= $product['price'] ?> VND</td>
                <td><a href="edit.php?id=<?= $product['id'] ?>">Sửa</a></td>
                <td><a href="delete.php?id=<?= $product['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div style="text-align: center;">
        <a href="add.php"><button>Thêm sản phẩm</button></a>
    </div>
</body>
</html>
