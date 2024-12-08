<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <style>
        table { width: 60%; margin: auto; border-collapse: collapse; }
        table, th, td { border: 1px solid black; text-align: center; padding: 10px; }
        a { text-decoration: none; }
        button { cursor: pointer; }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Danh sách sản phẩm</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><a href="index.php?action=edit&id=<?= $product['id'] ?>">Sửa</a></td>
                <td><a href="index.php?action=delete&id=<?= $product['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div style="text-align: center; margin: 20px;">
        <a href="index.php?action=add"><button>Thêm sản phẩm</button></a>
    </div>
</body>
</html>
