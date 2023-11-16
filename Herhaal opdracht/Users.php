<?php
require_once 'DBconnect.php';

class User extends DBconnect {
    private $username;
    private $password;
    private $voornaam;
    private $tussenvoegsel;
    private $achternaam;
    private $adres;
    private $postcode;
    private $telefoon;

    public function addUser($data) {
        // Check if essential fields are set
        if(empty($data['username']) || empty($data['password']) || empty($data['voornaam']) || empty($data['achternaam']) || empty($data['adres']) || empty($data['postcode']) || empty($data['telefoon'])) {
            throw new Exception('Essential fields are missing');
        }
    
        // Assigning values
        $this->username = $data['username'];
        $this->password = password_hash($data['password'], PASSWORD_DEFAULT); // Hashing the password
        $this->voornaam = $data['voornaam'];
        $this->tussenvoegsel = $data['tussenvoegsel'];
        $this->achternaam = $data['achternaam'];
        $this->adres = $data['adres'];
        $this->postcode = $data['postcode'];
        $this->telefoon = $data['telefoon'];
    
        // SQL query to insert data into the database
        $sql = "INSERT INTO users (username, password, voornaam, tussenvoegsel, achternaam, adres, postcode, telefoon) VALUES (:username, :password, :voornaam, :tussenvoegsel, :achternaam, :adres, :postcode, :telefoon)";
        
        // Preparing the SQL statement
        $stmt = $this->conn->prepare($sql);
        
        // Binding parameters
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':voornaam', $this->voornaam);
        $stmt->bindParam(':tussenvoegsel', $this->tussenvoegsel);
        $stmt->bindParam(':achternaam', $this->achternaam);
        $stmt->bindParam(':adres', $this->adres);
        $stmt->bindParam(':postcode', $this->postcode);
        $stmt->bindParam(':telefoon', $this->telefoon);
        
        // Executing the statement
        $stmt->execute();
    }
    

    public function changeUser($id, $data) {
        if (empty($data['voornaam']) || empty($data['achternaam']) || empty($data['adres']) || empty($data['postcode']) || empty($data['telefoon'])) {
            die("Required fields are missing.");
        }
    
        $sql = "UPDATE users SET 
                    voornaam = :voornaam, 
                    tussenvoegsel = :tussenvoegsel, 
                    achternaam = :achternaam, 
                    adres = :adres, 
                    postcode = :postcode, 
                    telefoon = :telefoon
                WHERE id = :id";
    
        $stmt = $this->conn->prepare($sql);
        
        $stmt->bindParam(':voornaam', $data['voornaam']);
        $stmt->bindParam(':tussenvoegsel', $data['tussenvoegsel']);
        $stmt->bindParam(':achternaam', $data['achternaam']);
        $stmt->bindParam(':adres', $data['adres']);
        $stmt->bindParam(':postcode', $data['postcode']);
        $stmt->bindParam(':telefoon', $data['telefoon']);
        $stmt->bindParam(':id', $id);
        
        $stmt->execute();
    }
    

    public function deleteUser($id) {
        $sql = "DELETE FROM users WHERE id = :id";
        
        $stmt = $this->conn->prepare($sql);
        
        $stmt->bindParam(':id', $id);
        
        $stmt->execute();
    }

    public function showUsers() {
        $sql = "SELECT * FROM users";
        
        $stmt = $this->conn->prepare($sql);
        
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function login($username, $password) {
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
    
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if($user && password_verify($password, $user['password'])){
            return true;
        } else {
            return false;
        }
    }
    
    
}
?>
