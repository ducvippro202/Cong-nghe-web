<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'products.php';
    $file = 'products.php';

    $name = $_POST['name'];
    $price = $_POST['price'];

    // Lấy ID lớn nhất và tăng lên 1
    $lastId = end($products)['id'];
    $newProduct = [
        'id' => $lastId + 1,
        'name' => $name,
        'price' => $price
    ];

    // Thêm sản phẩm mới vào mảng
    $products[] = $newProduct;

    // Ghi lại vào file
    $content = '<?php' . PHP_EOL . '$products = ' . var_export($products, true) . ';' . PHP_EOL;
    file_put_contents($file, $content);

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
</head>
<body>
    <h1 style="text-align: center;">Thêm sản phẩm</h1>
    <form action="" method="POST" style="text-align: center;">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="price">Giá thành:</label>
        <input type="number" id="price" name="price" required><br><br>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>
