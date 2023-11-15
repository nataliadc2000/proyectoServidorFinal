<?php
require_once("../connection/connection.php");
require("../model/product.php");
function selectproducts($pdo) {
    try {
        //Hacemos la query
        $statement = $pdo->query("SELECT * from products");

        $results = [];

        foreach ($statement->fetchAll() as $p) {
            $objectP = new Product($p["imagenProduct"], $p["nameProduct"],$p["descriptionProduct"],$p["priceProduct"],$p["categoryProduct"]);
            array_push($results, $objectP);
        }
        return $results;
    }catch (PDOException $e) {
        echo "No se ha podido completar la transaccion" .$e;
    }
}



?>