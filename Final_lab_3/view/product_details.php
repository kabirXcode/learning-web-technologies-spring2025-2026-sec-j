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
    $product = null;

    foreach ($products as $item) {
        if ($item['id'] === $id) {
            $product = $item;
            break;
        }
    }

    if (!$product) {
        header('Location: product_list.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Details</title>
</head>
<body>
        <h1>Product Details</h1>
        <a href='product_list.php'>back</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
            <tr>
                <td><?=$product['id']?></td>
                <td><?=$product['name']?></td>
                <td><?=$product['price']?></td>
                <td><?=$product['stock']?></td>
            </tr>
        </table>
</body>
</html>
