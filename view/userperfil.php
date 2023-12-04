<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Este es un ejemplo crud">
    <meta name="keywords" content="html, css, bootstrap, js, portfolio, proyectos, php">
    <meta name="language" content="EN">
    <meta name="author" content="noelia.tinajero@a.vedrunasevillasj.es">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Tuesday, February 28th, 2023, 23:00pm">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">

    <!-- Añado la fuente Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"
        defer></script>

    <!-- Titulo -->
    <title>Tienda de informática</title>
    <link rel="stylesheet" type="text/css" href="../estilos.css" />

</head>

<?php

//session_start();
include ('../model/buysModel.php');

if (isset($_SESSION["usuario"])) {
    $usuario = $_SESSION["usuario"];
    ?>

    <body>
    <a href="javascript:history.back()"><- Go Back</a>
        <h3>Información del Usuario</h3>
        <!-- Muestra la información del usuario -->
        <p>Nombre: <?= $usuario['username'] ?></p>
        <p>Email: <?= $usuario['mail'] ?></p>
        <p>Description: <?= $usuario['description']?></p>
        <?php

        $compras = obtenerCompras($pdo, $usuario['id']);

        // Mostrar las compras
        if (count($compras) > 0) {
            echo "<h3>Compras realizadas</h3>";
            foreach ($compras as $compra) {
                echo "<p>Producto: " . $compra['nombre'] . "</p>";
                echo "<p>Descripción: " . $compra['descripcion'] . "</p>";
                echo "<p>Precio: " . $compra['precio'] . "</p>";
                echo "<hr>";
            }
        } else {
        echo "<p>No se encontraron compras realizadas</p>";
        }

        ?>

        <h1>Editar los datos del usuario:</h1>
        <form action="./update_user.php" method="post">
  <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
  <label for="username">Nombre:</label>
  <input type="text" name="username" id="username" value="<?= $usuario['username'] ?>">
  <label for="mail">Email:</label>
  <input type="email" name="mail" id="mail" value="<?= $usuario['mail'] ?>">
  <label for="description">Descripción:</label>
  <textarea name="description" id="description" cols="30" rows="10"><?= $usuario['description'] ?></textarea>
  <input type="submit" value="Actualizar">
</form>
    </body>
    </html>

    <?php
} else {
    echo "No se ha iniciado sesión";
}
?>