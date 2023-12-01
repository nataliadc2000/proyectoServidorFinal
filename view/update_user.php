<?php
// Incluir el archivo de conexión a la base de datos
require_once "../connection/connection.php";

try {

    
       $id = $_POST['id'];
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $description = $_POST['description'];
    
    $stmt = $pdo->prepare ("UPDATE users SET username='$username', mail='$mail', description='$description' WHERE id=$id");

    $stmt->execute();

    $_SESSION["usuario"]["username"] = $_POST['$username'];
   $_SESSION["usuario"]["mail"]=$_POST["mail"];
    $_SESSION["usuario"]["description"] = $_POST["description"];

    echo ("Cambios completados");
    header("Location: ../view/userperfil.php");

} catch (PDOException $e){
    echo $e;
    // require("../errors/Error.php");

}
//Cerrar la conexion a la base de datos
?>