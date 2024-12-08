<?php
include 'products.php'; // Bao gồm cả mảng $flowers
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Guest</title>
    <style>
        .flower-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
            margin: 20px;
        }
        .flower-item {
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 300px;
            padding: 10px;
            text-align: center;
        }
        .flower-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .flower-item h3 {
            margin: 10px 0;
            font-size: 18px;
        }
        .flower-item p {
            color: #555;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Guest</h1>
    <div class="flower-list">
        <?php foreach ($flowers as $flower): ?>
            <div class="flower-item">
                <img src="images/<?= $flower['image'] ?>" alt="<?= $flower['name'] ?>">
                <h3><?= $flower['name'] ?></h3>
                <p><?= $flower['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
