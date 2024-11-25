<?php
include 'products.php';
$file = 'products.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    foreach ($products as $index => $product) {
        if ($product['id'] == $id) {
            $currentProduct = $product;
            break;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    foreach ($products as $index => $product) {
        if ($product['id'] == $id) {
            $products[$index]['name'] = $name;
            $products[$index]['price'] = $price;
            break;
        }
    }

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
    <title>Sửa sản phẩm</title>
</head>
<body>
    <h1 style="text-align: center;">Sửa sản phẩm</h1>
    <form action="" method="POST" style="text-align: center;">
        <input type="hidden" name="id" value="<?= $currentProduct['id'] ?>">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" id="name" name="name" value="<?= $currentProduct['name'] ?>" required><br><br>
        <label for="price">Giá thành:</label>
        <input type="number" id="price" name="price" value="<?= $currentProduct['price'] ?>" required><br><br>
        <button type="submit">Cập nhật</button>
    </form>
</body>
</html>
