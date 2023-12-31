<?php

include ('../connection/connection.php');

function obtenerCompras($pdo,$usuario) {
    
    try {

        $stmt = $pdo->prepare("SELECT * FROM carrito_usuario WHERE id_usuario = :usuario_id");
        $stmt->bindParam(':usuario_id', $_SESSION['usuario']['id']);
        $stmt->execute();
        $compras = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $compras;
    } catch (PDOException $e){
        echo $e;
        require("../errors/Error.php");
    
    }
}


?>