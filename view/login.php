<?php 

include ('../connection/connection.php');


try {

    $stmt = $pdo -> prepare ("SELECT * FROM users WHERE username = :username");

    $username = $_POST['username'];

    $stmt -> bindParam (':username' , $username);
    $stmt -> execute();    

    if ($stmt -> rowCount() == 1) {        
       
            echo "Login correcto";
            $_SESSION["usuario"] = $stmt -> fetch();
            setcookie("username", $_SESSION["usuarios"]->username, time() + (86400 * 2), "/");
            header("Location: ../view/productView.php");

        
        
    } else {
        echo "Login incorrecto";
        header("Location: ../view/LoginView.php");
    }

} catch (PDOException $e) {

    echo $e;
    require("../errors/Error.php");
    
}

 


?>