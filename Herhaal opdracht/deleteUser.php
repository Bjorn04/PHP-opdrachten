<?php
if(isset($_POST['delete'])){
    require_once "classes/Users.php";
    $user = new User();
    $user->deleteUser($_POST['id']);
}
?>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>

<form action="#" method="post">
    <label for="id">User ID:</label>
    <input type="text" id="id" name="id" required><br><br>

    <input type="submit" name="delete" value="Delete">
</form>

</body>
</html>
