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

    $products = $_SESSION['products'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>List for Products</title>
</head>
<body>

        <h1>List of Products</h1>
        <a href='home.php'>back</a> |
        <a href='product_add.php'>Add product</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <table border=1>
            <tr>
                <th>ID</th>
                <th>PRODUCT NAME</th>
                <th>PRICE</th>
                <th>STOCK</th>
                <th>ACTION</th>
            </tr>

            <?php foreach($products as $product){ ?>
            <tr>
                <td><?php echo $product['id']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['stock']; ?></td>
                <td>
                    <a href="product_edit.php?id=<?=$product['id']?>"> EDIT </a> |
                    <a href="product_delete.php?id=<?=$product['id']?>"> DELETE </a> |
                    <a href="product_details.php?id=<?=$product['id']?>"> DETAILS </a>
                </td>
            </tr>
            <?php } ?>
        </table>

</body>
</html>
