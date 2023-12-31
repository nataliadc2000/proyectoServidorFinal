<?php 
require_once("../controller/ServicesController.php");
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
        ; font-size: 20px;"> Welcome to the main product page</a>
<a href="./userperfil.php">My perfil</a> 
    </div>
 </header>
  
 
 <div >
    <!-- make the button that is the part of the program and we use this to change the web in this moment-->
 <a class="btn btn-primary"href="../view/productView.php">All Products</a>
 <a class="btn btn-primary" href="../view/productPerifericosView.php">Peripherals</a>
 <a class="btn btn-primary" href="../view/productPartsOfTheComputerView.php">Computer Parts</a>
 <a class="btn btn-primary" href="../view/productTeclasView.php">Keys</a>
    <a class="btn btn-primary" href="../view/ServicesView.php">Services</a>
        <a class="btn btn-primary" href="../view/aboutusview.php">About us </a>
        <a class="btn btn-primary" href ="../view/contactusview.php">Contact us</a> 
        <a class="btn btn-primary" href="../view/CestaView.php">shopping trolley</a>    
</div>    
<form action="../controller/ServicesController.php">
    <div style="width: 100%">
    <?php foreach($resultsProPeri as $service): ?>
       <div class="product">
        <img src=<?= $service->imagesServices;?>></img>
        <h2><?= $service->nameService; ?></h2>
        <p><?= $service->descriptionServices; ?></p>
        <p>Precio: <?= $service->priceServices; ?></p>
        <input type="hidden" name="idservices" value="<?php echo $service->idservices; ?>">
    </div>
        <?php endforeach; ?>
    </div>
</form>
 </body>
 </html>