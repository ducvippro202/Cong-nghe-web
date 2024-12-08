<?php
include 'products.php'; // Bao gồm mảng $flowers
$file = 'products.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    foreach ($flowers as $flower) {
        if ($flower['id'] == $id) {
            $currentFlower = $flower;
            break;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    // Cập nhật thông tin hoa trong mảng
    foreach ($flowers as $index => $flower) {
        if ($flower['id'] == $id) {
            $flowers[$index]['name'] = $name;
            $flowers[$index]['description'] = $description;
            $flowers[$index]['image'] = $image;
            break;
        }
    }

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
    <title>Sửa thông tin hoa</title>
</head>
<body>
    <h1 style="text-align: center;">Sửa thông tin hoa</h1>
    <form action="" method="POST" style="text-align: center;">
        <input type="hidden" name="id" value="<?= $currentFlower['id'] ?>">
        <label for="name">Tên hoa:</label>
        <input type="text" id="name" name="name" value="<?= $currentFlower['name'] ?>" required><br><br>
        <label for="description">Mô tả:</label>
        <textarea id="description" name="description" rows="4" required><?= $currentFlower['description'] ?></textarea><br><br>
        <label for="image">Tên file ảnh:</label>
        <input type="text" id="image" name="image" value="<?= $currentFlower['image'] ?>" required><br><br>
        <button type="submit">Cập nhật</button>
    </form>
</body>
</html>
