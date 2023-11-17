<?php 
include ('login.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras con PHP y MySQL - By Parzibyte</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
</head>

<body>

<div style="background-color: azure;" >
        <a style="color:black
        ; font-size: 20px;"> Bienvenidos a la pagina principal de los productos <?= $_SESSION["usuario"]->username ?></a>
        < 
    </div>
    <section class="section">