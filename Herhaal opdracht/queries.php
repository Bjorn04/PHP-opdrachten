<?php
require_once 'DBconnect.php';
// Example of a SELECT query
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
$stmt->bindParam(':username', $username_value);
$username_value = 'john_doe';
$stmt->execute();

// Fetch data from the query result
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "Username: " . $row['username'] . "<br>";
}



?>