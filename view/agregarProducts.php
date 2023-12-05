<?php 

include ('../connection/connection.php');

if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=[];
}
if(isset($_POST['nameProducts'])){
    $idProduct = $_POST['nameProducts'];
    $_SESSION['cart'][] = $idProduct;

    $query = "SELECT * FROM products WHERE nameProduct = '$idProduct'";
    $result = $pdo->query($query);
   

    array_push($arrayProduct,$result);

    print_r($arrayProduct);
}


header('Location: ' . $_SERVER['HTTP_REFERER']);

?>