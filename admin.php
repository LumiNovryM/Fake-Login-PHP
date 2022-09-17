<?php

    if(!isset($_POST["username"])) {
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Selamat Datang <?= $_POST["username"] ?></h1>

    <a href="login.php">Logout</a>

</body>
</html>