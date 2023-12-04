<?php
    require_once("../connection/connection.php");
    require("../model/services.php");

    function selectservices($pdo){
        try{
        $statement = $pdo->query("SELECT * from services");
        $results = [];

        foreach($statement->fetchAll() as $s){
            $objectS = new Services($s["nameservices"],$s["imageservices"],$s["descriptionservices"],$s["priceServices"],$s["categoryservices"]);
            array_push($results,$objectS);
        }
        return $results;
    }catch(PDOException $e){
        echo "No se ha podido completar la transaccion".$e;
    }
}
?>