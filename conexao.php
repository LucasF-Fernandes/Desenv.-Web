<?php

session_start();

$localhost = "localhost";
$user = "root";
$passw = "1234";
$banco = "lojinha";

global $pdo;

try {
    $pdo = new PDO("mysql:dbname=".$banco."; host=" .$localhost, $user, $passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>