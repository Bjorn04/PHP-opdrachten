<?php
require_once "classes/Users.php";
$user = new User();
$allUsers = $user->showUsers();
?>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show All Users</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam</th>
            <th>Adres</th>
            <th>Postcode</th>
            <th>Telefoon</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($allUsers as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['voornaam']; ?></td>
            <td><?php echo $user['tussenvoegsel']; ?></td>
            <td><?php echo $user['achternaam']; ?></td>
            <td><?php echo $user['adres']; ?></td>
            <td><?php echo $user['postcode']; ?></td>
            <td><?php echo $user['telefoon']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
