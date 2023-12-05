<?php 

function connection($host, $user, $pass, $bd) {
    return new PDO("mysql:host=$host;dbname=$bd", $user, $pass);
}

$arrayProduct =[];

try {
    $host = "localhost:3306";
    $user = "root";
    $pass = "root";

    $bd = "pageweb";

    $pdo = connection($host, $user, $pass, $bd);
    session_start();
    
}  catch (PDOException $e) {
    header("Location: ../errors/Error.php");
}

?>