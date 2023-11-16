<?php
if(isset($_POST['update'])){
    require_once "classes/Users.php";
    $user = new User();
    $user->changeUser($_POST['id'], $_POST);
}
?>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>

<form action="changeUser.php" method="post">
    <label for="id">User ID:</label>
    <input type="text" id="id" name="id" required><br><br>

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

    <input type="submit" name="update" value="Update">
</form>

</body>
</html>
