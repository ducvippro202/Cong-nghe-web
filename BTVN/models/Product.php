<?php
class Product {
    private $file = __DIR__ . '/../data/products.php';

    public function getAll() {
        include $this->file;
        return $products;
    }

    public function save($products) {
        $content = '<?php' . PHP_EOL . '$products = ' . var_export($products, true) . ';' . PHP_EOL;
        file_put_contents($this->file, $content);
    }

    public function add($name, $price) {
        $products = $this->getAll();
        $lastId = end($products)['id'] ?? 0;
        $products[] = ['id' => $lastId + 1, 'name' => $name, 'price' => $price];
        $this->save($products);
    }

    public function getById($id) {
        $products = $this->getAll();
        foreach ($products as $product) {
            if ($product['id'] == $id) {
                return $product;
            }
        }
        return null;
    }

    public function update($id, $name, $price) {
        $products = $this->getAll();
        foreach ($products as &$product) {
            if ($product['id'] == $id) {
                $product['name'] = $name;
                $product['price'] = $price;
                break;
            }
        }
        $this->save($products);
    }

    public function delete($id) {
        $products = $this->getAll();
        foreach ($products as $index => $product) {
            if ($product['id'] == $id) {
                unset($products[$index]);
                break;
            }
        }
        $this->save(array_values($products));
    }
}
