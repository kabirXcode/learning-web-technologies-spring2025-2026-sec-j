<?php
    session_start();

    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = [
            ['id' => 1, 'name' => 'Laptop', 'price' => '1200', 'stock' => 15],
            ['id' => 2, 'name' => 'Mouse', 'price' => '25', 'stock' => 80],
            ['id' => 3, 'name' => 'Keyboard', 'price' => '45', 'stock' => 60],
            ['id' => 4, 'name' => 'Monitor', 'price' => '225', 'stock' => 20],
            ['id' => 5, 'name' => 'Headset', 'price' => '55', 'stock' => 35],
        ];
    }

    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $products = $_SESSION['products'];

    foreach ($products as $index => $product) {
        if ($product['id'] === $id) {
            array_splice($products, $index, 1);
            break;
        }
    }

    $_SESSION['products'] = $products;
    header('Location: product_list.php');
    exit;
