<?php
require_once __DIR__ . '/../models/Product.php';

class ProductController {
    private $model;

    public function __construct() {
        $this->model = new Product();
    }

    public function index() {
        $products = $this->model->getAll();
        include __DIR__ . '/../views/index.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $this->model->add($name, $price);
            header('Location: /BTVN/index.php');
            exit;
        }
        include __DIR__ . '/../views/add.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $this->model->update($id, $name, $price);
            header('Location:/BTVN/index.php');
            exit;
        }
        $product = $this->model->getById($id);
        include __DIR__ . '/../views/edit.php';
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: /');
        exit;
    }
}
