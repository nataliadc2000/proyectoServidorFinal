<?php 

include("../connection/connection.php");
function obtProductsForID($pdo,$idsProducts){
     // Convertir los IDs de los productos a una cadena separada por comas
     $idsProductosStr = implode(",", $idsProducts);
    
     // Consultar la base de datos para obtener los detalles de los productos
     $query = "SELECT * FROM products WHERE idProducto IN ($idsProductosStr)";
     $stmt = $pdo->prepare($query);
     $stmt->execute();
     $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
     return $productos;
}
function obtServicesForId($pdo,$idsServices){
    $idsServicesStr = implode(",",$idsServices);
    $query = "SELECT * FROM services WHERE idServicio IN ($idsServicesStr)";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $servicios = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $servicios;
}
?>