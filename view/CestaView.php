<?php 

include("../model/AllIds.php")?>

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

<body>
    <header>
    <div style="background-color: azure;" >
        <a style="color:black
        ; font-size: 20px;"> Welcome to the main product page</a>
        <a href="./userperfil.php">My perfil</a> 
    </div>
 </header>
<?php
   
    // Verificar si se ha enviado el formulario de eliminar producto
    if (isset($_POST["eliminarProducto"])) {
        // Obtener el ID del producto a eliminar
        $idProductoEliminar = $_POST["eliminarProducto"];
        // Buscar el índice del producto en el array del carrito de productos
        $indiceProducto = array_search($idProductoEliminar, $_SESSION["carritoProductos"]);
        // Eliminar el producto del carrito
        unset($_SESSION["carritoProductos"][$indiceProducto]);
        // Redirigir al usuario a la página de la cesta
        header("Location: CestaView.php");
    }
    // Verificar si se ha enviado el formulario de eliminar servicio
    if (isset($_POST["eliminarServicio"])) {
        // Obtener el ID del servicio a eliminar
        $idServicioEliminar = $_POST["eliminarServicio"];
        // Buscar el índice del servicio en el array del carrito de servicios
        $indiceServicio = array_search($idServicioEliminar, $_SESSION["carritoServicios"]);
        // Eliminar el servicio del carrito
        unset($_SESSION["carritoServicios"][$indiceServicio]);
        // Redirigir al usuario a la página de la cesta
        header("Location: CestaView.php");
    }
    // Verificar si la variable de sesión "carritoProductos" existe
    if (!isset($_SESSION["carritoProductos"])) {
        $_SESSION["carritoProductos"] = array(); // Si no existe, inicializarla como un array vacío
    }
    if (isset($_POST["idProducto"])) {
        // Obtener el ID del producto seleccionado
        $idProducto = $_POST["idProducto"];
        // Agregar el ID del producto al carrito de productos
        $_SESSION["carritoProductos"][] = $idProducto;
    }
    // Verificar si la variable de sesión "carritoServicios" existe
    if (!isset($_SESSION["carritoServicios"])) {
        $_SESSION["carritoServicios"] = array(); // Si no existe, inicializarla como un array vacío
    }
    if (isset($_POST["idServicio"])) {
        // Obtener el ID del servicio seleccionado
        $idServicio = $_POST["idServicio"];
        // Agregar el ID del servicio al carrito de servicios
        $_SESSION["carritoServicios"][] = $idServicio;
    }
    // Verificar si la variable de sesión "carritoProductos" existe y tiene productos
    if (isset($_SESSION["carritoProductos"]) && count($_SESSION["carritoProductos"]) > 0) {
        // Obtener los IDs de los productos del carrito
        $idsProductos = $_SESSION["carritoProductos"];
        // Obtener los detalles de los productos desde la base de datos
        $productosCarrito = obtenerProductosPorIds($pdo, $idsProductos);
        // Mostrar los productos en el carrito
        foreach ($productosCarrito as $producto) {
            echo $producto['nameProduct'] . "<br>";
            echo $producto['descriptionProduct'] . "<br>";
            echo $producto['priceProduct'] . "<br>";
            echo $producto['categoriaProducto'] . "<br>";
            echo '<img src="' . $producto['imagenProduct'] . '"><br>';
            echo "<br>";
            ?>
            <form method="POST" action="">
                <input type="hidden" name="eliminarProducto" value="<?php echo $producto['idProducto']; ?>">
                <button type="submit" class="btn btn-primary">Eliminar</button>
            </form>
        <?php
        }
    } else {
        echo "No hay productos en el carrito";
    }
    // Verificar si la variable de sesión "carritoServicios" existe y tiene servicios
    if (isset($_SESSION["carritoServicios"]) && count($_SESSION["carritoServicios"]) > 0) {
        // Obtener los IDs de los servicios del carrito
        $idsServicios = $_SESSION["carritoServicios"];
        // Obtener los detalles de los servicios desde la base de datos
        $serviciosCarrito = obtenerServiciosPorIds($pdo, $idsServicios);
        // Mostrar los servicios en el carrito
        foreach ($serviciosCarrito as $servicio) {
            echo $servicio['nameservices'] . "<br>";
            echo $servicio['descriptionServices'] . "<br>";
            echo $servicio['priceServices'] . "<br>";
            echo $servicio['categoryServices'] . "<br>";
            echo '<img src="' . $servicio['imageservices'] . '"><br>';
            echo "<br>";
            ?>
            <form method="POST" action="">
                <input type="hidden" name="eliminarServicio" value="<?php echo $servicio['idServicio']; ?>">
                <button type="submit" class="btn btn-primary">Eliminar</button>
            </form>
        <?php
        }
    } else {
        echo "No hay servicios en el carrito";
    }
    ?>
</body>

</html>