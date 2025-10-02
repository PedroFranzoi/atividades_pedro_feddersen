<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "banco_hash";

try(

    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
    $conn-> aetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPION);

)catch(PDOException $e){
    echo "Conexão Falhou: " . $e -> getMessage();
}




?>