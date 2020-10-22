<?php

include('../connection/db.php');

session_start();

if($_POST) {
    $user = $conn->query("SELECT * FROM users WHERE username = '$_POST[username]' AND password = '$_POST[password]'");
    if ($user->num_rows > 0) {
        $_SESSION["login"] = "true";
        $_SESSION["username"] = $_POST["username"];
        header('Location: ../index.php');
    }
    $_SESSION["error"] = "Username / Password salah";
}

header('Location: ../pages/login.php');

?>