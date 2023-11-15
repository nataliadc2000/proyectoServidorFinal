<?php 
require_once("../controller/productPartsOfTheComputerController.php");
?>

<!DOCTYPE html>
 <head>

    <meta charset="UTF-8">
    <meta name="description" content="Este es mi portfolio personal">
    <meta name="keywords" content="html, css, sass, bootstrap, js, portfolio, proyectos">
    <meta name="language" content="EN">
    <meta name="author" content="tumail@vedruna.es">
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


    <!-- Icono al lado del titulo -->
    <link rel="shortcut icon" href="media/icon/favicon.png" type="image/xpng">

    <!-- Titulo -->
    <title>Tu nombre's portfolio</title>
<style>
  .product {
  display: inline-block;
  width: 30%;
  height: 50px;
}
.product img {
    height:100px;
    height:100px;
}
</style>
</head>
 <body>
 <header>
    <div style="background-color: azure;" >
        <a style="color:black
        ; font-size: 20px;"> Bienvenidos a la pagina principal de los productos</a>

    </div>
 </header>
  
 
 <div >
    <a class="btn btn-primary"href="../view/productView.php">Todos los productos</a>
 <a class="btn btn-primary" href="../view/productPerifericosView.php">perifericos</a>
 <a class="btn btn-primary" href="../view/productPartsOfTheComputerView.php">Partes de la computadora</a>
 <a class="btn btn-primary" href="../view/productTeclasView.php">Teclas</a>
    <a class="btn btn-primary" href="../view/ServicesView.php">Servicios</a>
     
    </form>
</div>    
<form action="../controller/productPartsOfTheComputerController.php">
    <div style="width: 100%">
    <?php foreach($resultsProParts as $product): ?>
       <div class="product">
        <img src=<?= $product->imagenProduct;?>></img>
        <h2><?= $product->nameProduct; ?></h2>
        <p><?= $product->descriptionProduct; ?></p>
        <p>Precio: <?= $product->priceProduct; ?></p>
    </div>
        <?php endforeach; ?>
    </div>
    </form>
 </body>
 </html>