<?php
include 'products.php'; // Bao gồm mảng $flowers
$file = 'products.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Xóa hoa khỏi mảng
    foreach ($flowers as $index => $flower) {
        if ($flower['id'] == $id) {
            unset($flowers[$index]);
            break;
        }
    }

    // Sắp xếp lại mảng sau khi xóa
    $flowers = array_values($flowers);

    // Ghi lại dữ liệu vào file
    $content = '<?php' . PHP_EOL . '$products = ' . var_export($products, true) . ';' . PHP_EOL;
    $content .= '$flowers = ' . var_export($flowers, true) . ';' . PHP_EOL;
    file_put_contents($file, $content);

    header('Location: index_admin.php');
    exit;
}
?>
