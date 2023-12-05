<?php
require_once("../connection/connection.php");
require("../model/product.php");
function selectproducts($pdo) {
    try {
        //Hacemos la query
        $statement = $pdo->query("SELECT * from products");

        $results = [];

        foreach ($statement->fetchAll() as $p) {
            $objectP = new Product($p['idproducts'],$p["imagenProduct"], $p["nameProduct"],$p["descriptionProduct"],$p["priceProduct"],$p["categoryProduct"]);
            array_push($results, $objectP);
        }
        return $results;
    }catch (PDOException $e) {
        echo "No se ha podido completar la transaccion" .$e;
    }
}
function selectProductForperipherals($pdo) {
    try {
        $statement = $pdo->prepare("SELECT * FROM products WHERE categoryProduct = 'peripherals'");
        $statement->execute();
        $resultsPeri = [];
        foreach ($statement->fetchAll() as $p) {
            $objectP = new Product($p['idproducts'],$p['imagenProduct'],$p['nameProduct'],$p['descriptionProduct'],$p['priceProduct'],$p['categoryProduct']);
            array_push($resultsPeri, $objectP);
        }
        return $resultsPeri;
    } catch (PDOException $e) {
        echo "No se ha podido completar la transacción: " . $e->getMessage();
        return [];
    }
}

function selectProductForPartsOfTheComputer($pdo) {
    try {
        $statementparts = $pdo->prepare("SELECT * FROM products WHERE categoryProduct ='parts of the computer'");
        $statementparts->execute();
        $resultsParts = [];
        foreach ($statementparts->fetchAll() as $par) {
            $objectPar = new Product($par['idproducts'],$par['imagenProduct'], $par['nameProduct'], $par['descriptionProduct'], $par['priceProduct'], $par['categoryProduct']);
            array_push($resultsParts, $objectPar);
        }
        return $resultsParts;
    } catch (PDOException $e) {
        echo "No se ha podido completar la transacción: " . $e->getMessage();
        return [];
    }
}

function selectProductForTeclas($pdo) {
    try {
        $statementteclas = $pdo->prepare("SELECT * FROM products WHERE categoryProduct ='keys'");
    //    echo $statementteclas;
        $statementteclas->execute();
        $resultsTeclas = [];
        foreach ($statementteclas->fetchAll() as $par) {
            // echo $par;
            $objectPar = new Product($par['idproducts'], $par['imagenProduct'], $par['nameProduct'], $par['descriptionProduct'], $par['priceProduct'], $par['categoryProduct']);
            array_push($resultsTeclas, $objectPar);
        }
        return $resultsTeclas;
    } catch (PDOException $e) {
        echo "No se ha podido completar la transacción: " . $e->getMessage();
        return [];
    }
}



?>