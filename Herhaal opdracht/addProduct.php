<?php
session_start();  // Start the session at the beginning of the script

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");  // Redirect to login page
    exit;
}

if(isset($_POST['add'])){
    require_once "classes/Product.php";
    $product = new Product();
    $product->addProduct($_POST);
}
?>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Product Toevoegen</title>
    <style>
        label{
            width: 400px;
            display:block;
        }

    </style>
</head>
<body>
<form action="addProduct.php" method="post">
    <label for="Naam">Naam:</label>
    <input type="text" id="Naam" name="Naam" required><br><br>
    
    <label for="beschrijving">Beschrijving:</label>
    <textarea id="beschrijving" name="beschrijving" required></textarea><br><br>
    
    <label for="prijs">Prijs:</label>
    <input type="number" id="prijs" name="prijs" step="0.01" required><br><br>
    
    <label for="aantal">Aantal:</label>
    <input type="number" id="aantal" name="aantal" required><br><br>
    
    <input type="submit" name="add" value="Product Toevoegen">
</form>
</body>
</html>
