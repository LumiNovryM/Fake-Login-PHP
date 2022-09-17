<?php
// Cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    // Cek Username & Password
    if( $_POST["username"] == "admin" && $_POST["password"] == "adminpplg1" ) {
    // Jika benar, redirect ke halaman admin
        header("Location: admin.php");
    }else{ 
    // Else, tampilkan pesan kesalahan
        $error = true;


    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h1>Login Admin</h1>

    <?php  if(isset($error)) :?>
        <p style="color: red; font-weight: bold;">Password / Username Yang Anda Masukkan Salah!</p>
    <?php  endif; ?>
        
    <ul>
        <form action="admin.php" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" id="username" name="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" id="password" name="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
        
</body>
</html>