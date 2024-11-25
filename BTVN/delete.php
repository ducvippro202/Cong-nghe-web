<?php
if (isset($_GET['id'])) {
    include 'products.php';
    $file = 'products.php';

    $id = $_GET['id'];
    foreach ($products as $index => $product) {
        if ($product['id'] == $id) {
            unset($products[$index]);
            break;
        }
    }

    // Sắp xếp lại mảng sau khi xóa
    $products = array_values($products);

    // Ghi lại vào file
    $content = '<?php' . PHP_EOL . '$products = ' . var_export($products, true) . ';' . PHP_EOL;
    file_put_contents($file, $content);

    header('Location: index.php');
    exit;
}
?>
