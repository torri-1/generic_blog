<?php
session_start();
include "db.php";

if (!empty($_POST)) {
    $query = "SELECT * FROM admins
                           WHERE `user` = '" . $_POST['user'] . "'
                           AND `password` = '" . md5($_POST['pass']) . "'";
    $result = mysqli_query($link, $query);
    $user_data = mysqli_fetch_assoc($result);
    if (!empty($user_data)) {
        $_SESSION['user'] = $user_data['user'];
        $_SESSION['type'] = $user_data['type'];
        session_write_close();
        header("location: index.php");
        exit();
    }
    else $message = "Wrong username or password!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login - Generic Blog</title>
    <style>
        .input-section {
            max-width: 400px;
            padding-top: 30px;
            padding-bottom: 30px;
        }
    </style>
</head>
<body>
<?php include "menu.php"?>
<div class="input-section">
    <h2>Login to Generic Blog</h2>
    <form class="login-form" action="login.php" method="post">
        <input type="text" name="user" placeholder="Username" required>
        <input type="password" name="pass" placeholder="Password" required>
        <div class="error-message">
            <?php if (isset($message)) echo $message;?>
        </div>
        <button type="submit">Login</button>
    </form>
</div>
<?php include "copyright.php" ?>
</body>
</html>