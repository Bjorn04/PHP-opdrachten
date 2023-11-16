<?php
require_once 'classes/Product.php';
$product = new Product();
$products = $product->getAllProducts();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
</head>
<body>
    <h1>All Products</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Beschrijving</th>
                <th>Prijs</th>
                <th>Aantal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo htmlspecialchars($product['ID']); ?></td>
                    <td><?php echo htmlspecialchars($product['Naam']); ?></td>
                    <td><?php echo htmlspecialchars($product['beschrijving']); ?></td>
                    <td><?php echo htmlspecialchars($product['prijs']); ?></td>
                    <td><?php echo htmlspecialchars($product['aantal']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
