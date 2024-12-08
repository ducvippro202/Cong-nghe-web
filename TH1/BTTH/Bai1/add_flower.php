<?php
include 'products.php'; // Bao gồm mảng $flowers
$file = 'products.php'; // Đường dẫn tới file lưu dữ liệu

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    // Lấy ID lớn nhất hiện tại và tăng lên 1
    $lastId = end($flowers)['id'];
    $newFlower = [
        'id' => $lastId + 1,
        'name' => $name,
        'description' => $description,
        'image' => $image,
    ];

    // Thêm hoa mới vào mảng
    $flowers[] = $newFlower;

    // Ghi lại dữ liệu vào file
    $content = '<?php' . PHP_EOL . '$products = ' . var_export($products, true) . ';' . PHP_EOL;
    $content .= '$flowers = ' . var_export($flowers, true) . ';' . PHP_EOL;
    file_put_contents($file, $content);

    header('Location: index_admin.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm hoa mới</title>
</head>
<body>
    <h1 style="text-align: center;">Thêm hoa mới</h1>
    <form action="" method="POST" style="text-align: center;">
        <label for="name">Tên hoa:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="description">Mô tả:</label>
        <textarea id="description" name="description" rows="4" required></textarea><br><br>
        <label for="image">Tên file ảnh:</label>
        <input type="text" id="image" name="image" required><br><br>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>
