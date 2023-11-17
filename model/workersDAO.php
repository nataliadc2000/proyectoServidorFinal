<?php 
require_once("../connection/connection.php");
require("../model/workers.php");

function selectWorkers($pdo){
    try{
        $statement = $pdo->query("SELECT * from workers");

        $resultWorkers = [];
        foreach($statement->fetchAll() as $w){
            $objectW = new Workers($w["nameworkers"],$w["imagenworkers"],$w["perfilworkers"],$w["nacionalityworkers"]);
        }
    
    }catch(PDOException $e){
        echo "No se ha podido completar la transaccion";
    }
}
?>