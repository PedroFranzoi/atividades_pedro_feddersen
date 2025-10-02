<?php
include "../includes/db_connect.php";
include "../src/User.php";

section_satrt();

if($_server['REQUEST_METHOD'] == "POST"){
    $user = new User($conn);

    $user -> register($_POST['nome'],$_POST['email'],$_POST['password']);
    header("Location: login.php");
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="../assets/CSS/style.css">
</head>
<body>

<form method="POST" action="registrar.php">
    <input type="text" name="nome" placeholder="Seu nome" required>
    <input type="email" name="email" placeholder="Seu email" required>
    <input type="password" name="password" placeholder="Sua senha" required>
    <button type=""></button>
</form>
    
</body>
</html>