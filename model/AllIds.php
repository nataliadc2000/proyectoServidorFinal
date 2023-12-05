<?php

include ('../connection/connection.php');

function obtenerProductosPorIds($pdo, $nameProducts) {
    // Convertir los IDs de los productos a una cadena separada por comas
    // Consultar la base de datos para obtener los detalles de los productos
    $query = "SELECT * FROM products WHERE nameProduct = '$nameProducts'";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $productos;

    isset($_SESSION["carritoProductos"]);
    
}

function obtenerServiciosPorIds($pdo, $nameService) {
    
    // Consultar la base de datos para obtener los detalles de los servicios
    $query = "SELECT * FROM services WHERE nameService ='$nameService'";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $servicios = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $servicios;
}
?>