<?php
require_once 'DBconnect.php';

class Product extends DBconnect {
    public function addProduct($data) {
        // Implement the logic to add a product to the database
        $sql = "INSERT INTO products (Naam, beschrijving, prijs, aantal) VALUES (:Naam, :beschrijving, :prijs, :aantal)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':Naam', $data['Naam']);
        $stmt->bindParam(':beschrijving', $data['beschrijving']);
        $stmt->bindParam(':prijs', $data['prijs']);
        $stmt->bindParam(':aantal', $data['aantal']);
        $stmt->execute();
    }

    // In your Product.php class file
    public function getAllProducts() {
        $sql = "SELECT * FROM products";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

    // You can also add other methods to update, delete, and retrieve products
}
