<?php
require_once("../connection/connection.php");
require("../model/product.php");
function selectproducts($pdo,$orden) {
    try {
        //Hacemos la query
        $sql = "SELECT * from products";

 // Agregar la cláusula ORDER BY según el valor de $orden
        switch ($orden) {
            case 'nombre_asc':
                $sql .= " ORDER BY nameProduct ASC";
                break;
            case 'nombre_desc':
                $sql .= " ORDER BY nameProduct DESC";
                break;
            case 'precio_asc':
                $sql .= " ORDER BY priceProduct ASC";
                break;
            case 'precio_desc':
                $sql .= " ORDER BY priceProduct DESC";
                break;
            default:
                // Opción por defecto si no se selecciona ninguna opción
                break;
    }
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;     
    }catch (PDOException $e) {
        echo "No se ha podido completar la transaccion" .$e;
    }
}
function selectProductForperipherals($pdo,$orden) {
  

    try {

        $sql = "SELECT * FROM products WHERE categoryProduct = :categoriaProducto";

         // Agregar la cláusula ORDER BY según el valor de $orden
        switch ($orden) {
            case 'nombre_asc':
                $sql .= " ORDER BY nameProduct ASC";
                break;
            case 'nombre_desc':
                $sql .= " ORDER BY nameProduct DESC";
                break;
            case 'precio_asc':
                $sql .= " ORDER BY priceProduct ASC";
                break;
            case 'precio_desc':
                $sql .= " ORDER BY priceProduct DESC";
                break;
            default:
                // Opción por defecto si no se selecciona ninguna opción
                break;
    }
        $stmt = $pdo->prepare($sql);
        $categoriaProducto = 'peripherals';
        $stmt -> bindParam (':categoriaProducto' , $categoriaProducto);
        $stmt->execute();
        $resultsParts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultsParts;      
       
        

    } catch (PDOException $e){
        echo $e;
        require("../errors/Error.php");
        return false;
    
    }
    
}

function selectProductForPartsOfTheComputer($pdo,$orden) {
       
    try {

        $sql = "SELECT * FROM products WHERE categoryProduct = :categoriaProducto";

         // Agregar la cláusula ORDER BY según el valor de $orden
        switch ($orden) {
            case 'nombre_asc':
                $sql .= " ORDER BY nameProduct ASC";
                break;
            case 'nombre_desc':
                $sql .= " ORDER BY nameProduct DESC";
                break;
            case 'precio_asc':
                $sql .= " ORDER BY priceProduct ASC";
                break;
            case 'precio_desc':
                $sql .= " ORDER BY priceProduct DESC";
                break;
            default:
                // Opción por defecto si no se selecciona ninguna opción
                break;
    }
        $stmt = $pdo->prepare($sql);
        $categoriaProducto = 'parts of the computer';
        $stmt -> bindParam (':categoriaProducto' , $categoriaProducto);
        $stmt->execute();
        $resultsParts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultsParts;      
       
        

    } catch (PDOException $e){
        echo $e;
        require("../errors/Error.php");
        return false;
    
    }
    
}

function selectProductForTeclas($pdo,$orden) {
       
    try {

        $sql = "SELECT * FROM products WHERE categoryProduct = :categoriaProducto";

         // Agregar la cláusula ORDER BY según el valor de $orden
        switch ($orden) {
            case 'nombre_asc':
                $sql .= " ORDER BY nameProduct ASC";
                break;
            case 'nombre_desc':
                $sql .= " ORDER BY nameProduct DESC";
                break;
            case 'precio_asc':
                $sql .= " ORDER BY priceProduct ASC";
                break;
            case 'precio_desc':
                $sql .= " ORDER BY priceProduct DESC";
                break;
            default:
                // Opción por defecto si no se selecciona ninguna opción
                break;
    }
        $stmt = $pdo->prepare($sql);
        $categoriaProducto = 'keys';
        $stmt -> bindParam (':categoriaProducto' , $categoriaProducto);
        $stmt->execute();
        $resultsTeclas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultsTeclas;      
       
        

    } catch (PDOException $e){
        echo $e;
        require("../errors/Error.php");
        return false;
    
    }
    
}



?>