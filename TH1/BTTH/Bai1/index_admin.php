<?php
include 'products.php'; // Bao gồm cả mảng $flowers
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Administrator</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: center;
            padding: 10px;
        }
        img {
            width: 100px;
            height: 100px;
            object-fit: cover;
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
            <th>STT</th>
            <th>Tên Hoa</th>
            <th>Mô Tả</th>
            <th>Ảnh</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach ($flowers as $flower): ?>
            <tr>
                <td><?= $flower['id'] ?></td>
                <td><?= $flower['name'] ?></td>
                <td><?= $flower['description'] ?></td>
                <td><img src="images/<?= $flower['image'] ?>" ?></td>
                <td><a href="edit_flower.php?id=<?= $flower['id'] ?>">Sửa</a></td>
                <td><a href="delete_flower.php?id=<?= $flower['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div style="text-align: center;">
        <a href="add_flower.php"><button>Thêm hoa mới</button></a>
    </div>
</body>
</html>
