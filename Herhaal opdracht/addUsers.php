<?php
if(isset($_POST['add'])){
    require_once "Classes/Users.php";
    $user = new User();
    $user->addUser($_POST);
}
?>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>

<form action="addUsers.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="voornaam">Voornaam:</label>
    <input type="text" id="voornaam" name="voornaam" required><br><br>

    <label for="tussenvoegsel">Tussenvoegsel:</label>
    <input type="text" id="tussenvoegsel" name="tussenvoegsel"><br><br>

    <label for="achternaam">Achternaam:</label>
    <input type="text" id="achternaam" name="achternaam" required><br><br>

    <label for="adres">Adres:</label>
    <input type="text" id="adres" name="adres" required><br><br>

    <label for="postcode">Postcode:</label>
    <input type="text" id="postcode" name="postcode" required><br><br>

    <label for="telefoon">Telefoon:</label>
    <input type="tel" id="telefoon" name="telefoon" required><br><br>

    <input type="submit" name="add" value="Add User">
</form>

</body>
</html>