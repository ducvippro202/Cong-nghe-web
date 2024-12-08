<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa sản phẩm</title>
</head>
<body>
    <h1 style="text-align: center;">Sửa sản phẩm</h1>
    <form action="" method="POST" style="text-align: center;">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" id="name" name="name" value="<?= $product['name'] ?>" required><br><br>
        <label for="price">Giá:</label>
        <input type="number" id="price" name="price" value="<?= $product['price'] ?>" required><br><br>
        <button type="submit">Cập nhật</button>
    </form>
</body>
</html>
