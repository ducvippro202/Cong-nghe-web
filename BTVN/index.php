<?php
require_once __DIR__ . '/controllers/ProductController.php';

$controller = new ProductController();
$action = $_GET['action'] ?? 'index';

if (method_exists($controller, $action)) {
    $id = $_GET['id'] ?? null;
    $controller->$action($id);
} else {
    echo "Trang không tồn tại!";
}
