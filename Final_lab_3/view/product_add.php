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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = trim($_POST['name'] ?? '');
        $price = trim($_POST['price'] ?? '');
        $stock = trim($_POST['stock'] ?? '');

        if (!empty($name) && !empty($price) && !empty($stock)) {
            $products = $_SESSION['products'];
            
            // Get next ID
            $maxId = 0;
            foreach ($products as $product) {
                if ($product['id'] > $maxId) {
                    $maxId = $product['id'];
                }
            }
            $newId = $maxId + 1;

            // Add new product
            $products[] = [
                'id' => $newId,
                'name' => $name,
                'price' => $price,
                'stock' => $stock
            ];

            $_SESSION['products'] = $products;
            header('Location: product_list.php');
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Product</title>
</head>
<body>
        <h1>Add Product</h1>
        <a href='product_list.php'>back</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <form method="post" action="product_add.php">
            Name:    <input type="text" name="name" required/> <br>
            Price:   <input type="text" name="price" required/> <br>
            Stock:   <input type="number" name="stock" required/> <br>
                    <input type="submit" name="submit" value="Add Product"/>
        </form>
</body>
</html>
