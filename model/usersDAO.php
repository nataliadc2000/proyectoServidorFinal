<?php 
require_once("../connection/Connection.php");
require("../model/users.php");

function selectUsuarios($pdo) {
    try {
        //Hacemos la query
        $statement = $pdo->query("SELECT * from users ");

        $results = [];

        foreach ($statement->fetchAll() as $p) {
            $objectP = new Users($p["username"], $p["mail"],$p["pass"],$p["description"]);
            array_push($results, $objectP);
        }
        return $results;
    }catch (PDOException $e) {
        echo "No se ha podido completar la transaccion" .$e;
    }
}





?>