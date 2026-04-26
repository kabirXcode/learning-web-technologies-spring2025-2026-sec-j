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
    $productIndex = null;

    foreach ($products as $index => $item) {
        if ($item['id'] === $id) {
            $product = $item;
            $productIndex = $index;
            break;
        }
    }

    if (!$product) {
        header('Location: product_list.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = trim($_POST['name'] ?? $product['name']);
        $price = trim($_POST['price'] ?? $product['price']);
        $stock = trim($_POST['stock'] ?? $product['stock']);

        $products[$productIndex]['name'] = $name;
        $products[$productIndex]['price'] = $price;
        $products[$productIndex]['stock'] = $stock;
        $_SESSION['products'] = $products;

        header('Location: product_list.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Product</title>
</head>
<body>
        <h1>Edit Product</h1>
        <a href='product_list.php'>back</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <form method="post" action="product_edit.php?id=<?=$product['id']?>">
            ID:      <input type="text" name="id" value="<?=$product['id']?>" readonly/> <br>
            Name:    <input type="text" name="name" value="<?=$product['name']?>"/> <br>
            Price:   <input type="text" name="price" value="<?=$product['price']?>"/> <br>
            Stock:   <input type="number" name="stock" value="<?=$product['stock']?>"/> <br>
                    <input type="submit" name="submit" value="Update"/>
        </form>
</body>
</html>
