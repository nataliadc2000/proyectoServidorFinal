<?php 

require_once("../model/productDAO.php");

$resultsProPeri = selectProductForperipherals($pdo);

$pdo = null;

header("./view/productView.php");

function agregarProductosAlCarrito($product){
    array_push($listaproducts, $product);
    $json= json_encode($listaproducts);
    setcookie('products',$json);
}


