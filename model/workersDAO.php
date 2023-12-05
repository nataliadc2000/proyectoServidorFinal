<?php 
require_once("../connection/connection.php");
require("../model/workers.php");

function selectWorkers($pdo){
    try{
        $statement = $pdo->query("SELECT * from workers");

        $resultWorkers = [];
        foreach($statement->fetchAll() as $w){
            $objectW = new Workers($w["nameWorkers"],$w["imagenWorkers"],$w["workWorkers"],$w["nacionalityWorkers"]);
            array_push($resultWorkers,$objectW);
        }
        return $resultWorkers;

    
    }catch(PDOException $e){
        echo "No se ha podido completar la transaccion";
    }
}
?>