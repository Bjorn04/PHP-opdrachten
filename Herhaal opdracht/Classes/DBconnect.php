<?php

class DBconnect {
    private $host = 'localhost';
    private $dbname = 'herhaal_opdracht';
    private $username = 'root';
    private $password = 'root';

    protected $conn; // This property will store the PDO instance

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            // Set PDO error mode to exceptions for better error handling
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Connected to the database successfully';
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}

?>