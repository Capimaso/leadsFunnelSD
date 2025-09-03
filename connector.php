<?php

echo "ok";

$usuario = "root";
$senha  = "";
$dbname = "usuarios";
$host   = "localhost";

try{
    $pdo = new PDO
    ("mysql:host=$host;
    dbname=$dbname", $usuario, $senha);

    var_dump($pdo);
}catch(PDOException $e){
    echo $e->getMessage();
}